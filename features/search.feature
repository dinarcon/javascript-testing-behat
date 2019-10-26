Feature: Search
  In order to find articles to read
  As a site user
  I need to be able to use the search bar

  Scenario: Search for a term
    Given I am on the homepage
    When I fill in "search" with "pantheon"
    And I press "searchButton"
    Then I should see "Pantheon (software), a web development platform"
    And I should see "Pantheon (desktop environment), a GTK+-based desktop environment"

  @javascript
  Scenario: Search for a term using autocomplete
    Given I am on the homepage
    When I select the first autocomplete option for "behat computer" on the "search" field
    And I press the search button
    Then first header of the page should be "Behat (computer science)"
    And I should see "Behat is a test framework for behavior-driven development written in the PHP programming language."
