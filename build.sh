#!/usr/bin/env bash

dir=${PWD##*/}
tag=$(git describe --exact-match --tags 2> /dev/null || git rev-parse --short HEAD)

rm -rf crowdhandler-wordpress-*.zip && \
composer install --no-dev --no-interaction && \
composer dump-autoload --optimize --classmap-authoritative --no-dev --no-interaction
cd .. && \
zip -q -0 -r crowdhandler-wordpress-${tag}.zip ${dir} && \
cd ${dir} && \
mv ../crowdhandler-wordpress-${tag}.zip . && \
rm -rf vendor/composer && \
composer install --no-interaction
