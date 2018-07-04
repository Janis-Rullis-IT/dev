# [Create, Update, Delete](https://devhints.io/phoenix-ecto)

## Update

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

```ex
post
|> ElixirBackend.Post.changeset(%{title: "New title", updated_at: DateTime.utc_now()})
|> Repo.update!()
```