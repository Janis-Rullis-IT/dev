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

## Skip

```ex
 @tag :skip
  test "authenticates requests" do  
  end
  
  @tag skip: "Who needs it anyway."
  test "register" do  
  end
```

## Shared / setup variables

```ex
setup do
 {:ok, user: 123}
 end
 
 test "user login", %{user: user} do
  end
 ```
 
## Speed-up

```ex
 use ExUnit.Case, async: true
 ```
 
## Group / Tag / Label / Mar tests

Mark tags, so could identify a specific group of tests in the test module. 
For example, getters, setters.  This tagging allows to execute or ignore them.

```ex
@tag getter
test "Collect user" do
end
```
```shell
mix test --exclude getter
mix test --include getter
mix test --only getter
```

## Parse tests / Do something if failed

* [is-elixir-ok.sh (github.com/janis-rullis)](https://github.com/janis-rullis/shell-scripts/blob/master/is-elixir-ok.sh)

## [`mix test` Parameters](https://hexdocs.pm/mix/Mix.Tasks.Test.html)

```
--color - enables color in the output
--cover - the directory to include coverage results
--exclude - excludes tests that match the filter
--force - forces compilation regardless of modification times
--formatter - formatter module
--include - includes tests that match the filter
--listen-on-stdin - runs tests, and then listens on stdin. Receiving a newline will result in the tests being run again. Very useful when combined with --stale and external commands which produce output on stdout upon file system modification.
--max-cases - sets the maximum number of tests running async. Only tests from different modules run in parallel. Defaults to twice the number of cores.
--no-archives-check - does not check archives
--no-color - disables color in the output
--no-compile - does not compile, even if files require compilation
--no-deps-check - does not check dependencies
--no-elixir-version-check - does not check the Elixir version from mix.exs
--no-start - does not start applications after compilation
--only - runs only tests that match the filter
--preload-modules - preloads all modules defined in applications
--raise - raises if the test suite failed
--seed - seeds the random number generator used to randomize tests order; --seed 0 disables randomization
--slowest - prints timing information for the N slowest tests Automatically sets --trace and --preload-modules
--stale - runs only tests which reference modules that changed since the last test --stale. You can read more about this option in the “Stale” section below.
--timeout - sets the timeout for the tests
--trace - runs tests with detailed reporting; automatically sets --max-cases to 1
```