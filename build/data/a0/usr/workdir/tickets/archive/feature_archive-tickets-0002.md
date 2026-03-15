# Ticket: Archive Completed Tickets

**Type:** Feature
**Branch:** feature/archive-tickets-0002

## Description
Implement functionality to move completed tickets to a dedicated 'archive' directory. This involves backend changes to manage file locations and UI updates to trigger the archive action.

### Technical Requirements:
- **TicketService.php**:
    - Add support for /a0/usr/workdir/tickets/archive directory.
    - Add getArchived() method.
    - Update parseDirectory() and related methods to return the filename (basename) of the ticket for identification.
    - Add a moveTicket(string filename, string sourceDir, string targetDir): void method.
- **TicketController.php**:
    - Add a route/action POST /tickets/archive/{filename} to handle archiving.
- **AppPackage.php**:
    - Register the new archive route.
- **View (index.php)**:
    - Add an 'Archive' button (DaisyUI btn-xs or similar) to each ticket in the 'Done' column.
    - The button should trigger a form post or JS fetch to the archive route.

## Acceptance Criteria
- [ ] Completed tickets can be moved to the archive folder via the UI.
- [ ] Archived tickets are no longer visible in the 'Done' column.
- [ ] Unit tests in tests/Unit/TicketServiceTest.php cover the move functionality.
- [ ] Code passes PHPStan level 9 check.

## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch feature/archive-tickets-0002 before starting work. All commits must be pushed to this branch.
