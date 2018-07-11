# Migrations

## Set id as INT (and not BIGNIT)

## Drop a table

```ex
drop_if_exists table("posts")
```

## Drop a column

```ex
alter table("posts") do
  remove :title
end
```	

## Drop an index

```ex
drop_if_exists index("posts", [:name])
```