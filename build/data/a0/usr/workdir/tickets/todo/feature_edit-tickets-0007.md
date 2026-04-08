# Ticket: Edit tickets directly on the tickets page

**Type:** Feature

**Branch:** feature/edit-tickets-0007

**Assigned Agent:** Developer


## Description
Implement a feature that allows users to edit existing tickets directly from the tickets page (http://boneframework.docker/tickets).
Changes must be persistent in the database.

**Note on Dependency:** This feature is strictly dependent on the completion of the database migration (feature/db-ticket-migration-0001). The implementation must use the Ticket Doctrine entity.


## Technical Specification

### 1. Routing
Add the following routes to src/AppPackage.php:
- GET /tickets/edit/{id}: Fetch ticket details for the edit form.
- POST /tickets/edit/{id}: Process the update submission.

### 2. Controller (App\Controller\TicketController)
Implement the following methods:
- edit(ServerRequestInterface request, array args): Retrieve the Ticket entity by ID. If using a modal, this may return JSON or the ticket data for a partial view.
- update(ServerRequestInterface request, array args): 
    - Extract form data (title, description, type, branch, assignedAgent, acceptanceCriteria, developerInstructions).
    - Update the Ticket entity.
    - Persist changes via TicketService.
    - Redirect back to /tickets.

### 3. Service (App\Service\TicketService)
Ensure the service supports DB operations (as specified in the migration ticket):
- getTicketById(int id): ?Ticket
- saveTicket(Ticket ticket): void

### 4. Frontend (src/View/tickets/index.php)
- **Edit Button:** Add an 'Edit' button in the collapsible content of each ticket card (next to the 'Delete' button).
- **Modal:** Use a DaisyUI modal (checkbox-controlled or <dialog>) containing a form.
- **Form Fields:** Include inputs for all Ticket entity fields.
- **Styling:** Ensure consistency with the existing DaisyUI theme.


## Acceptance Criteria
- [ ] Users can trigger an edit modal for a ticket on the tickets page.
- [ ] The edit form is pre-populated with current ticket data.
- [ ] Modifications to all fields (Title, Description, Branch, etc.) are saved to the database.
- [ ] The UI updates immediately upon successful save (after redirect).
- [ ] PHPStan Level 9 compliance is maintained.


## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch feature/edit-tickets-0007 before starting work. All commits must be pushed to this branch.
Ensure that feature/db-ticket-migration-0001 is merged or base your work on it.
