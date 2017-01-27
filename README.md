# HtHidden

Generates hidden html input tags.

## Installation

Use composer:

```
composer require flsouto/hthidden
```

**Notice:** this library relies on the HtField class. The inherited functionality will not be covered here. Read [this documentation](https://github.com/flsouto/htfield) if you want to learn more about it.

## Usage

The example below creates a hidden input named "submit" with a value of "1":

```php
<?php
require_once('vendor/autoload.php');
use FlSouto\HtHidden;

$hidden = new HtHidden("submit", "1");

echo $hidden;
```

Output:
```
<input id="588a9398b198f" name="submit" type="hidden" value="1" />
```

Wow!! This is some rocket science!! 
