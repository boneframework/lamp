# Ticket: Register TicketService in AppPackage

**Type:** Feature
**Branch:** `feature/register-ticket-service-002`

## Description
Register the newly created `TicketService` in the dependency injection container. Add a factory method within `src/AppPackage.php` to correctly instantiate the `TicketService` via Barnacle.

## Acceptance Criteria
- [x] Add factory method for `TicketService` in `src/AppPackage.php`.
- [x] Ensure the service is correctly resolved via the DI container.
- [x] Ensure strict typing (`declare(strict_types=1);`).
- [x] PHPStan level 9 passes with zero errors.

## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch `feature/register-ticket-service-002` before starting work. All commits must be pushed to this branch.
