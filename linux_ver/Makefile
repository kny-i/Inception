NAME=inception

all: $(NAME)

$(NAME):
	@printf "Inception Project Started...\n"
	@mkdir -p ~/ykondo/data/mariadb
	@mkdir -p ~/ykondo/data/wordpress
	@sudo docker-compose -f srcs/docker-compose.yml up -d --build

clean:
	@sudo docker-compose -f srcs/docker-compose.yml down

fclean:
	@rm -rf ~/ykondo/
	@docker-compose -f srcs/docker-compose.yml down --rmi all --volumes --remove-orphans

.PHONY: all clean fclean
