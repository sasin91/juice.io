# OS Setup

https://devenv.sh/getting-started

https://symfony.com/doc/current/setup/docker.html

## Native

### *Buntu derived OS

### Setup

``` shell
# Install & setup DB
sudo apt install postgresql postgresql-contrib
sudo -i -u postgres
createuser --interactive
exit

# Setup PHP
sudo apt install php-cli php-json php-zip php-xml php-curl php-ctype php-iconv php-mbstring php-pgsql
# PHP package manager
sudo apt install composer

composer install
# Install symfony cli & configure project
bash ./bin/setup.sh

# The nodejs version in ubuntu repos tend to be outdated, we'll outsource to nodesource.
curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash - &&\
sudo apt-get install -y nodejs

npm install

echo "You're ready to run the project."
echo "execute the following commands in separate terminal tabs or windows"
# Compile JS & continously watch it for changes
echo "npm run watch"
# Launch symfony 
echo "symfony server:start"
# Open your pref. browser
echo "xdg-open http://localhost:8000"
```
