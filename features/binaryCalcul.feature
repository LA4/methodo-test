Feature: Binary calculations
  As a user
  I want to perform binary operations (AND, OR, XOR)
  So that I get correct logical results

  Scenario: Perform a binary AND operation
    Given two binary integers 4 and 1
    When I perform a binary AND operation
    Then the result should be 0

  Scenario: Perform a binary OR operation
    Given two binary integers 4 and 1
    When I perform a binary OR operation
    Then the result should be 5

  Scenario: Perform a binary XOR operation
    Given two binary integers 4 and 1
    When I perform a binary XOR operation
    Then the result should be 5
