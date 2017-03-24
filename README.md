# ukrposhta-api
PHP Wrapper for ukr poshta API

## Quick start

Add the package to composer:
```
composer require kolyabres/ukrposhta-api
```

Somwhere in your project:
```
<?php
$client = new \UkrposhtaApi\Client();
$info = $client->GetBarcodeInfo('RF426331371SG','en');
var_dump($info);
```

Result:
```
array(6) {
  ["barcode"]=>
  string(13) "RF426331371SG"
  ["code"]=>
  string(5) "41002"
  ["lastofficeindex"]=>
  string(5) "58021"
  ["eventdate"]=>
  string(10) "28.01.2017"
  ["lastoffice"]=>
  string(13) "CHERNIVTSI 21"
  ["eventdescription"]=>
  string(142) "
    The item number RF426331371SG is delivered to addressee personally on 28.01.2017 by postal facility CHERNIVTSI 21, the postcode 58021.
  "
}


```
