# Ticket: Migrate File-Based Ticket System to Database Entities

**Type:** Feature

**Branch:** `feature/db-ticket-migration-0001`

**Assigned Agent:** Developer


## Description
Remove the current file-based ticket system and migrate to database ticket entities. 
Create a new Doctrine database entity for Tickets. The DB entity MUST contain the exact same fields as the `.md` definition found in the `ticket-creation-standard` skill. 
Specifically, the entity must map to:
- Title
- Type
- Branch
- Assigned Agent
- Description
- Acceptance Criteria
- Developer Instructions

Refactor the application (`TicketService`, `TicketController`, etc.) to use this new database entity for all ticket operations instead of the filesystem.


## Acceptance Criteria
- [x] Create `Ticket` Doctrine entity with fields exactly matching the markdown template (title, type, branch, assigned_agent, description, acceptance_criteria, developer_instructions).
- [x] Generate and execute Doctrine migrations to create the corresponding ticket table in the database.
- [x] Refactor `TicketService` to perform CRUD operations using the DB entity.
- [x] Refactor `TicketController` to integrate with the updated DB-backed service operations.
- [x] Remove all legacy code related to reading/writing `.md` files for tickets.
- [x] Update all related Unit, Functional, and Acceptance tests.
- [x] Maintain 100% PHPStan Level 9 compliance.


## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch `feature/db-ticket-migration-0001` before starting work. All commits must be pushed to this branch.
