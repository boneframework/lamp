# Ticket: Add Optional Project Field to Tickets

**Type:** Feature

**Branch:** `feature/optional-project-0011`

**Assigned Agent:** tech_lead

## Description
As a user,
I want to associate an optional project text field with a ticket
So that I can easily identify which project a ticket belongs to.

## Acceptance Criteria
- [ ] Given a user is creating or editing a ticket
  When they enter a project name in the simple text input
  And save the ticket
  Then the ticket should store the project name in the database
- [ ] Given a ticket has an associated project
  When the user views the ticket list card
  Then the project name should be clearly displayed on the card
- [ ] Given a user is creating or editing a ticket
  When they do not provide a project name
  And save the ticket
  Then the ticket should be saved successfully with a null project value

## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch `feature/optional-project-0011` before starting work. All commits must be pushed to this branch.
