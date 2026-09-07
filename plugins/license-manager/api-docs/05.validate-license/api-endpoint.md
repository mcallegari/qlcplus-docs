---
title: 'Validate License'
template: api-endpoint
taxonomy:
  category: docs
api:
  method: POST
  path: /licenses/validate
  description: 'Check if a license key matches the valid format. Does not verify the license against any server — only validates the format.'
  parameters:
    -
      name: license
      type: string
      required: true
      description: 'License key to validate.'
  request_example: "{\n    \"license\": \"F0A1B2C3-D4E5F6A7-B8C9D0E1-F2A3B4C5\"\n}"
  response_example: "{\n    \"data\": {\n        \"license\": \"F0A1B2C3-****-****-F2A3B4C5\",\n        \"valid\": true\n    }\n}"
  response_codes:
    -
      code: '200'
      description: 'Validation result returned'
    -
      code: '422'
      description: 'Missing license field'
    -
      code: '401'
      description: 'Unauthorized'
---

## Example with cURL

```bash
curl -X POST "https://yoursite.com/api/v1/licenses/validate" \
  -H "X-API-Key: grav_your_key" \
  -H "X-Grav-Environment: localhost" \
  -H "Content-Type: application/json" \
  -d '{"license": "F0A1B2C3-D4E5F6A7-B8C9D0E1-F2A3B4C5"}'
```
