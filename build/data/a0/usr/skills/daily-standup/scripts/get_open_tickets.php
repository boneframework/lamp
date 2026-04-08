<?php
require '/var/www/html/vendor/autoload.php';
define('APPLICATION_PATH', '/var/www/html/');
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(APPLICATION_PATH);
$dotenv->safeLoad();
define('APPLICATION_ENV', $_ENV['APPLICATION_ENV'] ?? 'production');

use App\Service\TicketService;
use Doctrine\ORM\EntityManagerInterface;

$container = Bone\Application::ahoy()->bootstrap();
$em = $container->get(EntityManagerInterface::class);
$ticketService = new TicketService($em);

$statuses = ['toscope', 'todo', 'ongoing', 'qa'];
$openTickets = [];

foreach ($statuses as $status) {
    $method = 'get' . ucfirst(str_replace('toscope', 'toScope', $status));
    if ($status === 'todo') $method = 'getTodos';
    if ($status === 'qa') $method = 'getQa';
    $tickets = $ticketService->$method();
    foreach ($tickets as $ticket) {
        $openTickets[] = [
            'id' => $ticket->getId(),
            'title' => $ticket->getTitle(),
            'status' => $ticket->getStatus(),
            'branch' => $ticket->getBranch(),
            'agent' => $ticket->getAssignedAgent(),
        ];
    }
}

echo json_encode($openTickets, JSON_PRETTY_PRINT);
