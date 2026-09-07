---
title: 'Remove License'
template: api-endpoint
taxonomy:
  category: docs
api:
  method: DELETE
  path: '/licenses/{slug}'
  description: 'Remove a premium license by product slug.'
  parameters:
    -
      name: slug
      type: string
      required: true
      description: 'Product slug to remove the license for.'
  request_example: ''
  response_example: ''
  response_codes:
    -
      code: '204'
      description: 'License removed (no response body)'
    -
      code: '404'
      description: 'No license found for this slug'
    -
      code: '401'
      description: 'Unauthorized'
    -
      code: '403'
      description: 'Forbidden - missing api.system.write permission'
---

## Example with cURL

```bash
curl -X DELETE "https://yoursite.com/api/v1/licenses/admin-pro" \
  -H "X-API-Key: grav_your_key" \
  -H "X-Grav-Environment: localhost"
```
