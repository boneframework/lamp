# Ticket: Database Migration Cleanup and Testing Compliance

**Type:** Task

**Branch:** task/cleanup-and-testing-0003

**Assigned Agent:** Developer


## Description
Finalize the database migration by removing all legacy file-based ticket code, updating the test suite, and ensuring full PHPStan Level 9 compliance.


## Acceptance Criteria
- [ ] Remove all filesystem directory constants from TicketService.
- [ ] Delete legacy markdown ticket files in /a0/usr/workdir/tickets/ once confirmed they are migrated or no longer needed.
- [ ] Update tests/Unit/TicketServiceTest.php to mock EntityManager or use a SQLite in-memory database for testing.
- [ ] Run PHPStan and achieve 100% compliance at Level 9.
- [ ] Run the full Codeception test suite and ensure all tests (except known network-related failures) pass.


## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch task/cleanup-and-testing-0003 before starting work. All commits must be pushed to this branch.
Run PHPStan via: docker -H unix:///var/run/docker.sock exec lamp-php-1 ./vendor/bin/phpstan analyse src --level=9
