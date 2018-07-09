# Generate a controller

* [Mix Tasks (hexdocs.pm/phoenix)](https://hexdocs.pm/phoenix/phoenix_mix_tasks.html)

```shell
 mix phx.gen.json Shop Product products title:string content:string
```

## mix help phx.gen.json

```
mix phx.gen.json

Generates controller, views, and context for an JSON resource.

    mix phx.gen.json Accounts User users name:string age:integer

The first argument is the context module followed by the schema module and its
plural name (used as the schema table name).

The context is an Elixir module that serves as an API boundary for the given
resource. A context often holds many related resources. Therefore, if the
context already exists, it will be augmented with functions for the given
resource. Note a resource may also be split over distinct contexts (such as
Accounts.User and Payments.User).

The schema is responsible for mapping the database fields into an Elixir
struct.

Overall, this generator will add the following files to lib/:

  • a context module in lib/app/accounts/accounts.ex for the accounts API
  • a schema in lib/app/accounts/user.ex, with an users table
  • a view in lib/app_web/views/user_view.ex
  • a controller in lib/app_web/controllers/user_controller.ex

A migration file for the repository and test files for the context and
controller features will also be generated.

The location of the web files (controllers, views, templates, etc) in an
umbrella application will vary based on the :context_app config located in your
applications :generators configuration. When set, the Phoenix generators will
generate web files directly in your lib and test folders since the application
is assumed to be isolated to web specific functionality. If :context_app is not
set, the generators will place web related lib and test files in a web/
directory since the application is assumed to be handling both web and domain
specific functionality. Example configuration:

    config :my_app_web, :generators, context_app: :my_app

Alternatively, the --context-app option may be supplied to the generator:

    mix phx.gen.html Sales User users --context-app warehouse

## Web namespace

By default, the controller and view will be namespaced by the schema name. You
can customize the web module namespace by passing the --web flag with a module
name, for example:

    mix phx.gen.html Sales User users --web Sales

Which would geneate a lib/app_web/controllers/sales/user_controller.ex and
lib/app_web/views/sales/user_view.ex.

## Generating without a schema or context file

In some cases, you may wish to bootstrap JSON views, controllers, and
controller tests, but leave internal implementation of the context or schema to
yourself. You can use the --no-context and --no-schema flags for file
generation control.

## table

By default, the table name for the migration and schema will be the plural name
provided for the resource. To customize this value, a --table option may be
provided. For example:

    mix phx.gen.json Accounts User users --table cms_users

## binary_id

Generated migration can use binary_id for schema's primary key and its
references with option --binary-id.

## Default options

This generator uses default options provided in the :generators configuration
of your application. These are the defaults:

    config :your_app, :generators,
      migration: true,
      binary_id: false,
      sample_binary_id: "11111111-1111-1111-1111-111111111111"

You can override those options per invocation by providing corresponding
switches, e.g. --no-binary-id to use normal ids despite the default
configuration or --migration to force generation of the migration.

Read the documentation for phx.gen.schema for more information on attributes.

Location: _build/dev/lib/phoenix/ebin
```