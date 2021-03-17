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

## Xdebug

- `lando xdebug <mode>` - load [Xdebug](https://xdebug.org/) in the selected, run it for enable xdebugger;
[mode(s)](https://xdebug.org/docs/all_settings#mode)
- In mapping configuration you should set servername and hostname as `appserver`, port `80` 
and set mapping on web directory as `/app/web`;
- For debugger listener set `9003` port.

> if debugger don't work, try to install and use [`Xdebug helper`](https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc)
 extension for your browser.
>
> Or make sure it is not blocked by the firewall.

**Source [link](https://github.com/lando/lando/issues/1668#issuecomment-772829423) on setup**

### Sources
- [timber theme](https://timber.github.io/docs/)
- [bedrock](https://roots.io/bedrock/)


