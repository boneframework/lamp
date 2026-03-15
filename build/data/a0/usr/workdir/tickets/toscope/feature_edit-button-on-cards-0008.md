# Ticket: Edit Button on Ticket Cards

**Type:** Feature

**Branch:** `feature/edit-button-on-cards-0008`

**Assigned Agent:** tech_lead

## User Story
As a user managing tickets, I want to see an 'Edit' button prominently displayed on the main visible area of each ticket card on the `/tickets` page, so that I can quickly access the edit functionality without having to expand the ticket's collapsible content.

## Business Logic
- **Visibility:** The 'Edit' button must be immediately visible on the outer card UI for every ticket in the list. This specifically overrides previous requirements that placed the edit button inside the collapsible content area.
- **Consistency:** The button should match the existing design language (e.g., using DaisyUI buttons) and logically sit next to other card-level actions, or in a prominent quick-action area (such as the card header or footer).
- **Action:** Clicking this button will trigger the edit flow (modal or redirect) that is currently being architected in related tickets (`feature_edit-tickets-0007` and `feature_edit-tickets-on-index`).
- **Separation of Concerns:** This ticket specifically governs the UI placement and accessibility of the edit trigger on the card itself, elevating it from a hidden detail action to a primary card action.

## Acceptance Criteria
- [ ] An 'Edit' button is rendered on every ticket card on the `/tickets` page.
- [ ] The button is clearly visible by default without requiring the user to click or expand the ticket's collapsible details.
- [ ] The button styling is consistent with the rest of the application's UI.
- [ ] Clicking the 'Edit' button correctly hooks into the edit interface developed in the primary edit implementation tickets.
- [ ] The placement is responsive and renders correctly on both desktop and mobile devices.

## Technical Specifications
### 1. View Modification (`src/View/tickets/index.php`)
- **Placement**: Locate the ticket card loops across all 5 columns (To Scope, To Do, In Progress, QA, Done) in `src/View/tickets/index.php`.
- The cards currently use DaisyUI's `collapse` component with a checkbox input.
- **Element Construction**: Add an anchor tag for the edit action inside the `collapse-title` div, so it is visible without expanding the card.
  Modify the `collapse-title` to be a flex container.
- **Constraint**: Ensure you also remove any existing Edit buttons if they were previously placed next to the 'Delete' button inside `collapse-content`.
- **Styling & Responsiveness**: Use `btn btn-xs btn-warning` to keep it compact and distinct, matching the card UI. Ensure flexbox layout (`flex items-center justify-between`) keeps the title and button nicely aligned on mobile and desktop viewports.

### 2. Backend Integration
- **No Backend Changes Needed**: Ensure the `href` strictly matches `/tickets/edit/<?= $ticket->getId() ?>`. No Controller, Service, or Repository modifications are required since this ticket only governs frontend UI placement.

## Developer Instructions (CRITICAL MANDATES)
⚠️ **MANDATORY FOR TECH_LEAD AND DEVELOPERS:**
1. **Skill Loading:** You MUST load the `php-pro` skill before any PHP work and the `javascript-pro` skill before any JavaScript work.
2. **Ticket Association:** You MUST associate each project ticket with a `.md` file and a git branch using the naming convention: `feature/name-####`, `bugfix/name-####`, or `task/name-####`. (For this ticket: `feature/edit-button-on-cards-0008`).
3. **Workflow Rules:** You MUST strictly check out the associated git branch before beginning work on a ticket and commit all resulting changes directly to that branch upon completion.
