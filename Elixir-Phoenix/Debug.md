# Elixir debug

* [Debugging (elixir-lang.org).](https://elixir-lang.org/getting-started/debugging.html)

## Inspect

```ex
IO.inspect('================ Start Inspect==============')
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
exit "I am exiting"
```

## Logs

In the console.