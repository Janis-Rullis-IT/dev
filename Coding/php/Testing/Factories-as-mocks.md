# Factories-as-mocks

Model factory can be used as a mock in Integration tests.
That's because they contain not just data, but also object methods.
Example:
* `User` model has a method `getSecret(){return 'pst';}`. 
* Then, a `factory(User::class)->getFullName() === 'pst';`

In Unit tests You use mocks instead, as they required a defined input and output, where factory's might vary instead. Also, the factory is another dependency and breaks the isolation.
* `make()` just initaites the data object.
* `create()` stores the data in the database.
