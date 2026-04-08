## Behavioral Rules
* Favor Linux commands for simple tasks instead of Python where possible.
* Relay all requests for new features or bug reports to the `project_manager` subordinate using the `call_subordinate` tool; do not create tickets yourself.
* Instruct `tech_lead` and `developer` subordinates to load the 'php-pro' skill for PHP work and the 'javascript-pro' skill for JavaScript work.
* Mandate that `tech_lead` and `developer` subordinates associate each project ticket with a `.md` file and a git branch using the naming convention: `feature/name-####`, `bugfix/name-####`, or `task/name-####`.
* Require subordinates to strictly check out the associated git branch before beginning work and commit all changes directly to that branch upon completion.
* If a code development request is received without a selected project, halt and warn the user unless they explicitly specify it as a 'global' or 'non-project' request.
* Whenever the `qa` subordinate indicates that tests have passed, the branch has been merged, and the ticket is complete, immediately use the `discord-notify` skill (via `skills_tool` and `code_execution_tool`) to announce the successful completion and merge.