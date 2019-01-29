# Recursion

* https://www.leighhalliday.com/recursion-in-elixir
* https://elixir-lang.org/getting-started/recursion.html
* https://www.tutorialspoint.com/elixir/elixir_recursion.htm

```ex
@doc ~S"""
Put multiple products in the same section.

### Examples

  iex> Backend.Product.Category.insert_products(70, [])
  nil
  iex> Backend.Product.Category.insert_products(0, [1])
  nil
  iex> Backend.Product.Category.insert_products(95, [1, 2])
  [
    %Backend.Product{
      __meta__: #Ecto.Schema.Metadata<:loaded, "product_category">,
      category_id: 95,
      id: 121,
      product_id: 1,
    },
    %Backend.Product{
      __meta__: #Ecto.Schema.Metadata<:loaded, "product_category">,
      category_id: 95,
      id: 122,
      product_id: 2,
    }
  ]
"""
@spec insert_products(category_id :: integer(), product_ids :: List.t()) :: List.t()
def insert_products(category_id, product_ids = [product_id | tail])
  when category_id > 0 and is_list(product_ids) and length(product_ids) > 0 do

inserted = insert_product(category_id, product_id)
next_inserted = insert_products(category_id, tail)

# Exclude the last nil value.
if is_nil(next_inserted) do
  [inserted]
else
  [inserted | next_inserted]
end
end

@spec insert_products(category_id :: any(), product_ids :: any()) :: nil
def insert_products(_category_id, _product_ids), do: nil

@spec insert_product(category_id :: integer(), product_id :: integer()) :: Map.t()
def insert(category_id, product_id) when category_id > 0 and product_id > 0,
do:
  __MODULE__.changeset(%__MODULE__{}, %{category_id: category_id, product_id: product_id})
  |> Repo.insert!()

@spec insert(category_id :: any(), product_id :: any()) :: nil
def insert(_category_id, _product_id), do: nil
```