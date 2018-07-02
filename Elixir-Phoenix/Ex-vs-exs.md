# .ex vs .exs

* [Elixir: When to use .ex and when .exs files (stackoverflow.com)](https://stackoverflow.com/a/36293239)

```
.ex is for compiled code, .exs is for interpreted code.

ExUnit tests, for example, are in .exs files so that you don't have to recompile every time you make a change to your tests. If you're writing scripts or tests, use .exs files. Otherwise, just use .ex files and compile your code.

As far as pros/cons, interpretation will take longer to execute (as elixir has to parse, tokenize, etc.), but doesn't require compilation to run. That's pretty much it - if the flexibility of running scripts is more important than optimized execution time, use .exs. Most of the time, you'll use .ex.
```