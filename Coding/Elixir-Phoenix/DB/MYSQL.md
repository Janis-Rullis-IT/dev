# MYSQL

* [Ecto.Adapters.MySQL (hexdocs.pm/ecto)](https://hexdocs.pm/ecto/Ecto.Adapters.MySQL.html)

## [Storage options](https://hexdocs.pm/ecto/Ecto.Adapters.MySQL.html#module-storage-options)

* `:charset` - the database encoding (default: “utf8”)
* `:collation` - the collation order
* `:dump_path` - where to place dumped structures

## [After connect callback](https://hexdocs.pm/ecto/Ecto.Adapters.MySQL.html#module-after-connect-callback)

### Could be useful to set some connection VARIABLES

If you want to execute a callback as soon as connection is established to the database, you can use the :after_connect configuration. For example, in your repository configuration you can add:

```ex
after_connect: {Mariaex, :query!, [“SET variable = value”, []]}
```

You can also specify your own module that will receive the Mariaex connection as argument.

## [Limitations](https://hexdocs.pm/ecto/Ecto.Adapters.MySQL.html#module-limitations)

* MySQL does not support UUID types. Ecto emulates them by using binary(16).
* Because MySQL does not support RETURNING clauses in INSERT and UPDATE, it does not support the :read_after_writes option of Ecto.Schema.field/3.
* MySQL does not support migrations inside transactions as it automatically commits after some commands like CREATE TABLE. Therefore MySQL migrations does not run inside transactions.
* Old MySQL versions did not support usec in datetime while more recent versions would round or truncate the usec value.
* (MyISAM) does not support transactions. Tables created by Ecto are guaranteed to use InnoDB, regardless of the MySQL version.