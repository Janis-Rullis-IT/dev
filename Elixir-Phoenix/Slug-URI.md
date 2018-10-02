# Slug / URI

* https://hashrocket.com/blog/posts/titled-url-slugs-in-phoenix
* https://elixircasts.io/seo-friendly-urls-with-phoenix
* https://medium.com/wemake-services/creating-slugs-for-ecto-schemas-7349513410f0
* https://github.com/h4cc/slugger?files=1

## Find by slug

* https://stackoverflow.com/questions/34570612/change-url-to-accept-a-string-instead-id-in-phoenix-framework-elixir
* https://fullstackstanley.com/read/handling-slug-urls-in-ember-and-phoenix

## Conversion example

* z e ā Č Ф А - Б В Г	Д š \ / * ^ % ! + ) |

## Currently the best match - [slugger](https://github.com/h4cc/slugger)

* z-e-a-C-F-A-B-V-G-D-s-or"

```ex
def getUriFromString(nil), do: nil
def getUriFromString(string) do
	Slugger.slugify(string)	
end
```

## A simple one

* z-e-a-c-f-a---b-v-g-d-s'

```ex
def getUriFromString(nil), do: nil
def getUriFromString(string) do
	string
	|> String.normalize(:nfd)
    |> String.downcase()
    |> String.replace(~r/[^a-z-\s]/u, "")
    |> String.replace(~r/\s/, "-")
end
```