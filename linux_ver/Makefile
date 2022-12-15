NAME=inception

all: $(NAME)

$(NAME):
	@printf "Inception Project Started...\n"
	@mkdir -p /home/user42/ykondo/data/mariadb
	@mkdir -p /home/user42/ykondo/data/wordpress
	@sudo docker-compose -f srcs/docker-compose.yml up -d --build

clean:
	@sudo docker-compose -f srcs/docker-compose.yml down

fclean:
	@rm -rf /home/user42/ykondo/
	@docker-compose -f srcs/docker-compose.yml down --rmi all --volumes --remove-orphans

.PHONY: all clean fclean
