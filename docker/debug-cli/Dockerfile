FROM 1and1internet/php-build-environment:8.0
MAINTAINER Jessica Smith <jess@mintopia.net>

USER root

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
      php-xdebug \
    && apt-get autoremove --purge -y \
    && rm -rf /var/lib/apt/lists/*

USER 1000