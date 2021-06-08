#!/bin/bash

sudo userdel www-data
sudo useradd -u 82 www-data

sudo mkdir -p /data/html
sudo chown -R www-data:www-data /data/html