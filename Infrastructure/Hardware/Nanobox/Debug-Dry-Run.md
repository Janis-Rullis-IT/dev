# Debug / [Dry-run](https://docs.nanobox.io/workflow/dry-run/)

Once you think you're ready to deploy to live servers, Nanobox let's you "dry-run" a deploy with the deploy dry-run command. This will spin up a virtualized environment on your local machine and deploy to it just as it would to live servers. If a dry-run works locally, a deploy to production servers will work.

## [Deploy](https://docs.nanobox.io/workflow/dry-run/#deploy-to-dry-run)

```shell
nanobox deploy dry-run
```

```
✓ Skipping (already running)
Preparing environment :

Compiling application :
  ✓ Starting docker container
  ✓ Preparing environment for compile
  ✓ Compiling code

Preparing environment :

elixir_phoenix (dry-run) :
  ✓ Reserving IPs

Syncing data components :
  Removing old :
    ✓ Skipping (up-to-date)
  Launching new :
    ✓ Skipping (up-to-date)

Starting components :
  Logger :
    ✓ Pulling nanobox/logvac image
    ✓ Reserve IP
    ✓ Starting docker container
    ✓ Gathering requirements
    ✓ Configuring services
  Message Bus :
    ✓ Pulling nanobox/mist image
    ✓ Reserve IP
    ✓ Starting docker container
    ✓ Gathering requirements
    ✓ Configuring services
  Router :
    ✓ Pulling nanobox/portal image
    ✓ Reserve IP
    ✓ Starting docker container
    ✓ Gathering requirements
    ✓ Configuring services
  Storage :
    ✓ Pulling nanobox/hoarder image
    ✓ Reserve IP
    ✓ Starting docker container
    ✓ Gathering requirements
    ✓ Configuring services

Deploying app :
  ✓ Starting docker container
  ✓ Uploading

Syncing code components :
  Removing old :
  Starting new :
    web.main :
      ✓ Pulling nanobox/code image
      ✓ Starting docker container
      ✓ Fetching build from warehouse
      ✓ Starting services

Finalizing deploy :
  ✓ Running before_live hooks
  ✓ Updating router
  ✓ Running after_live hooks

--------------------------------------------------------------------------------
+ Your app is running in simulated production environment
+ Access your app at >> x.x.x.x
--------------------------------------------------------------------------------

Connected to streaming logs:
ctrl + c to quit
------------------------------------------------
waiting for output...

Fri Jul 13 11:33:05 2018 web.main (app[daemon]) ::  11:33:05.789 [error] Mariaex.Protocol (#PID<0.355.0>) failed to connect: ** (Mariaex.Error) tcp connect: nxdomain
elixir_phoenix (dry-run) :
  Stopping components :
    Storage :
      ✓ Stopping docker container
    Logger :
      ✓ Stopping docker container
    Message Bus :
      ✓ Stopping docker container
    Router :
      ✓ Stopping docker container
    web.main :
      ✓ Stopping docker container
  ✓ Pausing App
```

## Connect

```shell
nanobox console dry-run web.main
```

## Test that the connection is to a dry-run (local) or a server

* Add a comment in a file.
* Deploy.
* Check if it is on dry or dev.