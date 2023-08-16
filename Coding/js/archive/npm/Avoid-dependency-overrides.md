# [Avoid-dependency-overrides.md](https://docs.npmjs.com/cli/v8/configuring-npm/package-json#overrides)

Not 100& sure if that's correct but there might be a case when bootstrap which version is locked to v.3.7.1 in packages.json, get's upgraded to v.3.4.1 through dependecies that have different version conditions for the bootstrap.
So `overrides` might help.
