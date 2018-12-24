# 9. Setup endpoints

## Generate

```shell
mix phx.gen.json Blog Article blog_article title:string--web Blog
```
> Use singular table names.

> Using the related table's name in the begining will put them in one table group.

## Migration

```ex
defmodule Backend.Repo.Migrations.CreateBlogArticle do
  use Ecto.Migration

  def up do
  "CREATE TABLE IF NOT EXISTS `blog_article` (
			`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
			`title` VARCHAR(250) NOT NULL,
			`slug` VARCHAR(250) NOT NULL,
			`img` VARCHAR(250) NULL,
			`rating` TINYINT(1) DEFAULT 0 NOT NULL,
			`text` VARCHAR(2000) NULL DEFAULT NULL,
			`inserted_at` DATETIME NULL DEFAULT NULL,
			`updated_at` DATETIME NULL DEFAULT NULL,
			PRIMARY KEY (`id`)
		) ENGINE=INNODB DEFAULT CHARACTER SET=UTF8;"
    |> execute
  end

  def down do
		"DROP TABLE `blog_article`" |> execute
  end
end
```

## Schema, changeset

```ex
  @timestamps_opts [type: :naive_datetime, usec: false]
  schema "blog_article" do
    field(:title, :string)
    field(:slug, :string)
    field(:img, :string, default: nil)
    field(:rating, :integer, default: 0)
    field(:text, :string, default: nil)

    timestamps()
  end

  @doc false
  def changeset(post, attrs) do
    post
    |> cast(attrs, [:title, :slug, :img, :rating, :text])
    |> Backend.IncrementalSlug.put(__MODULE__)
    |> validate_required([:title, :slug])
  end
```

## Routes


* lib/elixir_backend_web/router.ex

```ex
	scope "/api", BackendWeb do
			pipe_through :api
			resources "/users", UserController
      resources "/posts", PostController

      scope "/blog", Blog do
        resources "/article", ArticleController, as: :blog_article
      end
  end
```

```shell
mix phx.routes
```

## Execute the migration

```shell
mix ecto.migrate
```

## Tests

```shell
MIX_ENV=test mix test
```