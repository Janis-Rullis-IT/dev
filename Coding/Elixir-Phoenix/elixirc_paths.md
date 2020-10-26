# `elixirc_paths`

https://til.hashrocket.com/posts/3y6morjjs7-add-elixir-files-to-your-compiled-list

## Depending on conf

```ex
# Specifies which paths to compile per environment.
  defp elixirc_paths(:test), do: ["lib", "test/support"]
  defp elixirc_paths(:mysql), do: ["lib", "test/support"]
```

## https://github.com/elixir-lang/elixir/blob/master/lib/mix/lib/mix/tasks/compile.elixir.ex

```
    * `:elixirc_paths` - directories to find source files.
      Defaults to `["lib"]`.
```

## https://gist.github.com/slashdotdash/70541f4e79d17bcd238a9a6adf7383b8

Include elixirc_paths in the application mix.exs file. This is configured by mix environment so you can set additional paths to include.


## https://til.hashrocket.com/posts/3y6morjjs7-add-elixir-files-to-your-compiled-list

Add Elixir files to your compiled list
While working on an Elixir package today, I wanted to add the test/support directory to my compiled files. I knew the Phoenix Framework did this so I went there to take a look and discovered elixirc_paths.
