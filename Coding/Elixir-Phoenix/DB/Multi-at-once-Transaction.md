# Multi-at-once-Transaction

* https://github.com/dwyl/learn-phoenix-framework/blob/master/ecto-multi.md
* https://medium.com/heresy-dev/a-brief-guide-to-ecto-multi-9c8ea0c729f0

## Multi - more readable Repo.transaction

Ecto.Multi is a data structure for grouping multiple Repo operations. It allows you to run operations together that should be performed in a single database transaction. You can see the result of each operation, before it goes through.

```ex
def create_relationship_and_rooms(relationship_changeset) do
  Multi.new
  |> Multi.insert(:relationship, relationship_changeset)
  |> Multi.run(:room, fn %{relationship: relationship} ->
    room_changeset = %Room{
      user_id: relationship.user_id,
      friend_id: relationship.friend_id,
      name: "room:" <> to_string(relationship.user_id) <> " and " to_string(relationship.friend_id)
    }
    Repo.insert(room_changeset)
  end
end
```

VS

```ex
relationship_changeset = Relationship.changeset(%Relationship{}, relationship_params)
multi = OtherFile.create_relationship_and_rooms(relationship_changeset)

case Repo.transaction(multi) do
  {:ok, room} ->
    conn
    |> put_flash(:info, "Yay! Start chatting to your new friend!")
    |> redirect(to: room_path(conn, :show, room))
  {:error, :relationship, changeset, _} ->
    conn
    |> put_flash(:error, "Couldn't connect as friends :(. Try again later")
    |> render("new.html", changeset: changeset)
  {:error, :room, changeset, _} ->
    conn
    |> put_flash(:error, "Couldn't connect as friends :(. Try again later")
    |> render("new.html", changeset: changeset)
end
```