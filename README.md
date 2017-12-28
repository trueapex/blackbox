# Drupal 7 Development Environment

## Prerequisites
* Virtualbox + Extension Pack
* Vagrant

## What's Installed
* Ubuntu Trusty64
* Apache 2.4.7
* PHP 5.6.30
* MySQL 5.5.54
* XDebug 2.5.1
* PHPmyAdmin
* Drush
* Composer
* Ruby (through rvm)

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
Server version: Apache/2.4.7 (Ubuntu)
Server built:   Jul 15 2016 15:34:04

$ sudo apt-get install mysql-server
$ sudo mysql_install_db
$ sudo mysql_secure_installation
$ mysql --version
mysql  Ver 14.14 Distrib 5.5.54, for debian-linux-gnu (x86_64) using readline 6.3

$ sudo add-apt-repository ppa:ondrej/php
$ sudo apt-get install php5.6
$ php --version
PHP 5.6.30-9+deb.sury.org~trusty+1 (cli) 
Copyright (c) 1997-2016 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies
    with Zend OPcache v7.0.6-dev, Copyright (c) 1999-2016, by Zend Technologies

$ sudo apt-get install libapache2-mod-php5.6 php5.6-mysql php5.6-mcrypt php5.6-mbstring php5.6-xml php5.6-curl php5.6-zip php5.6-gd

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
