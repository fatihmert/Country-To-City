# Country-To-City
Country To Cities and City To Country There is JSON File With a lot language reading class (Just for PHP at the moment)

Supported Languages
* PHP
* Python 2x

country2city.json File Structure
```
{
  <string> : <list>, ...,
}

{
  "Turkey" : ["Istanbul","Izmir",..], ...
}
```

## PHP Functions
```
$c2c = new Country2City();
``` 

### Cities from Country (return Array)
```
$c2c->getCities("country name");
``` 

### Find Country from City (return String)
```
$c2c->findCountryFromCity("city name");
``` 

### List all of Countries (return Array)
```
$c2c->getCountries();
``` 

