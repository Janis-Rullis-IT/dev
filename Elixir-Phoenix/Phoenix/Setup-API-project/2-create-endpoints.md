# Create controllers, models, migrations (just files, not executed)

```shell
mix phx.gen.json Account User users name:string surname:string email:string
```

```
* creating lib/elixir_backend_web/controllers/user_controller.ex
...
```

## Replace migrations with custom queries

* priv/repo/migrations/20180809165054_create_users.exs

```ex
defmodule ElixirBackend.Repo.Migrations.CreateUsers do
  use Ecto.Migration

  def up do

    "CREATE TABLE IF NOT EXISTS `users` (
      `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
      `name` VARCHAR(50) NOT NULL,
      `surname` VARCHAR(50) NOT NULL,
      `email` VARCHAR(100) NOT NULL,
      `inserted_at` DATETIME NULL DEFAULT NULL,
      `updated_at` DATETIME NULL DEFAULT NULL,
      UNIQUE INDEX `email` (`email`),
      PRIMARY KEY (`id`)
    ) ENGINE=INNODB DEFAULT CHARACTER SET=UTF8;
    "
    |> execute
  end

  def down do
    "DROP TABLE `users`;" |> execute
  end
end
```

## Add the controller to the routes

* lib/elixir_backend_web/router.ex

```ex
scope "/api", BackendWeb do
    pipe_through :api
    resources "/users", UserController
end
```

```shell
mix phx.routes
```

```
Compiling 16 files (.ex)
Generated elixir_backend app
user_path  GET     /api/users           ElixirBackendWeb.UserController :index
user_path  GET     /api/users/:id/edit  ElixirBackendWeb.UserController :edit
user_path  GET     /api/users/new       ElixirBackendWeb.UserController :new
user_path  GET     /api/users/:id       ElixirBackendWeb.UserController :show
user_path  POST    /api/users           ElixirBackendWeb.UserController :create
user_path  PATCH   /api/users/:id       ElixirBackendWeb.UserController :update
           PUT     /api/users/:id       ElixirBackendWeb.UserController :update
user_path  DELETE  /api/users/:id       ElixirBackendWeb.UserController :delete
```

## Execute migrations

```shell
mix ecto.migrate
```

```
[info] == Migrated in 0.0s
```

## Restart server

## Create a user by calling the API endpoint from Postman

```http
POST /api/users HTTP/1.1
Host: api.elixir.local:4000
Content-Type: application/json
Cache-Control: no-cache
Postman-Token: a7a325e3-4d75-4e92-bec0-090af4545833

{  
   "user":{  
      "name":"John",
      "surname":"Doe",
      "email":"john@doe.com"
   }
}
```

```json
{"data":{"surname":"Doe","name":"John","id":1,"email":"john@doe.com"}}
```

## Posts

```shell
mix phx.gen.json Blog Post posts title:string
```

```ex
defmodule Backend.Repo.Migrations.CreatePosts do
  use Ecto.Migration

	def up do
		"CREATE TABLE IF NOT EXISTS `posts` (
			`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
			`title` VARCHAR(250) NOT NULL,
			`uri` VARCHAR(250) NOT NULL,
			`img` VARCHAR(250) NULL,
			`inserted_at` DATETIME NULL DEFAULT NULL,
			`updated_at` DATETIME NULL DEFAULT NULL,
			PRIMARY KEY (`id`)
		) ENGINE=INNODB DEFAULT CHARACTER SET=UTF8;"
    |> execute
  end

  def down do
		"DROP TABLE `posts`" |> execute
  end
end
```

```ex
resources "/posts", PostController
```

```shell
mix ecto.migrate
```

```ex
schema "posts" do
    field :title, :string
	field :url, :string
	field :img, :string

    timestamps()
end
```

```http
POST /api/posts HTTP/1.1
Host: api.elixir.local:4000
Content-Type: application/json
Cache-Control: no-cache
Postman-Token: 7c287a1d-8619-4e24-bacd-308178e706ce

{  
   "post":{  
      "title":"Post 1",
      "url":"posst_1",
      "img":""
   }
}
```

```json
{"data":{"title":"Post 1","id":1}}
```