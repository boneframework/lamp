---
name: "discord-notify"
description: "Send notifications to a specific Discord channel via webhook. Use when the user asks to send a message to Discord."
version: "1.0.0"
author: "Agent Zero"
tags: ["discord", "notification", "webhook", "messaging"]
trigger_patterns:
  - "send discord notification"
  - "message discord"
  - "notify discord"
  - "discord webhook"
---

# Discord Notifications

## When to Use
Activate this skill whenever the user asks to send a message or notification to Discord.

## The Process
To send a Discord notification, use the provided Python script located in this skill's `scripts` directory.

### Execution
Use the `code_execution_tool` (runtime: terminal) to run the following command:

```bash
python /a0/usr/skills/discord-notify/scripts/send_message.py "<your_message>"
```
Make sure to properly enclose the message in quotes.

## Examples

**User**: "Send a discord notification that the build has failed."

**Agent Response**:
> I'll send that notification right away.
> *(Runs code_execution_tool with: `python /a0/usr/skills/discord-notify/scripts/send_message.py "The build has failed."}`)*
