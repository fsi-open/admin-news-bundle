<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Bundle\AdminNewsBundle\Behat\Context;

use SensioLabs\Behat\PageObjectExtension\Context\PageObjectContext;

class AdminContext extends PageObjectContext
{
    /**
     * @When /^I open "([^"]*)" page$/
     */
    public function iOpenPage($pageName)
    {
        $this->getPage($pageName)->open();
    }

    /**
     * @Then /^I should see "([^"]*)" element in menu$/
     */
    public function iShouldSeeElementInMenu($elementName)
    {
        $this->getPage('Admin Panel')->hasMenuElement($elementName);
    }
}