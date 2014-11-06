Getting Started
===============

Boilerplate for creating Opine-PHP APIs, Websites and Applications.

# Create a new folder
mkdir myproject

# Grep Opine-PHP boilerplate project
curl -L https://github.com/Opine-Org/Boilerplate/tarball/master | tar zx --strip-components=1

# Add dependencies
composer install

# Create a database for the project
mongo admin -u admin -p admin < vendor/opine/build/static/database.js

# Check dependencies
bin/opine check

# Build project
bin/opine build

# Configure Your Webserver
more vhost.conf

# Done
