#!/usr/bin/env bash

if ! command -v symfony &> /dev/null
then
  if command -v curl &> /dev/null
   then
      curl -sS https://get.symfony.com/cli/installer | bash
  else
      wget https://get.symfony.com/cli/installer -O - | bash
  fi

  read -r -p "Install symfony cli globally? [y/n] " GLOBAL_INSTALL

  if [[ "$GLOBAL_INSTALL" =~ ^([yY][eE][sS])$ ]]; then
      sudo mv $HOME/.symfony5/bin/symfony /usr/local/bin/symfony
  else
      APPEND_TO_PATH='PATH="$HOME/.symfony5/bin:$PATH"'
      #export PATH="$HOME/.symfony5/bin:$PATH"
      #echo $APPEND_TO_PATH >> $HOME/.profile
      echo $APPEND_TO_PATH | tee -a $HOME/.profile
      source $HOME/.profile
  fi
fi

symfony console doctrine:database:create
symfony console doctrine:migrations:migrate
