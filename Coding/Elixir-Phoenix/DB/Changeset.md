# [Ecto Changeset](https://hexdocs.pm/ecto/Ecto.Changeset.html)

* [Thinking in Ecto - schemas and changesets (cultofmetatron.io)](http://cultofmetatron.io/2017/04/22/thinking-in-ecto---schemas-and-changesets/)
* [More Changesets, Less Problems (medium.com/@QuantLayer)](https://medium.com/@QuantLayer/more-changesets-less-problems-bec2ca502364)

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

## Custom validate and prepare before saving

* [Thinking in  Ecto: Schemas and changesets (cultofmetatron.io)](http://cultofmetatron.io/2017/04/22/thinking-in-ecto---schemas-and-changesets/)
* https://stackoverflow.com/a/36967635
* https://www.amberbit.com/blog/2017/12/27/ecto-as-elixir-data-casting-and-validation-library/

```ex
  def changeset(post, attrs) do
    post
    |> cast(attrs, [:title, :uri, :img, :rating, :text])
		|> getUriFromTitle()
    |> validate_required([:title, :uri])
  end

  defp getUriFromTitle(changeset) do
    title = get_change(changeset, :title)
	uri = getUriFromString(title)
    changeset = changeset |> put_change(:uri, uri)
  end
```

## Custom validation

* https://medium.com/@QuantLayer/writing-custom-validations-for-ecto-changesets-4971881c7684

## Test

* http://www.smoothterminal.com/articles/ecto-validation-with-changesets
* https://medium.com/@diamondgfx/testing-validations-in-elixir-and-ecto-677bd8a071a1

## outdated but fun with :before_update

* https://blog.danielberkompas.com/2015/07/03/encrypting-data-with-ecto/