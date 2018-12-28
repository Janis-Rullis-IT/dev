# Migrations

* https://hexdocs.pm/ecto/2.0.5/Ecto.Migration.html#table/2
* https://hashrocket.com/blog/posts/ecto-migrations-simple-to-complex
* https://devhints.io/phoenix-migrations

By default, the table will also include a primary_key of name :id and type :serial. Check table/2 docs for more information.

```ex
create_if_not_exists table(:posts) do
  add :title, :string, size: 50, null: false
  add :slug, :string, size: 50, null: true
end
```

## Custom query

I prefer this approach because this allow you to fully control what exactly you want.
The abstracted definition becomes really ugly when you want more specific things like set INT type, UNSIGNED, COMMENT.

```ex
defmodule ElixirBackend.Repo.Migrations.CreatePosts do
  use Ecto.Migration

  def up do

    "CREATE TABLE IF NOT EXISTS `posts` (
      `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
      `title` VARCHAR(50) NOT NULL,
      `user_id` INT(11) UNSIGNED NULL DEFAULT NULL,
      `inserted_at` DATETIME NULL DEFAULT NULL,
      `updated_at` DATETIME NULL DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=INNODB DEFAULT CHARACTER SET=UTF8;
    "
    |> execute
  end

  def down do
    "DROP TABLE `posts`;" |> execute
  end
end
```

## Set id as INT (and not BIGNIT)

## Drop a table

```ex
drop_if_exists table("posts")
```

## Drop a column

```ex
alter table("posts") do
  remove :title
end
```	

## Drop an index

```ex
drop_if_exists index("posts", [:name])
```