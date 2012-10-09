# SxBootstrap beta 1
This module is intended for usage with a default directory structure of a
[ZendSkeletonApplication](https://github.com/zendframework/ZendSkeletonApplication/) and depends on the [AssetManager module](http://github.com/RWOverdijk/AssetManager).
It includes Twitter Bootstrap and allows you to build custom versions by overriding the configuration, and supplies some useful view helpers.

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
        ./composer.phar require twitter/bootstrap rwoverdijk/sxbootstrap
        # When asked for a version, type:
        #   "dev-2.1.2-wip" for twitter/bootstrap (depending on the version you decided to use)
        #   "0.*" for rwoverdijk/sxbootstrap.
        ```
    * Adding them manually to your composer.json file and afterwards running `./composer.phar install` to install the dependencies

        ```json
        {
            "require": {
                "twitter/bootstrap": "dev-2.1.2-wip",
                "rwoverdijk/sxbootstrap": "0.*"
            }
        }
        ```

3. Enable `SxBootstrap` in your `application.config.php` file.

4. Take a look at the [wiki](https://github.com/RWOverdijk/SxBootstrap/wiki) for examples and other information to get started.

## Usage
I'm not going into detail here, as you can find all of the information in the wiki. But to test if
things are working you can simply call the view helper in your layout (before outputting headscript!):

```php

<?php $this->bootstrap(); ?>

```

## Todo
There's still a lot of work to be done on this module.
For now it provides basic functionality and it's already useful.

* Include other components as view helpers
* Add unit tests
