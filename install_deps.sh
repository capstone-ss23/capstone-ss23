#!/bin/bash

set -e # exit with error if any of this fails

# run composer
composer --prefer-install=source install
composer update
composer run cl-installer
