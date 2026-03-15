# Ticket: Add Categorization Methods to TicketService

**Type:** Feature
**Branch:** `feature/ticket-categories-0001`

## Description
We have a new feature request to organize and fetch tickets based on their respective status. This requires updating the `TicketService` to add new fetching methods and adjusting the markdown reader.

Tasks:
1. Update the `TicketService` to add 3 new public methods: `getTodos()`, `getOngoing()`, and `getComplete()`.
2. Update the `.md` reader to parse each ticket from the three respective folders in the tickets directory (`todo`, `ongoing`, `complete`). Hardcode the base path to `/a0/usr/workdir/tickets` for now.
3. Ensure these methods return an array of parsed ticket data.

## Acceptance Criteria
- [x] `TicketService` contains a public method `getTodos()` returning an array of parsed tickets from `/a0/usr/workdir/tickets/todo`.
- [x] `TicketService` contains a public method `getOngoing()` returning an array of parsed tickets from `/a0/usr/workdir/tickets/ongoing`.
- [x] `TicketService` contains a public method `getComplete()` returning an array of parsed tickets from `/a0/usr/workdir/tickets/complete`.
- [x] The `.md` reader implementation successfully reads and parses the ticket files from the respective directories into data arrays.

## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch `feature/ticket-categories-0001` before starting work. All commits must be pushed to this branch.
