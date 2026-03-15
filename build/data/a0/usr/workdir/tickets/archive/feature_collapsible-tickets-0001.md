# Ticket: Collapsible Ticket Cards in Listing View

**Type:** Feature
**Branch:** `feature/collapsible-tickets-0001`

## Description
Reduce information density on the `/tickets` page by making ticket cards collapsible. By default, only the ticket title should be visible. Users can expand the card to see the full description and details.

## Technical Research & Requirements
- **Service Layer**: Modify `App\Service\TicketService` to separate the ticket title from the body. The title is typically the first line (e.g., `# Ticket: ...`) in the markdown file.
- **Frontend**: Update `src/View/tickets/index.php` to use [DaisyUI Collapse](https://daisyui.com/components/collapse/) component.
- **Styling**: Maintain the current Kanban column layout and use Tailwind/DaisyUI for transitions.

## Tasks
1. Update `TicketService.php` to provide structured ticket data (title and body) instead of a single HTML blob.
2. Update `TicketController.php` to handle the new data structure from the service.
3. Modify `src/View/tickets/index.php` to implement the `collapse` component for each ticket card.
4. Ensure the toggle mechanism is intuitive (e.g., use `collapse-arrow` and `cursor-pointer`).

## Acceptance Criteria
- [x] Ticket cards are collapsed by default, showing only the title.
- [x] Clicking the card/toggle expands it to show the full markdown-rendered content.
- [x] The implementation uses DaisyUI collapse classes.
- [x] PHPStan level 9 passes without errors.
- [x] Unit tests for `TicketService` are updated and passing.

## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch `feature/collapsible-tickets-0001` before starting work. All commits must be pushed to this branch.
