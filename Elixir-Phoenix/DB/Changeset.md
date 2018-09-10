# [Ecto Changeset](https://hexdocs.pm/ecto/Ecto.Changeset.html)

* [Thinking in Ecto - schemas and changesets (cultofmetatron.io)](http://cultofmetatron.io/2017/04/22/thinking-in-ecto---schemas-and-changesets/)

## Default val

```ex
 schema "posts" do
    field :title, :string
		field :uri, :string
		field :img, :string, default: nil
		field :rating, :integer, default: nil
		field :text, :string, default: nil
```

Then `cast` will set it to defaults

```ex
def changeset(post, attrs) do
    post
    |> cast(attrs, [:title, :uri, :img, :rating, :text])
```