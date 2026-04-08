---
name: "ticket"
description: "Use this skill whenever a user or agent needs to create or manage a project ticket (feature, bugfix, or task)"
version: "1.1.0"
author: "Agent Zero"
tags: ["ticket", "workflow", "management", "agile"]
---

# Ticket Management Standard

## When to Use
Activate this skill whenever a user or agent needs to create, edit, view, reassign, or change the status of a project ticket (feature, bugfix, or task).

## The Process

When managing tickets, you MUST follow these standardized rules:

### 1. Git Branch Naming Convention
Every ticket MUST be associated with a git branch using the following naming convention:
- `feature/name-####`
- `bugfix/name-####`
- `task/name-####`
*(where `name` is a short description and `####` is a unique identifier or issue number)*

#### 1.5 Creating the git branch
All branches should stem from dev-master, so we first check out that branch, and then create the new one, replacing BRANCH_NAME_HERE with the actual name.
```bash
git checkout dev-master
git checkout -b BRANCH_NAME_HERE
```

### 2. Database Ticket Management (Bone Console CLI)
You MUST execute the following Docker commands to manage tickets in the system database. All commands must be prefixed with:
`docker -H unix:///var/run/docker.sock exec lamp-php-1 vendor/bin/bone`

#### Create a Ticket (`ticket:create`)
```bash
docker -H unix:///var/run/docker.sock exec lamp-php-1 vendor/bin/bone ticket:create "[Title]" "[type]" -a "[Agent Name]" -b "[type]/[name]-[####]" -d "[Description]" -c "[Acceptance Criteria]"
```
- `[Title]` (Argument): The ticket title.
- `[type]` (Argument): The ticket type (e.g., feature, bug).
- `-a` / `--agent`: The assigned agent (defaults to 'Unassigned').
- `-b` / `--branch`: The feature branch name (defaults to 'main').
- `-d` / `--description`: The ticket description.
- `-c` / `--acceptance-criteria`: The acceptance criteria.

#### Edit a Ticket (`ticket:edit`)
```bash
docker -H unix:///var/run/docker.sock exec lamp-php-1 vendor/bin/bone ticket:edit [id] -t "[New Title]" --type "[new type]" -a "[New Agent]" -b "[New Branch]" -d "[New Description]" -c "[New Acceptance Criteria]"
```
- `[id]` (Argument): The numeric ID of the ticket to edit.
- All other fields are optional options (`-t` / `--title`, `--type`, `-a` / `--agent`, `-b` / `--branch`, `-d` / `--description`, `-c` / `--acceptance-criteria`).

#### Get Ticket Details (`ticket:get`)
```bash
docker -H unix:///var/run/docker.sock exec lamp-php-1 vendor/bin/bone ticket:get [id]
```
- `[id]` (Argument): The numeric ID of the ticket.

#### Change Ticket Status (`ticket:status`)
```bash
docker -H unix:///var/run/docker.sock exec lamp-php-1 vendor/bin/bone ticket:status [id] "[status]"
```
- `[id]` (Argument): The numeric ID of the ticket.
- `[status]` (Argument): The new status.

#### Reassign a Ticket (`ticket:reassign`)
```bash
docker -H unix:///var/run/docker.sock exec lamp-php-1 vendor/bin/bone ticket:reassign [id] "[agent]"
```
- `[id]` (Argument): The numeric ID of the ticket.
- `[agent]` (Argument): The name of the new assigned agent.

### 3. Developer Instructions
When handing over the ticket to a developer (or if you are the developer), enforce the following strict rules:
- **Load Skill:** Instruct the developer subordinate to load the 'php-pro' skill before PHP work and the 'javascript-pro' skill before JavaScript work.
- **Checkout First:** Developers MUST strictly check out the associated git branch before beginning work on the ticket.
- **Commit Directly:** All resulting changes MUST be committed directly to that branch upon completion.

### 4. Ticket Markdown Template
Use the following template for the `.md` ticket file. Ensure it is associated with the matching git branch:

```markdown
# Ticket: [Title]

**Type:** [Feature | Bugfix | Task]

**Branch:** `[type]/[name]-[####]`

**Assigned Agent:** [Agent Name]


## Description
[Detailed description of the work to be done]

## Acceptance Criteria
- [ ] Criterion 1
- [ ] Criterion 2


## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch `[type]/[name]-[####]` before starting work. All commits must be pushed to this branch.
```
