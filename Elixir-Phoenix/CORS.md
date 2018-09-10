# CORS

* https://github.com/mschae/cors_plug
* https://medium.com/@yagoazedias_75857/how-to-configure-cors-in-your-phoenix-application-5ef0234bc25f

## router.ex

```ex
  pipeline :api do
    plug CORSPlug, origin: ["http://elixir.local"]
    plug :accepts, ["json"]
  end
```

## mix.exs/deps()

```exs
{:cors_plug, "~> 1.5"}
```

## Open a console in the project's directory

```shell
mix
```
> cors app generated.