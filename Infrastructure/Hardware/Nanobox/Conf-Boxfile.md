# Conf box-file

* [boxfile/web (docs.nanobox.io)](https://docs.nanobox.io/boxfile/web/)
* [box-file (docs.nanobox.io)](https://docs.nanobox.io/boxfile/)
* [run-config (docs.nanobox.io)](https://docs.nanobox.io/boxfile/run-config/)
* [Deploy config (docs.nanobox.io)](https://docs.nanobox.io/boxfile/deploy-config/)

```yml
web.site:
  # Start Command
  start: start-command

  # Stop Config
  stop: stop-command
  stop_force: false
  stop_timeout: 60  

  # Current Working Directory
  cwd: directory

  # Routing
  routes:
    - 'sub:/path/'
    - '/admin/'

  # Port Mapping
  ports:
    - tcp:21:3420
    - udp:53:3000

  # Network Storage
  network_dirs:
    data.files:
      - path/to/directoryA
      - path/to/directoryB
    data.unfs:
      - path/to/directoryC

  # Writable Dirs
  writable_dirs:
    - path/to/dirA
    - path/to/dirB

  # Custom Logs
  log_watch:
    app[error]: /app/path/to/error.log

  # Cron
  cron:
    - id: flush_cache
      schedule: '0 0 * * *'
      command: rm -rf app/cache/*
    - id: echo_msg
      schedule: '*/3 */2 1-3 2,6,7 2'
      command: echo i\'m a little teapot

  # Only provision component locally
  local_only: true
```

## [Writable dirs](https://docs.nanobox.io/app-config/writable-dirs/#configuring-writable-directories)

```yml
web.main:
  start: mix phx.server
  # Timex and TZData need to write into its priv/ folder
  writable_dirs:
    - priv
    - _build

web.main:
  start: node-start mix phx.server
  # Timex and TZData need to write into its priv/ folder
  writable_dirs:
    - priv
    - _build
```

## Extra packages

```yml
run.config:
  # elixir runtime
  engine: elixir

  extra_packages:
    - git
```