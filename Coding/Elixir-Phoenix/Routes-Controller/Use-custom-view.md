# Use-custom-view

* https://hexdocs.pm/phoenix/Phoenix.Controller.html#render/3-views
* https://stackoverflow.com/a/31193348
* https://elixirforum.com/t/how-phoenix-view-works-exactly/4796/2

```ex
plug :put_view, MyApp.TheView
```

```ex
def show(conn, _params) do
  conn
  |> put_view(MyAppWeb.SpecialView)
  |> render(:show, message: "Hello")
end
```

```ex
defmodule MyAppWeb.UserController do
  use Phoenix.Controller

  plug :put_view, MyAppWeb.SpecialView

  def show(conn, _params) do
    render(conn, :show, message: "Hello")
  end
end
```