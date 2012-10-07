# SxBootstrap 0.0.2
A simple module that depends on [AssetManager](http://github.com/RWOverdijk/AssetManager),
including Twitter Bootstrap allowing you to build custom versions when you override the configuration.
Currently it supports enabling/disabling components and overriding variables.

## Installation

1. Preparation is required. Because twitter bootstrap is not in composer,
you'll have to add the repository to your composer.json file:
```json
    "repositories": [
        {
            "type": "package",
            "package": {
                "version": "dev-2.1.2-wip",
                "name": "twitter/bootstrap",
                "source": {
                    "url": "https://github.com/twitter/bootstrap.git",
                    "type": "git",
                    "reference": "2.1.2-wip"
                }
            }
        }
    ],
```

## Todo
There's still a lot of work to be done on this module.
For now it provides basic functionality and it's already useful.

* Include other components as view helpers
* Move less import management support to separate module
* Add unit tests
* Add including/excluding of jquery plugins
