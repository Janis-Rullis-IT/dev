# Save-Insert-Upate-BeforeSave

## [Process value when saving](https://stackoverflow.com/questions/36966950/downcase-email-address-and-creating-md5-sum-before-saving-it)

Add a custom handler in the model's changeset method.


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

## prepare_changes

* https://hexdocs.pm/ecto/Ecto.Changeset.html#prepare_changes/2
* https://medium.com/@kaisersly/prepare-changes-and-counter-cache-abd93b8a20a

Provides a function to run before emitting changes to the repository.

```ex
def create_comment(comment, params) do
  comment
  |> cast(params, [:body, :post_id])
  |> prepare_changes(fn changeset ->
    assoc(changeset.data, :post)
    |> changeset.repo.update_all(inc: [comment_count: 1])
    changeset
  end)
end
```