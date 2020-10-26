# Elixir paralelisms

## Use case

* Collect News page.
* Collect 4 articles.


## Regular / Sync

1. Collects News page.
2. Collects 4 articles.
3. Return data.

Takes 20s to display in frontend.

## [Share the load with tasks](https://hexdocs.pm/elixir/Task.html)

1. Launch paralelly these tasks.
2. Wait them both to finish.
3. Return data.

Takes x2 less time, so 10s to display in frontend.

> Reuires multiple cores. If has only 1 core, then it will do them one by one anyway.

## Streaming

* [Elixir streaming](https://gist.github.com/eezis/9728126)
* [JSON streaming](https://instantdomainsearch.com/articles/streaming-json-jsons/)

1. Launch paralelly these tasks.
2. Return data when any of the tasks finishes.

First draw appears at 5s, full draw happens after 10s.

> Backend works kindof the same as tasks, but the only difference that it instantly returns first received data.
> Backend requires: multiple cores.
> Frontend requires: Adjust JS to be ready to handle received chunks and display order.