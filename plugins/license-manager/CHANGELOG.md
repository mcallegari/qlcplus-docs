# v2.0.4
## 06/23/2026

1. [](#bugfix)
    * Licensed themes that aren't installed yet are now correctly offered as a theme install instead of pointing to the plugin installer.

# v2.0.3
## 05/29/2026

1. [](#bugfix)
    * **The License Manager sidebar entry is now hidden from users who lack `api.system.read`**, matching the permission its API controller already requires. Editor-level users no longer see a menu they can't open. Requires grav-plugin-api ≥ 1.0.0-rc.11. Fixes [getgrav/grav-plugin-admin2#23](https://github.com/getgrav/grav-plugin-admin2/issues/23).

# v2.0.2
## 04/30/2026

1. [](#bugfix)
    * Fixed PHP 8.1+ deprecation notice — explicit string casts where `null` was being passed to string-typed function arguments.
    * Fix for broken product links in Admin2

# v2.0.1
## 04/20/2026

1. [](#improved) 
    * Added compatibility setting for 2.0 in `blueprints.yaml`

# v2.0.0
## 04/17/2026

1. [](#new) 
    * New Grav 2.0 Support

# v1.0.2
## 05/10/2023

1. [](#improved)
   * Fixed some deprecated issues for PHP 8.2+

# v1.0.1
## 12/16/2020

1. [](#bugfix)
    * Fixed issue with import input field not letting select XML licenses in Safari [#5](https://github.com/getgrav/grav-plugin-license-manager/issues/5)
    * Fixed repository references in blueprint [#4](https://github.com/getgrav/grav-plugin-license-manager/issues/4)
    
# v1.0.0
## 12/14/2020

1. [](#new)
    * Initial Release
