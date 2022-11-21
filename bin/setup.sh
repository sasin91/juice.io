#!/usr/bin/env bash

if [ `! command -v symfony` ]; then
  if [ `command -v curl` ]; then
      curl -sS https://get.symfony.com/cli/installer | bash
  else
      wget https://get.symfony.com/cli/installer -O - | bash
  fi
fi

symfony console doctrine:database:create
symfony console doctrine:migrations:migrate