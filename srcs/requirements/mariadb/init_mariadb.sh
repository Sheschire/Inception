#!/bin/bash

sudo userdel mysql                      #delete mysql user on mariadb 
sudo useradd -u999 mysql                #create new mysql user with 999 on ubuntu host machine

sudo mkdir -p /data/mysql               #create directory
sudo chown -R mysql:mysql /data/mysql   #set the owner of the directory
