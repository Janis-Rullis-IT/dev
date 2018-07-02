# Create a custom mix command / task

* [Mix (learnelixir.tv)](https://www.learnelixir.tv/episodes/10-mix)
* [Functions, modules and structs (learnelixir.tv)](https://www.learnelixir.tv/episodes/04-functions-modules-and-structs)

## [Create a file 'lib/elixir_backend/user.ex'](https://github.com/janis-rullis/elixir/blob/master/backend/lib/elixir_backend/user.ex)

```ex
defmodule User do
  @moduledoc """
  Defines the user struct and functions to handle users.
  From https://www.learnelixir.tv/episodes/04-functions-modules-and-structs
  """

  import String, only: [split: 1]
  import List, only: [first: 1, last: 1]

  defstruct name: nil, email: nil

  @doc """
  Get the last name of a user.

  ## Parameters

  - `user` - A User struct.

  ## Examples

      user = %User{name: "Alice Winston"}
      User.last_name(user)
      "Winston"
  """
  def last_name(user) do
    user
    |> get_names
    |> last
  end

  defp get_names(user) do
    split(user.name)
  end
end
```

## [Create a file 'lib/mix/tasks/user.ex'](https://github.com/janis-rullis/elixir/blob/master/backend/lib/mix/tasks/user.ex)

```ex
defmodule Mix.Tasks.User do

  # mix help | grep user
  @shortdoc "Extract user's last name from the passed full name."

  # mix help user
  @moduledoc """
  Arguments:
  * n - full name (String, Required).
  * f - should write output to file (Boolean)

  * mix user -n Janis Rullis
  * mix user -n Janis Rullis -f true

  From https://www.learnelixir.tv/episodes/10-mix
  """

  use Mix.Task

  def run(args) do
    {opts, _, _} = OptionParser.parse(args, aliases: [n: :full_name, f: :must_write_to_file])
    user = %User{email: nil, name: opts[:full_name]}
    last_name = User.last_name(user);
    IO.puts last_name

    if(opts[:must_write_to_file]) do
      IO.puts File.write("/app/storage/logs/user.log", last_name, [:append])
    end
  end
end
```

## Compile

```ex
mix compile
```

## Call

```ex
mix user -n "John Doe"
```
> Doe

## See info

```ex
mix help | grep user
mix help user
```