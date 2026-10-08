---
title: Licenses
template: chapter
description: Manage Grav Premium licenses via the API
taxonomy:
    category:
        - docs
---

The Licenses API allows you to manage Grav Premium product licenses programmatically. These endpoints are registered by the License Manager plugin via the Grav API plugin's extensibility system.

## Requirements

- [Grav API Plugin](https://github.com/getgrav/grav-plugin-api) must be installed and enabled
- License Manager plugin must be installed and enabled

## Authentication

- List/get/validate endpoints require `api.system.read` permission
- Add/remove endpoints require `api.system.write` permission

## Available Operations

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/licenses` | List all licenses |
| GET | `/licenses/{slug}` | Get a specific license |
| POST | `/licenses` | Add or update a license |
| DELETE | `/licenses/{slug}` | Remove a license |
| POST | `/licenses/validate` | Validate a license format |

## License Format

Licenses follow the format: `XXXXXXXX-XXXXXXXX-XXXXXXXX-XXXXXXXX` (four groups of 8 uppercase hex characters separated by hyphens).

## Security

License keys are masked in API responses, showing only the first and last segments (e.g., `F0A1B2C3-****-****-F2A3B4C5`).
