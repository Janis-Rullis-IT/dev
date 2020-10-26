# Upsert

* https://hexdocs.pm/ecto/Ecto.Repo.html#c:insert/2-upserts
* https://stackoverflow.com/a/42151323
* http://blog.plataformatec.com.br/2016/12/many-to-many-and-upserts/

```ex
{:ok, ignored} = MyRepo.insert(%Post{title: "this is unique"}, on_conflict: :nothing)
assert ignored.id == nil
```

```ex
# In Postgres (it requires the conflict target for updates):
on_conflict = [set: [body: "updated"]]
{:ok, updated} = MyRepo.insert(%Post{title: "this is unique"},
                               on_conflict: on_conflict, conflict_target: :title)

# In MySQL (conflict target is not supported):
on_conflict = [set: [title: "updated"]]
{:ok, updated} = MyRepo.insert(%Post{id: inserted.id, title: "updated"}, on_conflict: on_conflict)
```