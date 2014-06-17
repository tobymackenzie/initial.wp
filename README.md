WP Initial
==========

This is a starting point for working on WordPress projects.  It is set up to use [TJMBaseTheme](https://github.com/tobymackenzie/wp-TJMBaseTheme), though it doesn't have to.  It uses [composer](http://getcomposer.org) for loading TJMBaseTheme and its dependencies, and the [WordPress git repo](https://github.com/WordPress/WordPress) for installing WordPress.

Usage
-----

Prerequisites for this are the same as for WordPress itself, except that PHP 5.3 is required because of the use of namespaces for TJMBaseTheme and the ConfigHelper.

The easiest way to start is to clone this project and then run `bin/init` from within the root.  This will run `composer` to install everything you need.  Make sure to point your server's web root to the 'web' directory

Next, you modify 'wp-config.php' with your database and other configuration.  It uses ConfigHelper to set the constants and global variables normally set directly in 'wp-config.php'.  You can delete the call to `ConfigHelper::init()` and set values as the normal 'wp-config.php' does if you prefer, making sure to set `WP_CONTENT_DIR`, `WP_CONTENT_URL`, and `WP_SITEURL` appropriately in addition to the stuff that's in WordPress's sample file.

At this point, you should be able to visit the site as with a normal WordPress install and be up and running.

Inspiration / Ideas
-------------------

- http://davidwinter.me/articles/2012/04/09/install-and-manage-wordpress-with-git/
- http://www.wpaustralia.org/wordpress-forums/topic/storing-wordpress-in-git-best-practices/
- https://github.com/markjaquith/WordPress-Skeleton
- http://roots.io/using-composer-with-wordpress/

### Things that may be of use in the future

- http://wpackagist.org/
- https://github.com/mnsami/composer-installer-plugin
- https://github.com/composer/installers
