# Ticket: Refactor TicketController and Views for DB Integration

**Type:** Task

**Branch:** task/refactor-ticket-controller-0002

**Assigned Agent:** Developer


## Description
Update App\Controller\TicketController and the corresponding view templates to work with the refactored TicketService and Ticket entities. The controller should no longer pass filenames to the service, but rather entity IDs.


## Acceptance Criteria
- [ ] Update TicketController::index() to fetch tickets from the updated TicketService.
- [ ] Update TicketController::delete() to use ID-based deletion.
- [ ] Update TicketController::archive() to use ID-based state transitions.
- [ ] Update src/View/tickets/index.phtml (or equivalent) to use entity getters (e.g., ticket->getTitle()) instead of array keys.
- [ ] Ensure the UI still correctly displays the 5-column dashboard (To Scope, Todo, Ongoing, QA, Complete).


## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch task/refactor-ticket-controller-0002 before starting work. All commits must be pushed to this branch.
