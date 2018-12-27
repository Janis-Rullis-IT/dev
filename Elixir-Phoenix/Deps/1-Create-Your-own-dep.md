# Create Your own dep

## Setup the dep

* [Library Guidelines (hexdocs.pm/elixir)](https://hexdocs.pm/elixir/library-guidelines.html)
* [How to create and publish Hex.pm package (Elixir) (medium.com/kkempin)](https://medium.com/kkempin/how-to-create-and-publish-hex-pm-package-elixir-90cb33e2592d)
* [How to build Elixir packages and Publish to Hex.pm ? (medium.com/blackode)](https://medium.com/blackode/how-to-write-elixir-packages-and-publish-to-hex-pm-8723038ebe76)
* Look into other deps to have an example.


## Init

```shell
cd YOUR_PROJECT
mkdir my_deps
cd my_deps
mix new incremental_slug
cd incremental_slug
git init
cd YOUR_PROJECT
```

## Add it to deps

```ex
{:incremental_slug, path: "my_deps/incremental_slug"}
```

## Load deps

```shell
mix
mix deps.get
```

## Test that the lib is connected

```shell
MIX_ENV=test iex -S mix
```

```iex
IncrementalSlug.hello
```
> :world