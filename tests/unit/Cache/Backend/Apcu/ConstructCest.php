<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Cache\Backend\Apcu;

use UnitTester;

class ConstructCest
{
    /**
     * Tests Phalcon\Cache\Backend\Apcu :: __construct()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function cacheBackendApcuConstruct(UnitTester $I)
    {
        $I->wantToTest("Cache\Backend\Apcu - __construct()");
        $I->skipTest("Need implementation");
    }
}