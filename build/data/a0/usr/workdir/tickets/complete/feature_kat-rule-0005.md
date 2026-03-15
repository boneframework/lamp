# Ticket: Add 'Kat' rule for divisibility by 9

**Type:** Feature
**Branch:** `feature/kat-rule-0005`
**Assigned Agent:** agent0

## Description
Implement a new rule 'Kat' for numbers divisible by 9. This rule must be additive and stack with existing rules (Fizz/3, Buzz/5, Pop/7, Crackle/8).

## Acceptance Criteria
- [ ] Update `src/Fizzbuzz.php` to include the 'Kat' rule.
- [ ] Ensure 'Kat' rule is applied after 'Crackle'.
- [ ] Update `tests/Unit/FizzbuzzTest.php` with new test cases in the data provider.
- [ ] Maintain PHP 8.3 strict typing.
- [ ] Ensure 100% PHPStan Level 9 compliance.
- [ ] Verify all unit tests pass.

## Technical Specification

### Logic Implementation
In `src/Fizzbuzz::play()`, add the following after the Crackle rule:
```php
if ($number % 9 === 0) {
    $output .= 'Kat';
}
```

### Test Data Provider Updates
Add the following cases to `fizzBuzzDataProvider()` in `tests/Unit/FizzbuzzTest.php`:
- `[9, 'FizzKat']` (Divisible by 3 and 9)
- `[18, 'FizzKat']` (Divisible by 3 and 9)
- `[45, 'FizzBuzzKat']` (Divisible by 3, 5, and 9)
- `[72, 'FizzCrackleKat']` (Divisible by 3, 8, and 9)
- `[360, 'FizzBuzzCrackleKat']` (Divisible by 3, 5, 8, and 9)
- `[0, 'FizzBuzzPopCrackleKat']` (0 is divisible by all)

## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch `feature/kat-rule-0005` before starting work. All commits must be pushed to this branch.
