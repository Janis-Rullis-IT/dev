# Seperate-route-files

`forward`

One routing file can grow really big so it would be nice to split it into tinier files.

* https://elixirguides.com/2018/03/how-to-split-your-phoenix-router-code-into-parts/
* https://hexdocs.pm/phoenix/Phoenix.Router.html#forward/4
* https://elixirforum.com/t/are-multiple-routers-under-a-single-endpoint-possible/14019/4
* https://elixirforum.com/t/split-router-code-into-parts/13016/2
* https://elixir-lang.org/getting-started/alias-require-and-import.html

### `router.ex`

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
     forward("/blog", Router.Blog)
  end
end
```

### `router/blog.ex`

```ex
defmodule ElixirBackend.Router.Blog do
  @moduledoc """
  Blog routes.
  """
  use ElixirBackend.Web, :router

  scope "", ElixirBackend.Blog do
    get("/", PostController, :list)
    post("/", PostController, :create)
    options("/", PostController, :options)
  end
```