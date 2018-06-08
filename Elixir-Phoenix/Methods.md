# Methods

## Set default value \\ :default

* [Default function parameters (elixir-recipes.github.io)](http://elixir-recipes.github.io/functions/default-function-parameters/)

```ex
defmodule Bob do
  def say(message \\ "Hi, I'm Bob!") do
    "Bob says: #{message}"
  end	
end
```

