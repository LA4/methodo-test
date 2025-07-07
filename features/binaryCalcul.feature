Feature: Binary calculations
  As a user
  I want to perform binary operations (AND, OR, XOR)
  So that I get correct logical results

  Scenario: Perform a binary AND operation
    Given two integers "4" and "1"
    When I perform a binary AND operation
    Then the result of AND should be 0

  Scenario: Perform a binary OR operation
    Given two integers "4" and "1"
    When I perform a binary OR operation
    Then the result of OR should be 5

  Scenario: Perform a binary XOR operation
    Given two integers "4" and "1"
    When I perform a binary XOR operation
    Then the result of XOR should be 5
