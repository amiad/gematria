# gematria
Simple [Gematria](https://en.wikipedia.org/wiki/Gematria) library for PHP - convert Hebrew letters to numbers

# Installation
`$ composer require amiad/gematria`

## Usage
```php
require_once __DIR__.'/vendor/autoload.php';

$text = 'אבג';

$gematria = new \Gematria\Gematria($text);
echo $gematria->get(); // print 6

// more option
echo $gematria;
```

## License
GPL
