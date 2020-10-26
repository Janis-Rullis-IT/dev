# File operations

* [Working With the File System in Elixir (code.tutsplus.com)](https://code.tutsplus.com/tutorials/working-with-file-system-in-elixir--cms-28869)
* [File (hexdocs.pm)](https://hexdocs.pm/elixir/File.html)

## Write

```ex
write_status = File.write("PATH", data, [:binary])
```

## Append

```ex
File.write("PATH", data, [:append])
```