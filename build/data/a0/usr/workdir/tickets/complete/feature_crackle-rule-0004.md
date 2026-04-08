# Ticket: Implement Crackle Rule in Fizzbuzz

**Type:** Feature
**Branch:** feature/crackle-rule-0004
**Assigned Agent:** agent0

## Description
Update the Fizzbuzz logic to include a new rule: numbers divisible by 8 must return 'Crackle'. This rule should be additive to existing rules (3: Fizz, 5: Buzz, 7: Pop).

Examples:
- 8 -> 'Crackle'
- 16 -> 'Crackle'
- 24 -> 'FizzCrackle' (Divisible by 3 and 8)
- 40 -> 'BuzzCrackle' (Divisible by 5 and 8)
- 56 -> 'PopCrackle' (Divisible by 7 and 8)
- 120 -> 'FizzBuzzCrackle' (Divisible by 3, 5, and 8)
- 840 -> 'FizzBuzzPopCrackle' (Divisible by 3, 5, 7, and 8)

## Acceptance Criteria
- [ ] src/Fizzbuzz.php updated with the 'Crackle' logic (divisible by 8).
- [ ] tests/Unit/FizzbuzzTest.php updated with comprehensive test cases for the new rule and its combinations in the data provider.
- [ ] Code remains PHP 8.3 compliant with strict typing.
- [ ] PHPStan level 9 passing (docker -H unix:///var/run/docker.sock exec lamp-php-1 vendor/bin/phpstan analyse src tests/Unit --level 9).
- [ ] Unit tests passing (docker -H unix:///var/run/docker.sock exec lamp-php-1 vendor/bin/codecept run tests/Unit/FizzbuzzTest.php).

## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch feature/crackle-rule-0004 before starting work. All commits must be pushed to this branch.

### Commands
- **Check out branch:** git checkout dev-master && git checkout -b feature/crackle-rule-0004
- **Run Tests:** docker -H unix:///var/run/docker.sock exec lamp-php-1 vendor/bin/codecept run tests/Unit/FizzbuzzTest.php
- **Run PHPStan:** docker -H unix:///var/run/docker.sock exec lamp-php-1 vendor/bin/phpstan analyse src tests/Unit --level 9
