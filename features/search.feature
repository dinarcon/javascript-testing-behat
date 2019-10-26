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
