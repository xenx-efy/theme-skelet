# Timber Theme + Bedrock

## Requirements

- [docker](https://docs.docker.com/get-docker/)
- [docker-compose](https://docs.docker.com/compose/install/)
- [lando](https://docs.lando.dev/basics/installation.html)

## Installation

1. run `cp .env.example .env`
2. run `lando start`
3. (optional) hostname from terminal to `/etc/hosts` file, for example `127.0.0.1 somehost.lndo.site`
4. run `lando composer install`

>if you want to change application name and its domain change in `.lando.yml` file name parameter

## Node configuration

If you need the node in project, you can use `lando node`, `lando npm`, `lando npx`.

For other questions please refer to lando documentation.

### Sources
- [timber theme](https://timber.github.io/docs/)
- [bedrock](https://roots.io/bedrock/)