# PHP UUID

## Installation

`composer require fordbedia/php-uuid`

## Usage

```php
use Security\UUID;
// Create UUID on the fly
$uuid = UUID::generate();

echo $uuid;
// Result E.g.: 43034342-4620-417e-aec2-d7e3eb90daa3
```

```php
use Security\UUID;

// Creaate a license key
$guid = new UUID;

echo $guid->createGUID();
// Result E.g.: 912AFB38-5069-ABFB-5A48-1EF5051BB7D0


// Create a UUID key
echo (new UUID)->uuid();
// Result E.g.: 61255da2-f8b0-4709-9b45-810758a32009
```