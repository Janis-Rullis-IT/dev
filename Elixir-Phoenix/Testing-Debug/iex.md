https://til.hashrocket.com/posts/is9yfvhdnp-enable-history-in-iex-through-erlang-otp-20-
https://til.hashrocket.com/posts/vkja7fzafy-setting-breaks-in-iex-for-debugging
https://til.hashrocket.com/posts/nc1dk7gxhz-terminate-incomplete-expression-in-iex-

## Test datatypes or fiels

### Exists

```iex
i IncremetnalSlug.TestRepo
```

```
Term
  IncremetnalSlug.TestRepo
Data type
  Atom
Raw representation
  :"Elixir.IncremetnalSlug.TestRepo"
Reference modules
  Atom
Implemented protocols
  IEx.Info, Slugify, List.Chars, Ecto.Queryable, Inspect, String.Chars
iex(4)> i IncremetnalSlug.TestRepo2
Term
  IncremetnalSlug.TestRepo2
Data type
  Atom
Raw representation
  :"Elixir.IncremetnalSlug.TestRepo2"
Reference modules
  Atom
Implemented protocols
  IEx.Info, Slugify, List.Chars, Ecto.Queryable, Inspect, String.Chars
iex(5)> i IncrementalSlug.TestRepo2  
Term
  IncrementalSlug.TestRepo2
Data type
  Atom
Module bytecode
  _build/mysql/lib/incremental_slug/ebin/Elixir.IncrementalSlug.TestRepo2.beam
Source
  test/support/repo2.ex
Version
  [298851294421908506711486464584657310394]
Compile options
  []
Description
  Call IncrementalSlug.TestRepo2.module_info() to access metadata.
Raw representation
  :"Elixir.IncrementalSlug.TestRepo2"
Reference modules
  Module, Atom
Implemented protocols
  IEx.Info, Slugify, List.Chars, Ecto.Queryable, Inspect, String.Chars
iex(6)> 
```

### Not existing

```iex
i Blargh
```

```
Term
  Blargh
Data type
  Atom
Raw representation
  :"Elixir.Blargh"
Reference modules
  Atom
Implemented protocols
  IEx.Info, Slugify, List.Chars, Ecto.Queryable, Inspect, String.Chars
```