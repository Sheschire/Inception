# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tlemesle <tlemesle@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/07/12 20:19:55 by tlemesle          #+#    #+#              #
#    Updated: 2021/07/12 20:20:26 by tlemesle         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

build:
	 cd srcs && docker-compose build && cd ..

up:
	cd srcs && docker-compose up -d && cd ..

stop:
	cd srcs && docker-compose stop && cd ..

prune:
	cd srcs && docker system prune && cd ..