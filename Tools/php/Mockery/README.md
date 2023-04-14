# Mockery
> [Unit-vs-Integration-Tests](https://github.com/Janis-Rullis-IT/dev/blob/master/Infrastructure/Software/Unit-vs-Integration-Tests.md).

Mock allows to test how the function works without external dependencies.

## Do I need to use a mock in this test?

Q: Does the testable code works with?
* FS
* DB
* Queue
* API
* a mesh of call inside the project
* or other funky depn.

A: Then, YES, You need a mock.

## When to use mocks?

### ChatGPT kindly offered reasons

1. **Isolate dependencies**: When testing a unit of code, it's important to isolate it from its dependencies to ensure that any failures are due to the unit itself and not its dependencies. Mocking allows you to replace the dependencies with controlled inputs and outputs, allowing you to focus on testing the behavior of the unit you're testing.
2. **Reduce testing time**: Testing with real dependencies can be time-consuming, especially if they involve network calls or database access. Mocking these dependencies can greatly reduce testing time and make the testing process more efficient.
3. **Test edge cases**: Mocking can be used to simulate edge cases that are difficult to reproduce with real dependencies. For example, you can mock a network timeout to see how the code handles the situation, without having to wait for a real timeout to occur.
4. **Test error handling**: Mocking can be used to simulate errors that may occur in dependencies, such as a database connection error or an API call that returns an error response. This allows you to test how the code handles these errors and ensure that it fails gracefully and provides appropriate error messages.
5. **Improve test coverage**: Mocking can be used to test code paths that are difficult to trigger with real dependencies. For example, you can mock a specific database record to ensure that the code handles it correctly, even if it's a rare edge case.

It's important to note that while mocking can be useful in testing, it's important to use it judiciously and not overuse it. Mocking should be used to test code that interacts with dependencies, but not to test trivial code or code that doesn't have any dependencies. It's also important to ensure that the mock object behaves as similarly as possible to the real dependency, to avoid false positives or false negatives in your tests.

-----------

## Purpose

* Create a fake doppelganger of the real object - with all the required attributes and methods.
* This fake object is used so our UNIT test would be isolated and ONLY check the spots it needs and not roam around the spider web of dependencies.

### Problem

**Example**

You need to an object called OnlineUsers - which connects to external Queue or DB or API to fill the data. Crazy.

### Solution

 Instead You just fill it with fake data, set method expectations - that `OnlineUsers->getAll()` will return csv string and not an array.
