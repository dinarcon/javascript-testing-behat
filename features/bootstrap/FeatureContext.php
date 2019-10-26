<?php

use Behat\Behat\Context\Context;
use Behat\Mink\Exception\ElementNotFoundException;
use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawMinkContext implements Context
{
    /**
     * @When I select the first autocomplete option for :prefix on the :field field
     *
     * Based on code by Lyle Mantooth.
     * @see https://gist.github.com/IslandUsurper/12723643dddc9315ff71
     */
    public function iSelectFirstAutocomplete($prefix, $field) {
        $driver = $this->getSession()->getDriver();
        $page = $this->getSession()->getPage();

        $element = $page->findField($field);
        if (!$element) {
            throw new ElementNotFoundException($driver, NULL, 'named', $field);
        }
        $page->fillField($field, $prefix);

        $this->getSession()->wait(1000, 'jQuery(".suggestions").is(":visible") === true');

        $xpath = $element->getXpath();
        // Down key.
        $driver->keyDown($xpath, 40);
        $driver->keyUp($xpath, 40);
    }

    /**
     * @When I press the search button
     */
    public function iPressTheSearchButton()
    {
        $this->getSession()->getPage()->pressButton('searchButton');
    }

    /**
     * @Then first header of the page should be :text
     */
    public function firstHeaderOfThePageShouldBe($text)
    {
        $this->assertSession()->elementTextContains('css', 'h1', $text);
    }
}
