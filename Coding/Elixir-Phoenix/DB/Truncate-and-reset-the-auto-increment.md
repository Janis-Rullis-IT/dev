# Truncate and reset the auto-increment


```ex
def truncate(), do: "TRUNCATE test_posts RESTART IDENTITY;" |> IncrementalSlug.TestRepo.query()
```