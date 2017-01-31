# li3_debugbar

A port of [Symfony2](http://symfony.com)'s debug menu to [Lithium](http://lithify.me) version 1.1.

Upgrade of [ServiceRunner/li3_debug](https://github.com/ServiceRunner/li3_debug) to adapt new Filters system.

## Installation

Load `li3_debugbar` by updating `config/bootstrap/libraries.php`:

```php
use lithium\core\Environment;

if (!Environment::is('production')) {
    Libraries::add('li3_debugbar');
}
```
