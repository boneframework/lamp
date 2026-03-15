# Ticket: Add TicketService Categorization Methods

**Type:** Feature
**Branch:** `feature/ticket-service-methods-0001`

## Description
1. Update `TicketService` (`src/Service/TicketService.php`) to add 3 new public methods: `getTodos()`, `getOngoing()`, and `getComplete()`.
2. Update the `.md` reader to parse each ticket from the three respective folders (`todos`, `ongoing`, and `complete`) in the tickets directory. Hardcode the base path to `/a0/usr/workdir/tickets` for now.
3. Ensure these new methods return an array of parsed ticket data.

## Acceptance Criteria
- [x] `TicketService` has a public `getTodos()` method returning an array of parsed ticket data from `/a0/usr/workdir/tickets/todos`.
- [x] `TicketService` has a public `getOngoing()` method returning an array of parsed ticket data from `/a0/usr/workdir/tickets/ongoing`.
- [x] `TicketService` has a public `getComplete()` method returning an array of parsed ticket data from `/a0/usr/workdir/tickets/complete`.

## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch `feature/ticket-service-methods-0001` before starting work. All commits must be pushed to this branch.
