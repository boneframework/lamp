# Ticket: Inject TicketService into TicketController

**Type:** Task
**Branch:** task/controller-di-0001

## Description
Modify src/Controller/TicketController.php to inject App\Service\TicketService via the constructor.

## Acceptance Criteria
- [x] Declare TicketService as a private property.
- [x] Implement __construct to accept and assign the service.
- [x] Ensure strict typing is maintained (PHPStan level 9).

## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch task/controller-di-0001 before starting work. All commits must be pushed to this branch.
