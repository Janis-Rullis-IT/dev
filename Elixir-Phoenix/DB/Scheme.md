# [Scheme types](https://hexdocs.pm/ecto/Ecto.Schema.html#module-primitive-types)

* `:id` - integer	`1, 2, 3`
* `:binary_id` - binary	`<<int, int, int, ...>>`
* `:integer` - integer	`1, 2, 3`
* `:float` - float	`1.0, 2.0, 3.0`
* `:boolean` - boolean	`true, false`
* `:string` -	UTF-8 encoded string	`“hello”`
* `:binary` - binary	`<<int, int, int, ...>>`
* `{:array, inner_type}` - list  `[value, value, value, ...]`
* `:map` - map
* `{:map, inner_type}` - map
* `:decimal` - Decimal

## Calendar types (since Ecto 2.1)

> Timestamps are typically represented by :naive_datetime or :utc_datetime

* `:utc_datetime` - DateTime `2018-07-09 20:31:11`
* `:date` - Date
* `:time` - Time
* `:naive_datetime` - NaiveDateTime

## Primary keys

By default, a schema will automatically generate a primary key which is named id and of type :integer.

### id / default

```ex
@primary_key {:id, :id, autogenerate: true}
schema "examples" do
    field :id, :integer
    field :message, :string
end
```

### [example_id](https://medium.com/developers-writing/alternate-integer-primary-keys-with-ecto-783ddb19cfba)

```ex
@primary_key {:example_id, :id, autogenerate: true}
schema "examples" do
    field :example_id, :integer
    field :message, :string
end
```

### [UUID](https://shulhi.com/polymorphic-assocation-in-ecto-part-i/)

For example, if your database does not support autoincrementing primary keys and requires something like UUID or a RecordID, you can configure and use:binary_id as your primary key type as follows:

```ex
@primary_key {:id, :binary_id, autogenerate: true}
@foreign_key_type :binary_id
schema "abstract table: users" do  
  field :user_id, :binary_id
  field :email, :string
  field :password, :string
  field :is_active, :boolean, default: false
  field :last_login, :utc_datetime

  timestamps()
end  
```

### [NONE](https://hexdocs.pm/ecto/Ecto.Schema.html#many_to_many/3-join-schema-example)

```ex
  @primary_key false
  schema "users_organizations" do
    belongs_to :user, User
    belongs_to :organization, Organization
    timestamps # Added bonus, a join schema will also allow you to set timestamps
  end
```

### Auto-increment

#### Enabled

```ex
@primary_key {:id, :id, autogenerate: true}
```

#### Disabled

```ex
@primary_key {:id, :id, autogenerate: false}
```

## Custom types

Besides providing primitive types, Ecto allows custom types to be implemented by developers, allowing Ecto behaviour to be extended. A custom type is a module that implements the Ecto.Type behaviour. By default, Ecto provides the following custom types:

* `Ecto.UUID` - `:uuid` `uuid-string`