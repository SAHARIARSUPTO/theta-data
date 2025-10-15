---
title: "Theta Terminal V3 Now Supports MCP Server"
description: "We're excited to announce that the Theta Terminal V3 now supports an MCP (Model Context Protocol) server."
pubDate: "Aug 06 2024"
updatedDate: "Aug 21 2024"
author: "Brian Drzyzga"
---

We're excited to announce that the Theta Terminal V3 now supports an MCP (Model Context Protocol) server.

## What is MCP?

Model Context Protocol (MCP) is a lightweight event stream format designed for context injection into large language models.

## Getting Started

You can integrate our MCP server with most LLM’s that have CLI tools, for example Gemini cli, and Claude cli. (The suggested setup requires that you have npm already installed) Please see the full documentation here: https://docs.thetadata.us/Mcp/Getting-Started.html

### Gemini setup:

```bash
npm install -g @google/gemini-cli
```

Edit your `~/.gemini/settings.json` with the below

```json
{
    "mcpServers": {
        "Theta Data": {
            "url": "http://localhost:25503/mcp/sse",
            "timeout": 30000
        }
    }
}
```

### Claude setup:

```bash
npm install -g @anthropic-ai/claude-code
```

Run command `claude mcp add --transport sse ThetaData http://localhost:25503/mcp/sse`

## Example

You can now use natural language to make requests to Theta Terminal v3. For example, to make a request similar to `http://localhost:25503/v3/option/history/greeks/eod?symbol=AAPL&right=C&strike=200.0&expiration=2025-08-01&start_date=2025-07-28&end_date=2025-08-01` you can enter the following prompt into your LLM CLI: “Get the eod greek for last week for AAPL strike 200.00 CALL and expiration 2025-08-01.” (As all LLMs are different and constantly changing, this example might not work perfectly for you.) You can also add additional instructions to your prompts to get more insight on your request, such as, “Put this in a table showing the delta change.”

Short video of using gemini cli before adding Theta Data MCP

Short video of using gemini cli before adding Theta Data MCP

## We’d Love Your Feedback

This feature is in beta, and we’re actively listening. Let us know how you’re using MCP in v3, and what would make the experience even better by contacting support@thetadata.net or reach out to us on our discord.

More enhancements are on the way—stay tuned.

– The ThetaData Team
