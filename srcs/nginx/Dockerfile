# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tlemesle <tlemesle@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/07/12 20:32:59 by tlemesle          #+#    #+#              #
#    Updated: 2021/07/12 21:15:37 by tlemesle         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

RUN	apt-get update 
RUN apt-get install -y \
		nginx \
        openssl
    
# Change default config files
RUN rm /etc/nginx/nginx.conf
COPY ./nginx.conf /etc/nginx/nginx.conf

# Manage rights to the directory
RUN  chmod 755 /var/www

#Create a directory for ssl
RUN mkdir /etc/nginx/ssl

# SSL Certificate Setting
RUN openssl req -x509 -nodes -days 365 -subj "/CN=tlemesle" -newkey rsa:2048 -keyout /etc/ssl/nginx-mykey.key -out /etc/ssl/nginx-mycert.crt;

CMD ["nginx", "-g", "daemon off;"]
