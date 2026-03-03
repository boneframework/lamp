# Ticket: UI Modernization with Tailwind CSS

## Overview
Upgrade the existing `index.php` landing page to a modern, professional, and responsive design using Tailwind CSS. The goal is to improve the visual appeal while maintaining existing PHP functionality.

## Target File
- `/a0/usr/workdir/index.php`

## Requirements

### 1. Framework Integration
- Include Tailwind CSS via CDN in the `<head>` section:
  `<script src="https://cdn.tailwindcss.com"></script>`

### 2. Layout & Design
- **General:** Use a clean, light-themed design with a soft background (e.g., `bg-gray-50`).
- **Header/Navigation:** Create a sticky responsive header with a logo placeholder and navigation links (Home, Features, Status, Contact).
- **Hero Section:** A prominent greeting section with large, bold typography (`text-4xl` or `text-5xl`).
- **System Status Section:**
  - Present 'PHP Version', 'Server Time', and 'Memory Usage' in a grid of cards.
  - Use icons or subtle borders/shadows for each card.
- **Footer:** A simple footer with copyright information and placeholder social links.

### 3. Functional Retention
- Do NOT remove any existing PHP logic.
- Ensure the following variables/outputs remain functional:
  - The main greeting text.
  - `phpversion()` output.
  - `date('Y-m-d H:i:s')` output.
  - `round(memory_get_usage() / 1024 / 1024, 2)` output.

### 4. Technical Details
- Use semantic HTML5 tags (`<header>`, `<main>`, `<section>`, `<footer>`).
- Ensure responsiveness using Tailwind's mobile-first breakpoints (`sm:`, `md:`, `lg:`).
- Implement proper spacing (padding/margins) using Tailwind's spacing scale.
- Typography: Use a modern sans-serif stack (Tailwind's default is fine).

## Acceptance Criteria
- [ ] `index.php` uses Tailwind CSS for all styling.
- [ ] The page is fully responsive and looks good on mobile and desktop.
- [ ] All 4 PHP data points (Greeting, PHP Version, Server Time, Memory) are clearly visible and styled.
- [ ] The code remains a single `index.php` file for now.

## Current Code Reference
```php
§§include(/a0/usr/workdir/index.php)
```
