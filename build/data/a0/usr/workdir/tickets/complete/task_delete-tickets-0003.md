# Ticket: Delete Todo and Ongoing Tickets

**Type:** Task
**Branch:** task/delete-tickets-0003
**Assigned Agent:** agent0

## Description
Implement functionality to permanently delete tickets from the 'todo' and 'ongoing' categories. This will remove the corresponding markdown files from the filesystem.

### Technical Requirements:
- **TicketService.php**:
    - Add a deleteTicket(string filename, string category): void method that validates the category and deletes the file from the corresponding path.
- **TicketController.php**:
    - Add a route/action POST /tickets/delete/{category}/{filename} to handle deletion.
- **AppPackage.php**:
    - Register the new delete route.
- **View (index.php)**:
    - Add a 'Delete' button (DaisyUI btn-error btn-xs) to each ticket in the 'To Do' and 'In Progress' columns.
    - Include a confirmation dialog (simple JS confirm() or DaisyUI modal).

## Acceptance Criteria
- [x] Tickets in 'To Do' and 'In Progress' columns can be deleted via the UI.
- [x] Deleted files are removed from /a0/usr/workdir/tickets/{category}.
- [x] Unit tests cover the delete functionality in TicketService, ensuring it only deletes from allowed directories.
- [x] Code passes PHPStan level 9 check.

## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch task/delete-tickets-0003 before starting work. All commits must be pushed to this branch.
