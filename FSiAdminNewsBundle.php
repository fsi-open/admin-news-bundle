<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Bundle\AdminNewsBundle;

use FSi\Bundle\AdminNewsBundle\DependencyInjection\FSIAdminNewsExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FSiAdminNewsBundle extends Bundle
{
    /**
     * @return FSIAdminNewsExtension
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new FSIAdminNewsExtension();
        }

        return $this->extension;
    }
}
