# Ticket: Display more info on the cards on the /ticket page

**Type:** Feature

**Branch:** `feature/ticket-card-info-0011`

**Assigned Agent:** developer


## Description
As a project manager, I want to see more information on the ticket cards on the /ticket page Kanban board, including the associated project, so that I can easily identify and categorize tickets at a glance.

Given a ticket has a project assigned
When I view the Kanban board on the /ticket page
Then the ticket card should display the project name and any other missing relevant fields

## Acceptance Criteria
- [x] The optional 'project' text field is displayed on the ticket cards.
- [x] Any other relevant missing fields from the ticket entity are displayed on the cards.


## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch `feature/ticket-card-info-0011` before starting work. All commits must be pushed to this branch.

**Technical Details:**
- Load the 'php-pro' skill before PHP work and the 'javascript-pro' skill before JavaScript work.
- The `project` field on the Ticket entity is an optional (nullable) simple text field (not a relational entity).
- Review `src/Entity/Ticket.php` to identify any other non-displayed fields.
- Update the ticket card view template (e.g., inside `src/View/tickets/`) to render the project field and other missing fields.
- Handle null project values safely in the UI.
