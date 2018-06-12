# Parallel, concurent tasks

* [Parallel Map in Elixir (nathanmlong.com)](http://nathanmlong.com/2014/07/pmap-in-elixir/)

lib/paralell.ex

```ex
defmodule Parallel do
  def map(collection, func) do
    collection
    |> Enum.map(&Task.async(fn -> func.(&1) end))
    |> Enum.map(fn item ->
      item |> Task.await(120_000)
    end)
  end
end
```

## Call

```ex
Parallel.map(1..1_000, fn(integer) -> integer * integer end)
```