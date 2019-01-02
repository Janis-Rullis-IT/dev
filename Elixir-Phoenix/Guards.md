# Guards

* https://rokobasilisk.gitbooks.io/elixir-getting-started/content/case,_cond_and_if/expressions_in_guard_clauses.html
* https://hexdocs.pm/elixir/master/guards.html

```ex
def hi(ids, user_id, post_id)
      when length(ids) > 0 and is_integer(user_id) and user_id> 0 and
             is_integer(post_id) and post_id> 0 do
  "ok"
do

def hi(ids, user_id, post_id) do
    "{}"
end
```

### Examples

```iex
iex> Backend.MyModule.hi([123], 1, 1)
"ok"
iex> Backend.MyModule.hi(123, 1, 1)
"{}"
iex> Backend.MyModule.hi([123], 1, 0)
"{}"
iex> Backend.MyModule.hi([], 1, 1)
"{}"
iex> Backend.MyModule.hi([123], 0, 1)
"{}"
iex> Backend.MyModule.hi([123], 1, "abc")
"{}"
iex> Backend.MyModule.hi([123], "abcs", 1)
"{}"
```