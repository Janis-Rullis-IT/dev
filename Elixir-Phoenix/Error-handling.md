# Error handling

* [Error Handling in Elixir Libraries (michal.muskala.eu).](https://michal.muskala.eu/2017/02/10/error-handling-in-elixir-libraries.html)


## Ok/Error tuples - `{:ok, value}`

### Call

```ex
      suprise =
        My.MagicalService.get_bunny(
          hat,
          hand
        )

      case suprise do
        {:ok, bunny} -> render(conn, "index.json", bunny: bunny)
        {:error, _} -> render(conn, "error.json", error: "No bunny today...")
      end
```

### Method

```ex
  def get_bunny(
        hat,
        hand,
      ) do
      ...
      ...
     {
      :ok,
      bunny
    }
```