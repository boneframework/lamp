# Ticket: Add 'To Scope' column in ticket management system

**Type:** Feature
**Branch:** `feature/to-scope-column-0001`
**Assigned Agent:** Unassigned

## Description
Add a new 'To Scope' column in the ticket management system.

Requirements:
1. The tickets for this status will be stored in `/a0/usr/workdir/tickets/toscope`.
2. Update `src/Service/TicketService.php` to include logic for fetching and managing tickets from the `toscope` directory. This might involve adding a constant like `DIR_TOSCOPE` and a new method.
3. Update the tickets view in `src/View/tickets/index.php` to display the new 'To Scope' column. It must be positioned before the 'To Do' column.
4. Ensure PHPStan level 9 compliance.
5. Update tests (e.g., `tests/Unit/TicketServiceTest.php`) if necessary.

## Acceptance Criteria
- [ ] `TicketService` includes logic for managing tickets in `/a0/usr/workdir/tickets/toscope`.
- [ ] 'To Scope' column is displayed before 'To Do' in `src/View/tickets/index.php`.
- [ ] Code is PHPStan level 9 compliant.
- [ ] Relevant tests are updated/added and passing.

## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch `feature/to-scope-column-0001` before starting work. All commits must be pushed to this branch.
