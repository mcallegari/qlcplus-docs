# twigpcre

Exposes [PCRE](http://www.php.net/pcre) to Twig. Based on [Jasny's Twig Extensions](https://github.com/jasny/twig-extensions)

>> NOTE: This plugin requires an installed php pcre module

# Installation

## GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install twigpcre

This will install twigpcre within Grav. Its files can be found under `/your/site/grav/user/plugins/twigpcre`.

## Manual Installation

To install th plugin manually, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `twigpcre`. You can find these files on [GitHub](https://github.com/kesslernetworks/grav-plugin-twigpcre).

You should now have all the files under

    /your/site/grav/user/plugins/twigpcre

# Updating

As development for the twigpcre plugin continues, new versions may become available that add additional features and functionality, improve compatibility with newer Grav releases, and generally provide a better user experience. Updating twigpcre is easy, and can be done through Grav's GPM system, as well as manually.

## GPM Update (Preferred)

The simplest way to update this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm). You can do this with this by navigating to the root directory of your Grav install using your system's Terminal (also called command line) and typing the following:

    bin/gpm update twigpcre

This command will check your Grav install to see if your twigpcre plugin is due for an update. If a newer release is found, you will be asked whether or not you wish to update. To continue, type `y` and hit enter. The plugin will automatically update and clear Grav's cache.

## Manual Update

Manually updating twigpcre is pretty simple. Here is what you will need to do to get this done:

* Delete the `your/site/user/plugins/twigpcre` directory.
* Download the new version of the twigpcre plugin from [GitHub](https://github.com/kesslernetworks/grav-plugin-twigpcre) 
* Unzip the zip file in `your/site/user/plugins` and rename the resulting folder to `twigpcre`.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in terminal and typing `bin/grav clear-cache`.

> Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in `user/config/plugins`) will remain intact.

## Usage

* preg_quote   - Quote regular expression characters
* preg_match   - Perform a regular expression match
* preg_get     - Perform a regular expression match and returns the matched group
* preg_get_all - Perform a regular expression match and return the group for all matches
* preg_grep    - Perform a regular expression match and return an array of entries that match the pattern
* preg_replace - Perform a regular expression search and replace
* preg_filter  - Perform a regular expression search and replace, returning only matched subjects.
* preg_split   - Split text into an array using a regular expression

```
{% if client.email|preg_match('/^.+@.+\.\w+$/) %}Email: {{ client.email }}{% endif %}
Website: {{ client.website|preg_replace('~^https?://~')
First name: {{ client.fullname|preg_get('/^\S+/') }}
<ul>
  {% for item in items|preg_split('/\s+/')|grep_filter('/-test$/', 'invert') %}
    <li>{{ item }}</li>
  {% endfor %}
</ul>
```
