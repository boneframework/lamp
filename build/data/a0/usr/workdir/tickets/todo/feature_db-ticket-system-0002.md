# Ticket: Migrate Ticket System to Database

**Type:** Feature

**Branch:** `feature/db-ticket-system-0002`

**Assigned Agent:** Developer


## Description
Remove the current file-based ticket management system and migrate all ticket operations to use database entities. The system must transition from reading/writing markdown files in `/a0/usr/workdir/tickets` to performing CRUD operations using the `Ticket` entity via Doctrine.

The `Ticket` database entity MUST contain the exact same fields as the `.md` definition found in the `ticket-creation-standard` skill:
1. Title
2. Type
3. Branch
4. Assigned Agent
5. Description
6. Acceptance Criteria
7. Developer Instructions

## Acceptance Criteria
- [ ] File-based ticket storage logic in `TicketService` and elsewhere is removed.
- [ ] Database-backed ticket storage is fully implemented using Doctrine Repositories.
- [ ] `Ticket` entity fields are verified to match: title, type, branch, assignedAgent, description, acceptanceCriteria, developerInstructions.
- [ ] All existing controller actions (TicketController) are refactored to use the DB-backed service.
- [ ] Unit and Functional tests are updated/created to verify DB operations.
- [ ] Ensure `chmod 777` or appropriate permissions are no longer strictly required for ticket directories (as files are removed).


## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch `feature/db-ticket-system-0002` before starting work. All commits must be pushed to this branch.
