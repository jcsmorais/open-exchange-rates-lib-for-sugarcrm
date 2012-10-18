README
======

What is Open Exchange Rates library for SugarCRM?
-------------------------------------------------
Open Exchange Rates library for SugarCRM is a package built to ease the pain of integrating the Open Exchange Rates library, a PHP abstraction for the services provided by Open Exchange Rates (http://openexchangerates.org): a real-time exchange rates API for developers, in SugarCRM projects.


Requirements
------------
* PHP 5.3+
* cURL support
* An Open Exchange Rates APP ID (https://openexchangerates.org/signup).


Installation
------------
Besides using Module Loader to install the package, in order to start using the library you need to execute the following steps:

* Register an Open Exchange Rates account and acquire an APP ID.
* Add the library settings below to your project config_override.php file.

    $sugar_config['open-exchange-rates-lib']['appId'] = 'APP_ID';
    $sugar_config['open-exchange-rates-lib']['secureConnection'] = false;

Keep in mind that the 'secure-connection' setting depends on the type of account you have, if you have a paid account, you can change the value to 'true' and all service calls will be made through a secure connection.


Documentation
-------------
At the moment there's not much documentation besides the one who's delivered with the code. Either way, you can check a few usage examples (https://github.com/jcsmorais/open-exchange-rates-lib/wiki/Usage).


Contributing
------------
Open Exchange Rates library is an open source project. If you'd like to contribute, please do so by forking the project and making pull requests and/or by creating issues on github.
