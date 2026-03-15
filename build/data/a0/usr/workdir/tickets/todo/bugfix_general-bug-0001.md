# Ticket: Fix Default Status and Assignee on Ticket Creation

**Type:** Bugfix

**Branch:** `bugfix/general-bug-0001`

**Assigned Agent:** developer

## Description
As a Project Manager,
I want the 'create ticket' command to automatically set the default status to 'toscope' and assign it to 'tech_lead',
So that new tickets are immediately ready for scoping without manual intervention.

Given the 'create ticket' command is executed without specifying a status or assignee
When the new ticket is successfully saved to the database
Then the ticket status MUST default to 'toscope'
And the assigned agent MUST default to 'tech_lead'.

## Acceptance Criteria
- [ ] The default status for newly created tickets is 'toscope' instead of 'todo'.
- [ ] The default assignee for newly created tickets is 'tech_lead' instead of 'Unassigned'.
- [ ] Explicit overrides via arguments continue to function properly.

## Developer Instructions
⚠️ **MANDATORY:** You must strictly check out the associated git branch `bugfix/general-bug-0001` before beginning work and commit all changes directly to that branch upon completion.

**Technical Information / Implementation Details:**
- Target file: `src/Command/TicketCreateCommand.php`
- Update the `$agent` variable assignment in the `execute()` method to default to `'tech_lead'`. Replace `$agent = $agentOpt ?? 'Unassigned';` with `$agent = $agentOpt ?? 'tech_lead';`.
- Update the hardcoded status setter in the `execute()` method. Change `$ticket->setStatus('todo');` to `$ticket->setStatus('toscope');`.
