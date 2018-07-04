# [Create, Update, Delete](https://devhints.io/phoenix-ecto)

* changeset works as data parser.
* cast - takes only selected.
* validate_required - requires selected.

```ex
def changeset(struct, params \\ %{}) do
    struct
    |> cast(params, [:title, :updated_at])
    |> validate_required([:title, :updated_at])
  end
```

## [insert_or_update](https://stackoverflow.com/a/37697387)

```ex
 person = Person.get_item()
 case person do
    nil -> %Person{}
    item -> item
  end
  |> Person.changeset(%{name: "John", surname: "Doe", "updated_at": DateTime.utc_now()})
  |> Repo.insert_or_update
```

## Update

```ex
post
|> ElixirBackend.Post.changeset(%{title: "New title", updated_at: DateTime.utc_now()})
|> Repo.update!()
```

## [Insert](https://github.com/elixir-ecto/ecto/blob/master/guides/Getting%20Started.md#validating-changes)

```ex
%Friends.Person{}
|> Friends.Person.changeset(%{})
|> Repo.insert()
```

OR

```ex
person = %Friends.Person{}
changeset = Friends.Person.changeset(person, %{})
Friends.Repo.insert(changeset)
```