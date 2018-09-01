# Access local machine's dockerized websites from a host VM

* Start your docker containers, so they would be available.
* Start the VM.

## Collect the local machine's IP

```shell
ifconfig
```

We are interested in the default Ethernet adapter. If attached to a router, will most probably have the IP starting with 192.168. Notice the name of the adapter (**N**) and IP (**I**).

## In VM 'Device/Network/' set

* Attached to - Bridged Adapter.
* Name - Select the local machine's default adapter's name (**N**).

## Set the IP to the dockerized websites

```
192.168.1.111 elixir.local api.elixir.local
```

> Where 192.168.1.111 is the IP of the local machine (**I**).