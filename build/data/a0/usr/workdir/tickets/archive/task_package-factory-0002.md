# Ticket: Update TicketController Factory in AppPackage

**Type:** Task
**Branch:** task/package-factory-0002

## Description
Update the TicketController factory in src/AppPackage.php to inject the TicketService instance from the container.

## Acceptance Criteria
- [x] Locate the TicketController::class factory in addToContainer.
- [x] Retrieve TicketService::class from the container c.
- [x] Pass the service instance to the TicketController constructor.

## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch task/package-factory-0002 before starting work. All commits must be pushed to this branch.
