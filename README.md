# gematria
Simple [Gematria](https://en.wikipedia.org/wiki/Gematria) library for PHP - convert Hebrew letters to numbers

## Usage
```php
require_once __DIR__ . '/gematria.php';

$text = 'גִּימַטְרִיָּה (בספרות הרבנית: גִּימַטְרִיָּא, ובהתאם לזאת לעיתים בלשון רבים: גִּימַטְרִיאוֹת) היא שיטת מספור על פי אותיות.';
$gematria = new Gematria($text);
echo $gematria->get(); // print 12380

// more option
echo $gematria;
```

##License
GPL
