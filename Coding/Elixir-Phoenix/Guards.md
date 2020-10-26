# Guards

## Type-check

* https://kapeli.com/cheat_sheets/Elixir_Guards.docset/Contents/Resources/Documents/index

```
is_atom/1, is_binary/1, is_bitstring/1, is_boolean/1, is_float/1, is_function/1, is_function/2, is_integer/1, is_list/1, is_map/1, is_number/1, is_pid/1, is_port/1, is_record/1, is_record/2, is_reference/1, is_tuple/1
```

### String

```ex
def send_email(subject, body) when is_binary(subject) and  subject !== "" and is_binary(body) and body  !== ""  do: subject
```

```ex
My.Log.send_email("123", "aa")
```
> 123

```ex
My.Log.send_email(1, "aa")
```
> `FunctionClauseError`


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