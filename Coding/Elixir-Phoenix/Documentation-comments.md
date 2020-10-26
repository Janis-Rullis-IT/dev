# [Documentation-comments](https://hexdocs.pm/elixir/writing-documentation.html)

* [Typespecs (hexdocs.pm/elixir)](https://hexdocs.pm/elixir/typespecs.html)
* [Doctests, patterns and with (elixir-lang.org)](https://elixir-lang.org/getting-started/mix-otp/docs-tests-and-with.html)

```ex
  @doc ~S"""
  Find the taken slug in the database. It may contain an increment.

  ## Parameters

  * `slug` - A regular slug without an increment.
  * `id` - Exclude this ID from the query.
  * `queryable` - In which table to look?
  * `to` - In which column is the slug stored?

  ## Return value

   A slug with an increment or `nil`.

   In case, if multiple items were found, return the one with the greatest increment.

  ## Examples

      iex> alias Backend.{Blog.Post, IncrementalSlug, Repo}

      iex> IncrementalSlug.find("Some-title", nil, Post)
      nil

      iex> Post.changeset(%Post{}, %{title: "Some title"}) |> Repo.insert!()
      %Post{id: 1, title: "Some title", slug: "Some-title"}

      iex> IncrementalSlug.find("Some-title", nil, Post)
      nil

      iex> Post.changeset(%Post{}, %{title: "Some title"}) |> Repo.insert!()
      %Post{id: 2, title: "Some title", slug: "Some-title-1"}

      iex> IncrementalSlug.find("Some-title", nil, Post)
      "Some-title-1"

      iex> Post.changeset(%Post{}, %{title: "Some title"}) |> Repo.insert!()
      %Post{id: 3, title: "Some title", slug: "Some-title-2"}

      iex> IncrementalSlug.find("Some-title", nil, Post)
      "Some-title-2"
  """
  @spec find(slug :: String.t(), id :: integer(), queryable :: Ecto.Queryable.t(), to :: atom()) ::
          String.t() | nil
  @spec find(slug :: nil, id :: integer(), queryable :: Ecto.Queryable.t(), to :: atom()) :: nil
  @spec find(slug :: String.t(), id :: 0, queryable :: Ecto.Queryable.t(), to :: atom()) :: nil
  @spec find(slug :: String.t(), id :: integer(), queryable :: nil, to :: atom()) :: nil
  def find(slug, id, queryable, to \\ @incremental_slug.to_field)
  def find(slug, id, queryable, _to) when is_nil(slug) or id == 0 or is_nil(queryable), do: nil

  def find(slug, id, queryable, to),
    do:
      queryable
      |> selectField(to)
      |> whereSlugWithIncrement(slug, to)
      |> exlcudeID(id)
      |> findItemWithGreatestIncrement(to)
````

## Alwys referr to methods with a full namespace

### Bad

```ex
# iex> create_user(%{})
```
> Bad because if You try to replicate this code then the method won't be found.

### Good

```ex
# iex> Backend.Account.create_user(%{})
```
> This will be executed correctly.


## Setup [ExDoc](https://github.com/elixir-lang/ex_doc/)


### Add tO `mix.exs` `deps`

```ex
def deps do
  [{:ex_doc, "~> 0.19", only: :dev, runtime: false}]
end
```

### Install deps

```ex
mix deps.get
```

### Gen docs

```ex
mix docs
```

### Location

docs/index.html