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

## Custom validation 

* https://medium.com/@QuantLayer/writing-custom-validations-for-ecto-changesets-4971881c7684

## Custom validate and prepare before saving 
* http://cultofmetatron.io/2017/04/22/thinking-in-ecto---schemas-and-changesets/
* https://www.amberbit.com/blog/2017/12/27/ecto-as-elixir-data-casting-and-validation-library/

## Test 
* http://www.smoothterminal.com/articles/ecto-validation-with-changesets
