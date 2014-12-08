[![Stories in Ready](https://badge.waffle.io/opine-org/boilerplate.png?label=ready&title=Ready)](https://waffle.io/opine-org/boilerplate)
Getting Started
===============

Boilerplate for creating Opine-PHP projects.

__With Vagrant__

1. Install VirtualBox
2. Install Vagrant
3. Run the following commands from your terminal: ```wget vagrant file```
4. Then, in termal also run: ```vagrant up```
4. Add opine-project.dev to your local hosts file
5. visit http://opine-project.dev:8080 in you browser

__Without Vagrant__

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
