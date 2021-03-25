# Timber Theme + Bedrock

## Requirements

- [docker](https://docs.docker.com/get-docker/)
- [docker-compose](https://docs.docker.com/compose/install/)
- [lando](https://docs.lando.dev/basics/installation.html)

## Installation

> If you want run site on specific domain change in `.lando.yml` file `name` parameter, then create `name.lndo.site` domain.
>
>If you want create more specific domain add proxy parameter and specify service which you want to map on this domain,
>and don't forget specify it in `/etc/hosts` file and change `WP_HOME` in .env file. [more info here](https://docs.lando.dev/config/proxy.html).
1. run `lando start`
2. (optional) hostname from terminal to `/etc/hosts` file, for example `127.0.0.1 somehost.lndo.site`

## Node configuration

If you need the node in project, you can use `lando node`, `lando npm`, `lando npx`.

For other questions please refer to lando documentation.

## Xdebug

- `lando xdebug <mode>` - load [Xdebug](https://xdebug.org/) in the selected, run it for enable xdebug
[mode(s)](https://xdebug.org/docs/all_settings#mode);
- In mapping configuration you should set servername and hostname as `appserver`, port `80` 
and set mapping on `web` directory as `/app/web`;
- For debugger listener set `9003` port.

> If debugger doesn't work, try to install and use [Xdebug helper](https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc)
 extension for your browser.
>
> Or make sure it is not blocked by the firewall.

**Source [link](https://github.com/lando/lando/issues/1668#issuecomment-772829423) on setup**

### Sources
- [timber theme](https://timber.github.io/docs/)
- [bedrock](https://roots.io/bedrock/)


