# Elixir testing with ExUnit

* [ExUnit.Assertions (hexdocs.pm)](https://hexdocs.pm/ex_unit/ExUnit.Assertions.html)

## Run

```ex
mix test
```

### Specific test

In line 16.

```ex
mix test test/my-test.exs:16
```

## Assert examples

```ex
test 'bob' do
    assert 0 == 5.5, "Well, this is weird."
end
```

## Check if row is not empty

* [Boolean operators - and, or, &&, || (elixir-examples.github.io)](https://elixir-examples.github.io/examples/boolean-operators)
* [How to check if variable exists, is not empty or is not nil in elixir (stackoverflow.solutions)](https://stackoverflow.solutions/question/show_question_details/380)

```ex
user = My.Repo.get(My.User, 123)
assert !!user and  user.id > 0, "Can not find org's admin identity"
```