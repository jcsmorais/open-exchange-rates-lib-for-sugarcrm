<?php

/*
 * This file is part of the Open Exchange Rates library for SugarCRM, a package
 * built to ease the pain of integrating the Open Exchange Rates library, a PHP
 * abstraction for the services provided by Open Exchange Rates
 * (http://openexchangerates.org): a real-time exchange rates API for
 * developers, in SugarCRM projects.
 *
 * Copyright (c) 2012 João Morais
 * http://github.com/jcsmorais/open-exchange-rates-lib-for-sugarcrm
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * @license MIT
 *   See LICENSE.txt shipped with this package.
 */

global $manifest;
global $installdefs;

$manifest = array(
    'acceptable_sugar_flavors' => array(
        'CE',
        'PRO',
        'CORP',
        'ENT',
        'ULT'
    ),
    'acceptable_sugar_versions' => array(
        'regex_matches' => array(
            '6\.[3-9]\.[0-9]'
        )
    ),
    'author' => 'João Morais',
    'description' => 'SugarCRM package for the Open Exchange Rates library a PHP abstraction for the services provided by Open Exchange Rates: a real-time exchange rates API.',
    'is_uninstallable' => true,
    'name' => 'Open Exchange Rates library for SugarCRM',
    'published_date' => '2012-10-18',
    'type' => 'module',
    'version' => '0.0.1'
);

$installdefs = array(
    'id' => 'oer',
    'copy' => array(
        array(
            'from' => '<basepath>/copy/custom/include/OpenExchangeRates',
            'to' => 'custom/include/OpenExchangeRates'
        ),
    ),
    'utils' => array(
        array(
            'from' => '<basepath>/extensions/application/Utils/OpenExchangeRates.php'
        )
    )
);
