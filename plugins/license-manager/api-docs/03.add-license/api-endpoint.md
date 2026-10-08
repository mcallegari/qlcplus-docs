---
title: 'Add License'
template: api-endpoint
taxonomy:
  category: docs
api:
  method: POST
  path: /licenses
  description: 'Add or update a premium license. The license format is validated before saving. If a license already exists for the slug, it is overwritten.'
  parameters:
    -
      name: slug
      type: string
      required: true
      description: 'Product slug (e.g., admin-pro, site-shield). Automatically lowercased.'
    -
      name: license
      type: string
      required: true
      description: 'License key in format XXXXXXXX-XXXXXXXX-XXXXXXXX-XXXXXXXX (uppercase hex).'
  request_example: "{\n    \"slug\": \"admin-pro\",\n    \"license\": \"F0A1B2C3-D4E5F6A7-B8C9D0E1-F2A3B4C5\"\n}"
  response_example: "{\n    \"data\": {\n        \"slug\": \"admin-pro\",\n        \"license\": \"F0A1B2C3-****-****-F2A3B4C5\",\n        \"message\": \"License for 'admin-pro' saved successfully.\"\n    }\n}"
  response_codes:
    -
      code: '201'
      description: 'License saved successfully'
    -
      code: '422'
      description: 'Invalid license format or missing fields'
    -
      code: '401'
      description: 'Unauthorized'
    -
      code: '403'
      description: 'Forbidden - missing api.system.write permission'
---

## Usage Notes

### License Format

Licenses must match: `XXXXXXXX-XXXXXXXX-XXXXXXXX-XXXXXXXX`

- Four groups of exactly 8 characters
- Uppercase hexadecimal (0-9, A-F)
- Separated by hyphens

### Example with cURL

```bash
curl -X POST "https://yoursite.com/api/v1/licenses" \
  -H "X-API-Key: grav_your_key" \
  -H "X-Grav-Environment: localhost" \
  -H "Content-Type: application/json" \
  -d '{
    "slug": "admin-pro",
    "license": "F0A1B2C3-D4E5F6A7-B8C9D0E1-F2A3B4C5"
  }'
```
