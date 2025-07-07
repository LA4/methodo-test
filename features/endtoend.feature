Feature: End to End test
  As a user
  I want to perform operations (*, /, +, -)
  So that I get correct results

  Scenario Outline: Perform basic operations
    Given a calculator
    When I input "<number1>", then "<symbol>", then "<number2>", and then "="
    Then the result should be "<expectedResult>"

    Examples:
      | number1 | symbol | number2 | expectedResult |
      | 4       | +      | 1       | 5              |
      | 4       | -      | 1       | 3              |
      | 4       | *      | 1       | 4              |
      | 4       | /      | 1       | 4              |