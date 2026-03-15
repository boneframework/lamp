# Feature Request: Edit Tickets on the /tickets Page

## Business Requirements
Users need the ability to edit tickets directly from the main tickets listing page (`/tickets`). Currently, users can delete tickets, but they lack a quick way to edit existing ticket details without navigating away or using other methods. 

## Details
- Add an 'Edit' button to each ticket card on the `/tickets` page.
- The 'Edit' button should be placed immediately next to the existing 'Delete' button.
- The UI should remain consistent with the existing layout (e.g., using DaisyUI buttons, potentially `btn-info` or `btn-warning` `btn-xs` to match the delete button's styling).
- Clicking the 'Edit' button should allow the user to modify the ticket's properties (title, description, status, etc.).

## Instructions for Tech Lead
- Research the best approach for implementing the edit functionality (e.g., a modal popup, inline editing, or navigation to a dedicated edit page).
- Determine backend requirements: check if update methods exist in `TicketService` and `TicketController`.
- Update this ticket with technical implementation details, proposed architecture, and any required API/Controller changes before passing it to development.

## Technical Implementation Plan

### 1. Architectural Approach
**Dedicated Edit Page**: A dedicated edit page (`/tickets/edit/{id}`) is the recommended approach. Using a modal would require either printing a modal for every single ticket (bloating the DOM) or using JS/HTMX to fetch data dynamically. Given the simplicity of the Bone Framework SSR approach and the potential size of markdown descriptions, a dedicated page ensures a clean, robust, and accessible user experience.

### 2. Frontend UI Requirements
*   **Update `src/View/tickets/index.php`**: Add an "Edit" anchor tag styled as a DaisyUI button immediately preceding the "Delete" button form in each column.
    ```html
    <a href="/tickets/edit/<?= $ticket->getId() ?>" class="btn btn-warning btn-xs">Edit</a>
    ```
*   **Create `src/View/tickets/edit.php`**: Create a new form view for editing. It should include inputs for `title`, `description` (textarea), `status` (select), and `type` (select), populated with the existing `$ticket` data.

### 3. Backend Requirements
*   **`src/Service/TicketService.php`**: 
    The service currently has `getTicket($id)` and `save(Ticket $ticket)`. We will add an `updateTicket(int $id, array $data)` method to encapsulate entity modification:
    ```php
    public function updateTicket(int $id, array $data): void
    {
        $ticket = $this->getTicket($id);
        if ($ticket !== null) {
            if (isset($data['title'])) $ticket->setTitle($data['title']);
            if (isset($data['description'])) $ticket->setDescription($data['description']);
            if (isset($data['status'])) $ticket->setStatus($data['status']);
            // ... apply other updateable fields
            $this->em->flush();
        }
    }
    ```
*   **`src/Controller/TicketController.php`**:
    Implement an `edit` method that handles both the `GET` (render form) and `POST` (process update) requests.
    ```php
    public function edit(ServerRequestInterface $request, array $args): ResponseInterface
    {
        $id = (int) $args['id'];
        $ticket = $this->ticketService->getTicket($id);
        
        if ($ticket === null) {
            return new RedirectResponse('/tickets');
        }

        if ($request->getMethod() === 'POST') {
            $data = $request->getParsedBody();
            $this->ticketService->updateTicket($id, $data);
            return new RedirectResponse('/tickets');
        }

        $body = $this->view->render('tickets::edit', ['ticket' => $ticket]);
        return new HtmlResponse($body);
    }
    ```
*   **`src/AppPackage.php`**:
    Register the new routes for the edit functionality.
    ```php
    $router->map('GET', '/tickets/edit/{id:number}', [TicketController::class, 'edit']);
    $router->map('POST', '/tickets/edit/{id:number}', [TicketController::class, 'edit']);
    ```
