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