# Routes

* [Routing (hexdocs.pm/phoenix)](https://hexdocs.pm/phoenix/routing.html)
* [Phoenix: Routing cheatsheet (devhints.io)](https://devhints.io/phoenix-routing)

## [Resources](https://hexdocs.pm/phoenix/routing.html#resources)

```ex
defmodule ElixirBackend.Router do
  use ElixirBackend.Web, :router
  pipeline :api do
    plug :accepts, ["json"]
  end

  scope "/", ElixirBackend do
    pipe_through :api
    resources "/users", UserController

    # This allows to organize routes in direcotires. Group one purpose files in one place.
    scope "/blog", Blog do

        # This now points to ElixirBackend.Blog.PostController
        # Which could be located in controllers/blog/post_controller.ex

        get("/", PostController, :list)
        post("/", PostController, :create)
        options("/", PostController, :options)
    end
  end
end
```

## Control endpoints

```ex
resources "/users", UserController, only: [:index, :show]
resources "/users", UserController, except: [:delete]
```

## Compile

```shell
 mix phx.routes
```

```
user_path  GET     /users           ElixirBackend.UserController :index
user_path  GET     /users/:id/edit  ElixirBackend.UserController :edit
user_path  GET     /users/new       ElixirBackend.UserController :new
user_path  GET     /users/:id       ElixirBackend.UserController :show
user_path  POST    /users           ElixirBackend.UserController :create
user_path  PATCH   /users/:id       ElixirBackend.UserController :update
           PUT     /users/:id       ElixirBackend.UserController :update
user_path  DELETE  /users/:id       ElixirBackend.UserController :delete
```