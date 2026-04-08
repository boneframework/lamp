# Ticket: Refactor TicketService to use Doctrine ORM

**Type:** Task

**Branch:** task/refactor-ticket-service-0001

**Assigned Agent:** Developer


## Description
Refactor App\Service\TicketService to use Doctrine's EntityManagerInterface for all ticket-related operations. The current filesystem-based logic and directory constants must be replaced with DB CRUD operations using the App\Entity\Ticket entity.


## Acceptance Criteria
- [ ] Inject EntityManagerInterface into TicketService via constructor.
- [ ] Implement getTicketsByCategory(string category): array using Doctrine repositories (filter by a 'status' or 'category' field if added, or handle mapping of legacy categories to DB state).
- [ ] Refactor parseFile and parseDirectory to be deprecated/removed.
- [ ] Implement saveTicket(Ticket ticket): void.
- [ ] Implement deleteTicket(int id): void.
- [ ] Implement moveTicket(int id, string targetCategory): void.
- [ ] Ensure all method return types and property types are strictly defined for PHPStan Level 9.


## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch task/refactor-ticket-service-0001 before starting work. All commits must be pushed to this branch.
Use docker -H unix:///var/run/docker.sock exec lamp-php-1 for any PHP commands.
