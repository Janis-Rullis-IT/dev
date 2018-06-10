# Data conversion

## JSON

* [Poison (github.com/devinus)](https://github.com/devinus/poison#usage)

```ex
data = %{"age" => 27, "name" => "Devin Torres"}
json = Poison.encode!(data)
{:ok, json} = Poison.encode(data)
```