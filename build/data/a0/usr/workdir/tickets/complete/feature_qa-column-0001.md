# Ticket: Add QA Column to Tickets Page

**Type:** Feature

**Branch:** `feature/qa-column-0001`

**Assigned Agent:** developer

## Description
We need a new "QA" column on the `/tickets` page. It should be placed after the "In Progress" column.
This requires adjusting the `TicketService` and the relevant view in the same way we did for the "To Scope" column.
The user also mentioned they have created a `/a0/usr/workdir/tickets/qa` folder, which should likely be integrated into the logic for populating this column.

## Technical Scope
- **Backend (PHP)**: Update `TicketService` to include scanning and parsing of markdown files located in `/a0/usr/workdir/tickets/qa`. Integrate this into the data model returned to the view.
- **Frontend (HTML/JS)**: Modify the view (e.g., `index.php` or template) to render the new "QA" column. Position it right after "In Progress". Ensure that the UI rendering loop accounts for the new status and that any status-changing logic handles the `qa` folder correctly.

## Acceptance Criteria
- [x] A new "QA" column is displayed on the `/tickets` page.
- [x] The "QA" column is positioned immediately after the "In Progress" column.
- [x] `TicketService` is updated to handle tickets for the new "QA" column (reading from the newly created `qa` folder).
- [x] The view for the `/tickets` page is updated to render the new column correctly.

## Developer Instructions
⚠️ **MANDATORY WORKFLOW RULES:**
1. **Skill Loading**: You must load the `php-pro` skill before any PHP work and the `javascript-pro` skill before any JavaScript work.
2. **Branching**: This project ticket is associated with this `.md` file (`feature_qa-column-0001.md`) and the git branch `feature/qa-column-0001`.
3. **Checkout**: You must strictly check out the associated git branch `feature/qa-column-0001` before beginning work on the ticket.
4. **Commits**: You must commit all resulting changes directly to that branch upon completion.
