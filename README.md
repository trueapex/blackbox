# Install PHP5.3, MySQL, and Apache in Ubuntu Precise64

## Prerequisites
* Virtualbox + Extension Pack
* Vagrant

## What's Installed
* Ubuntu Precise64
* Apache 2.2
* PHP 5.3
* MySQL 5.5

```sh
$ locale
LANG=en_US.UTF-8
LANGUAGE=
LC_CTYPE="C.UTF-8"
LC_NUMERIC="C.UTF-8"
LC_TIME="C.UTF-8"
LC_COLLATE="C.UTF-8"
LC_MONETARY="C.UTF-8"
LC_MESSAGES="C.UTF-8"
LC_PAPER="C.UTF-8"
LC_NAME="C.UTF-8"
LC_ADDRESS="C.UTF-8"
LC_TELEPHONE="C.UTF-8"
LC_MEASUREMENT="C.UTF-8"
LC_IDENTIFICATION="C.UTF-8"
LC_ALL=C.UTF-8

$ sudo vim /etc/default/locale

$ locale
LANG=en_US.UTF-8
LANGUAGE="en_US.UTF-8"
LC_CTYPE="en_US.UTF-8"
LC_NUMERIC="en_US.UTF-8"
LC_TIME="en_US.UTF-8"
LC_COLLATE="en_US.UTF-8"
LC_MONETARY="en_US.UTF-8"
LC_MESSAGES="en_US.UTF-8"
LC_PAPER="en_US.UTF-8"
LC_NAME="en_US.UTF-8"
LC_ADDRESS="en_US.UTF-8"
LC_TELEPHONE="en_US.UTF-8"
LC_MEASUREMENT="en_US.UTF-8"
LC_IDENTIFICATION="en_US.UTF-8"
LC_ALL="en_US.UTF-8"

$ sudo apt-get update

$ sudo apt-get install apache2
$ apache2 -v

$ sudo apt-get install mysql-server
$ sudo mysql_install_db
$ sudo mysql_secure_installation
$ mysql --version

$ sudo apt-get install php5
$ php --version

$ sudo apt-get install php5 php5-mysql

$ sudo a2enmod rewrite

$ sudo service apache2 restart
```

## Installation
#### Install Virtualbox including its extension pack and Vagrant.
#### Configure server settings in config.yml file.
#### Turn on the vagrant box through $ vagrant up
```sh
$ vagrant up
```
#### Access the initial site through http://[ip-adddress].

Reference:
https://app.vagrantup.com/hashicorp/boxes/precise64
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-14-04
