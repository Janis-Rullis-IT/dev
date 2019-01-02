# Elixir debug

* [Debugging (elixir-lang.org).](https://elixir-lang.org/getting-started/debugging.html)

## Inspect

* https://elixirschool.com/blog/til-io-inspect-labels/

```ex
IO.inspect('================ Start Inspect==============', label: "input")
data |> IO.inspect
IO.inspect('================ End Inspect ==============')
```
>  %{"names" => #MapSet<[]>, "surnames" => #MapSet<[]>}


* Do the request (open according page, postman or exec cmd).
* Watch in terminal where mix was launced.

## Return early

### throw

```ex
  ​throw​ {:animal, ​"wombat"​}
 ```

### exit

```ex
    IO.inspect('================ Start Inspect==============')
    data |> IO.inspect
    IO.inspect('================ End Inspect ==============')
    exit "I am exiting"
```

## Logs

In the console.

## [Raw SQL query](https://stackoverflow.com/a/36770980)

```ex
Ecto.Adapters.SQL.to_sql(:all, Repo, myquery) |> IO.inspect
```
