# Elixir / Phoenix

* [Jose Valim (twitch.tv)](https://www.twitch.tv/videos/354590458)
* [Today I learend](https://til.hashrocket.com/elixir)
* [Background Processing in Elixir with GenStage (medium.com/@scripbox_tech)](https://medium.com/@scripbox_tech/background-processing-in-elixir-with-genstage-efb6cb8ca94a)
* [Event-driven architectures in Elixir - Maciej Kaszubowski - ElixirConf EU 2018.](https://www.youtube.com/watch?v=8qDXG7tnl9w)
* [Building videochat with Elixir and Phoenix - Anil Wadghule - ElixirConf EU 2018](https://www.youtube.com/watch?v=-n5IlXBOaBE)
* [Let's do Elixir and Phoenix together - Chris McCord - ElixirConf EU 2018 (Youtube/Erlang Solutions)](https://www.youtube.com/watch?v=MTT1Jl4Fs-E)

## Docs / Help / Tutorials

* [Elixir Forum](https://elixirforum.com/)
* [elixir-lang.org](https://elixir-lang.org/getting-started/introduction.html)
* [hexdocs.pm/phoenix](https://hexdocs.pm/phoenix/up_and_running.html)
* [Learning resources (elixir-lang.org)](https://elixir-lang.org/learning.html)
* [Elixir school (elixirschool.com)](https://elixirschool.com/)
* [Elixir Tutorials and Courses (hackr.io)](https://hackr.io/tutorials/learn-elixir)
* [Elixir (liveedu.tv)](https://www.liveedu.tv/guides/x/elixir/beginner)
* [dwyl/learn-elixir](https://github.com/dwyl/learn-elixir)
* [learn-phoenix-framework](https://github.com/dwyl/learn-phoenix-framework)
https://github.com/elixir-lang/elixir/wiki
https://dev.to/matt24ray/best-resources-for-learning-elixir-467f
https://github.com/seven1m/30-days-of-elixir
https://www.jackmarchant.com
http://learningelixir.joekain.com/how-I-learned-elixir/
https://startlearningelixir.com
https://hackr.io/tutorials/learn-elixir/amp

### Find method descriptions

* Go to [HexDocs](https://hexdocs.pm/elixir/Kernel.html).
* Find the class.
* Under it, find [functions](https://hexdocs.pm/elixir/IO.html#inspect/2).
* Click on the '<>' icon on the top right to [open the code in github](https://github.com/elixir-lang/elixir/blob/v1.6.5/lib/elixir/lib/io.ex#L295).

## Editors

* VS Code with [vscode-elixir plugin](https://marketplace.visualstudio.com/items?itemName=mjmcloug.vscode-elixir)
and [ElixirLS](https://marketplace.visualstudio.com/items?itemName=JakeBecker.elixir-ls).
* [Atom with Elixir plugins](https://github.com/janis-rullis/dev/blob/master/Code-editor/Atom.md)
* [Spacemacs](https://github.com/syl20bnr/spacemacs)

## Paths

* router - web/router.ex

## Snags

### Linter does not work

Elixir must be installed.

### Dependencies

```shell
mix deps.clean --all
mix deps.get
```

## [Format codebase](https://elixir-lang.org/blog/2018/01/17/elixir-v1-6-0-released#code-formatter)

To automatically format your codebase, you can run the `new mix format` task. A .formatter.exs file
may be added to your project root for rudimentary formatter configuration

## [Function annotation](https://elixir-lang.org/blog/2018/01/17/elixir-v1-6-0-released/#deprecated-and-since-attributes)

* `@deprecated` - marks if a function or macro is deprecated
* `@since` - annotates the version the API was introduced.

```ex
@doc "Breaks a collection into chunks"
@since "1.0.0"
@deprecated "Use chunk_every/2 instead"
def chunk(collection, chunk_size) do
  chunk_every(collection, chunk_size)
end
```

## [defguard](https://elixir-lang.org/blog/2018/01/17/elixir-v1-6-0-released/#defguard-and-defguardp)

in a situation where you had to check the age to be more than or equal to 21 in multiple places. 

```ex
defguard is_drinking_age(age) when age >= 21

def serve_drinks(%User{age: age}) when is_drinking_age(age) do
  # Code that serves drinks!
end
```

## [Breakpoints](https://hexdocs.pm/iex/IEx.html#break!/4)

```ex
break!(module, function, arity, stops \\ 1)
```

## [mix xref](https://hexdocs.pm/mix/Mix.Tasks.Xref.html)

mix xref is a task added in Elixir v1.3 which provides general information about how modules and files in an application depend on each other.

```
$ mix xref graph --format stats
Tracked files: 129 (nodes)
Compile dependencies: 256 (edges)
Structs dependencies: 46 (edges)
Runtime dependencies: 266 (edges)

Top 10 files with most outgoing dependencies:
  * test/support/factory.ex (18)
...

Top 10 files with most incoming dependencies:
  * lib/hexpm/web/web.ex (84)
...
```

## Erlang

* [Erlang -> Elixir](https://elixir-lang.org/crash-course.html)
* [awesome-erlang - A curated list of awesome Erlang libraries, resources and shiny things.](https://github.com/drobakowski/awesome-erlang)
* [mnesia - A distributed telecommunications DBMS (erlang.org](http://erlang.org/doc/man/mnesia.html)

## Other

* [elixir-companies - A list of companies currently using Elixir in production.](https://github.com/doomspork/elixir-companies)
* [phoenix-docker-compose - Docker development environment for Elixir+Phoenix](https://github.com/dogweather/phoenix-docker-compose)
* [why_elixir - Selling points for Elixir / Phoenix](https://github.com/bignerdranch/why_elixir)

## NGINX

* [Setting Up Phoenix/Elixir With Nginx and LetsEncrypt (medium.com/@a4word)](https://medium.com/@a4word/setting-up-phoenix-elixir-with-nginx-and-letsencrypt-ada9398a9b2c)
