[![Stories in Ready](https://badge.waffle.io/opine-org/boilerplate.png?label=ready&title=Ready)](https://waffle.io/opine-org/boilerplate)
Getting Started
===============

Boilerplate for creating Opine-PHP projects.

__With Vagrant__

1. Install VirtualBox
2. Install Vagrant
3. From the terminal:
  1. mkdir project
  2. wget https://raw.githubusercontent.com/Opine-Org/Boilerplate/master/server/Vagrantfile
  3. wget https://raw.githubusercontent.com/Opine-Org/Boilerplate/master/server/provision.sh
  3. vagrant up
4. Add opine-project.dev to your local hosts file
5. visit http://opine-project.dev:8080 in you browser

__Without Vagrant__

From terminal:

```sh
mkdir project
cd project
curl -L https://github.com/Opine-Org/Boilerplate/tarball/master | tar zx --strip-components=1
composer install
mongo admin -u admin -p admin < vendor/opine/build/static/database.js
OPINE_ENV=default && export OPINE_ENV
bin/opine check
bin/opine build
more server/local.vhost.conf
```
