# DB

## Fix * (DBConnection.ConnectionError)timed out because it checked out the connection for longer than 30000ms

### Reproduce with [`mix slow_query`](https://github.com/janis-rullis/elixir/blob/master/backend/lib/mix/tasks/slow-query.ex)

### Change timeout

Increase `timeout:` in config/*.exs

