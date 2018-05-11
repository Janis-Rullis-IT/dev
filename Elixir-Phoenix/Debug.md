# Elixir debug

* [Debugging (elixir-lang.org).](https://elixir-lang.org/getting-started/debugging.html)

## Inspect

```ex
(1..10)
|> IO.inspect
```

```
IO.inspect('================zzzz==============')
```

* Do the request (open according page, postman or exec cmd).
* Watch in terminal where mix was launced.


## Return early - throw

```ex
  ​throw​ {:animal, ​"wombat"​}
 ```