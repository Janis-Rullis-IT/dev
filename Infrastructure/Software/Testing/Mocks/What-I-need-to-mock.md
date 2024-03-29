# What-I-need-to-mock?

## 1. Replace the DEPENDENCIES

### Example
* https://github.com/Janis-Rullis-IT/dev/tree/644fcc7eb98ff40f5d2ccd3749fc02f841bd5b09/Coding/php/Testing/Mockery
* https://docs.mockery.io/en/latest/getting_started/simple_example.html

* Mock the `privObj` used in `TestableClass::construct($privObj)`. 
* Don't mock `TestableClass` as You want to test how it works.
* Without the `privObj` mock You can not test the `TestableClass`, as it wants to locate that private dependency `privObj`, which might not be reachable.
  
## 2. Unreachable method, service.
For example, extrenal or not yet implelemted API.
 
# More details (Thanks, ChatGPT)
 
## In Unit testing - DB, API, libs, etc. deps

Any external dependencies that your code interacts with, such as DB, APIs, or libs.
This allows you to test the code in isolation and focus on the behavior of the unit being tested.

## Integration testin

Some external dependencies, but you may also want to test the interactions between your code and those dependencies.
For example, if you are testing a web application that uses a database, you may want to test the behavior of the application when the database is not available, as well as when it is available.

## End-to-end testing

Test the entire system, including all external dependencies, WITHOUT MOCKING ANYTHING. This allows you to test the system as it would be used in the real world.
