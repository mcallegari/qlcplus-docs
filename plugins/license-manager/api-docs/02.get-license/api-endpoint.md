---
title: 'Get License'
template: api-endpoint
taxonomy:
  category: docs
api:
  method: GET
  path: '/licenses/{slug}'
  description: 'Get a specific license by product slug. License key is masked for security.'
  parameters:
    -
      name: slug
      type: string
      required: true
      description: 'Product slug (e.g., admin-pro, site-shield)'
  request_example: ''
  response_example: "{\n    \"data\": {\n        \"slug\": \"admin-pro\",\n        \"license\": \"F0A1B2C3-****-****-F2A3B4C5\",\n        \"valid\": true\n    }\n}"
  response_codes:
    -
      code: '200'
      description: 'License found'
    -
      code: '404'
      description: 'No license found for this slug'
    -
      code: '401'
      description: 'Unauthorized'
---

## Example with cURL

```bash
curl "https://yoursite.com/api/v1/licenses/admin-pro" \
  -H "X-API-Key: grav_your_key" \
  -H "X-Grav-Environment: localhost"
```
