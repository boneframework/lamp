# Ticket: Replace fake data on the /tickets page with real tickets

**Type:** Feature
**Branch:** `feature/real-tickets-0001`

## Description
Integrate the `TicketService` into the `TicketController` and update the view to display real tickets instead of hardcoded fake data.

Tasks:
1. Modify `src/Controller/TicketController.php` so its constructor takes `App\Service\TicketService` as an argument.
2. Update the `TicketController` factory in `src/AppPackage.php` to inject the `TicketService` instance.
3. In the `TicketController`, retrieve the real tickets (Todos, Ongoing, Complete) using the service and pass the variables to the view's render method.
4. Adjust the view (`src/View/tickets/index.php`) to iterate over and display the real ticket variables instead of the hardcoded fake data.

Project Constraints:
- Use strict typing.
- Must pass PHPStan level 9.
- Keep the test suite green using the `bf-lamp` docker stack.

## Acceptance Criteria
- [x] `TicketController` accepts `TicketService` in its constructor.
- [x] `src/AppPackage.php` correctly injects `TicketService` into `TicketController`.
- [x] `TicketController` passes the real ticket data to the view.
- [x] `src/View/tickets/index.php` displays real tickets using loops.
- [x] PHPStan level 9 passes without errors.
- [x] Test suite remains green.

## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch `feature/real-tickets-0001` before starting work. All commits must be pushed to this branch.
