# SxBootstrap beta 1
A simple module that depends on [AssetManager](http://github.com/RWOverdijk/AssetManager),
including Twitter Bootstrap allowing you to build custom versions when you override the configuration.
Currently it supports enabling/disabling components and overriding variables.

## Installation

1. **Preparation is required.** Because twitter bootstrap is not available through composer, and composer doesn't allow recursive repositories to be added,
you'll have to add the following repository to your composer.json file:

    ```json
    {
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
        ]
    }
    ```

    _Note: This works with other versions as well. This module should be compatible with all 2.* versions._

2. Next **add the requirement to your composer.json file** by either:
    * Adding it through the command line.

        ```bash
        ./composer.phar require twitter/bootstrap
        # When asked for a version, type "dev-2.1.2-wip" or whatever version you're using.
        ```
    * Adding it manually to your composer.json file.

        ```json
        {
            "require": {
                "twitter/bootstrap": "dev-2.1.2-wip"
            }
        }
        ```

3. Now run `./composer.phar install` to install the dependencies.

4. Take a look at the wiki for examples and other information to get started.

## Todo
There's still a lot of work to be done on this module.
For now it provides basic functionality and it's already useful.

* Include other components as view helpers
* Add unit tests
