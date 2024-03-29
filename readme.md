
# Kilvin CMS

## IMPORTANT

Slowy in the process of updating this code to the most current version of PHP and Laravel, so expect things to be broken.

## About Kilvin

Kilvin CMS is a content management system built on top of the [Laravel framework](https://laravel.com). The project is currently in a development state and is not ready for use in production. We do not suggest using this for live websites at this time since major architectural changes are still possible, which could break existing functionality.

The CMS is built as a composer package and that code can be found at the [Kilvin-CMS Repo](https://github.com/artificery/kilvin-cms).  Documentation is in progress and can be found in the [Kilvin Docs Repo](https://github.com/artificery/kilvin-docs). The documentation is also viewable within the main control panel for your site, ex: https://mysite.com/admin/docs

## Installing Kilvin CMS

### Server Requirements
 - PHP 8.1 or later with safe mode disabled
 - MySQL 5.5.0 or later, with the InnoDB storage engine installed. MariaDB works too.
 - A web server (Apache, Nginx)
 - OpenSSL PHP Extension
 - PDO PHP Extension
 - Mbstring PHP Extension
 - Tokenizer PHP Extension

### Installation

 - Insure you have a server meeting the above requirements. [Laravel Homestead](https://laravel.com/docs/5.7/homestead) is a superb development environment for Kilvin CMS.
 - Clone [this GitHub repo](https://github.com/artificery/kilvin) onto your server.
 - In your terminal, run the following [Composer](https://getcomposer.org) command in the cloned directory above to install Kilvin's dependencies: `composer create-project --prefer-dist`.
 - Permissions. Insure that the following files and directories are writeable on your server. Homestead is set up to allow this automatically:
   - .env
   - ./storage
   - ./templates
 - Configure your webserver to make the `./public` directory your web root.
 - Create a database for your new site in MySQL/MariaDB.
 - Direct your browser to the /installer URL on your new site and run the installer. Example: https://mysite.com/installer
 - Go through the installer steps to install the CMS.
 - That's it! After completion, the installer will direct you to your Kilvin CMS control panel for the site.

## Kilvin CMS Sponsors

We would like to extend our thanks to the following sponsors for helping fund Kilvin CMS development. If you are interested in becoming a sponsor, please visit the Kilvin CMS [Patreon page](http://patreon.com/reedmaniac):

- **[Paul Burdick](https://paulburdick.me)** - Coder. Geek. Outdoorsman. Lover of Knowledge. Pursuer of Fun.

## Security Vulnerabilities

If you discover a security vulnerability within Kilvin CMS, please send an e-mail to Paul Burdick at paul@reedmaniac.com. All security vulnerabilities will be promptly addressed.

## License

The Kilvin CMS is currently not open source. Once it reaches a more stable state, this will be addressed.  We're thinking an MIT license.


<p align="center"><img src="https://kilvincms.com/images/kilvin-icon-small.png"></p>



