# What-I-need-to-mock?

## Replace the DEPENDENCIES
Example: Mock the `privObj` used in `TestableClass::construct($privObj)`. Don't mock `TestableClass` as You want to test how it works. Without the `privObj` mock You can not test the `TestableClass`, as it wants to locate that private dependency, which might not be reachable.
 
## Example
* https://github.com/Janis-Rullis-IT/dev/blob/master/Tools/php/Mockery/Mock-priv-class-accepted-in-construct.md
* https://docs.mockery.io/en/latest/getting_started/simple_example.html
 
## Unreachable method, service.
For example, extrenal or not yet implelemted API.
 

# Thanks, ChatGPT
 
## In Unit testing - DB, API, libs, etc. deps

Any external dependencies that your code interacts with, such as DB, APIs, or libs.
This allows you to test the code in isolation and focus on the behavior of the unit being tested.

## Integration testin

Some external dependencies, but you may also want to test the interactions between your code and those dependencies.
For example, if you are testing a web application that uses a database, you may want to test the behavior of the application when the database is not available, as well as when it is available.

## End-to-end testing

Test the entire system, including all external dependencies, WITHOUT MOCKING ANYTHING. This allows you to test the system as it would be used in the real world.
