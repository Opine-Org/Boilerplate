[![Stories in Ready](https://badge.waffle.io/opine-org/boilerplate.png?label=ready&title=Ready)](https://waffle.io/opine-org/boilerplate)
Getting Started
===============

Boilerplate for creating Opine-PHP APIs, Websites and Applications.

```sh
mkdir project
cd project
curl -L https://github.com/Opine-Org/Boilerplate/tarball/master | tar zx --strip-components=1
composer install
mongo admin -u admin -p admin < vendor/opine/build/static/database.js
bin/opine check
bin/opine build
more server/vhost.conf
```
