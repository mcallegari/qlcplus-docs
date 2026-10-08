---
title: 'List Licenses'
template: api-endpoint
taxonomy:
  category: docs
api:
  method: GET
  path: /licenses
  description: 'Returns all stored premium licenses. License keys are masked for security — only the first and last segments are shown.'
  parameters: []
  request_example: ''
  response_example: "{\n    \"data\": [\n        {\n            \"slug\": \"admin-pro\",\n            \"license\": \"F0A1B2C3-****-****-F2A3B4C5\",\n            \"valid\": true\n        },\n        {\n            \"slug\": \"site-shield\",\n            \"license\": \"A1B2C3D4-****-****-E5F6A7B8\",\n            \"valid\": true\n        }\n    ]\n}"
  response_codes:
    -
      code: '200'
      description: 'License list returned'
    -
      code: '401'
      description: 'Unauthorized'
    -
      code: '403'
      description: 'Forbidden - missing api.system.read permission'
---

## Example with cURL

```bash
curl "https://yoursite.com/api/v1/licenses" \
  -H "X-API-Key: grav_your_key" \
  -H "X-Grav-Environment: localhost"
```
