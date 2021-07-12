# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tlemesle <tlemesle@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/07/12 21:15:54 by tlemesle          #+#    #+#              #
#    Updated: 2021/07/12 21:28:51 by tlemesle         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

# Basics
RUN		apt-get update \
		&& apt-get install -y\
		wget \
		mariadb-server \
		gettext-base \
		mariadb-client \
		bash \
		vim

# change bind-address to 0.0.0.0 for listening on all ip
RUN rm /etc/mysql/my.cnf && echo "[mysqld]\ngeneral_log=1\nuser=root\nport=3306\nbind=0.0.0.0\nskip-networking=false" > /etc/mysql/my.cnf

COPY ./init_mysql.sh .

RUN chmod 755 ./init_mysql.sh

RUN chown -R mysql:mysql /var/lib/mysql

EXPOSE	3306

ENTRYPOINT ["./init_mysql.sh"]