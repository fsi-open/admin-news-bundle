<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Bundle\AdminNewsBundle\Behat\Context;

use Behat\Behat\Context\BehatContext;

class FeatureContext extends BehatContext
{
    public function __construct()
    {
        $this->useContext('admin', new AdminContext());
    }
}