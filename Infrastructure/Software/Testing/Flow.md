# Testing flow

> A featue - add a new field `old_email` to `users.`

* Record that the current solution returns a GREEN test wihtout the new changes.
* In the top level add an expectioan as a test. In a test that expects the endpoint to return this field.
* Record that the implementation does not meet the expectation and does not return this field. RED TEST.
* From that top level test - start writing implementation interfaces that meets the expectations. In the endpoint, add a User mock (based on an interface - list of pub methods) that returns the new field. GREEN.
* Go down to lower tests until Unit tests, that covers the exact spot.

In each step use mocks to make sure that You are testing only this level of implementation and nothing below (depndecies).

Something like this:
1. `UserController` mocks `UserService->getInfo()`.
2. `UserService` mocks `UserModel`.
3. `UserModel` mocks `DB`.

With this mocking approach, the higher level tests won't be affected if lovwer dependecies changes. 
* Change, the `DB`, will affect 3 but not 2. and 3.
* Change the `UserModel`, will affect 2. but not 1.
