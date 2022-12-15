NAME=inception

all: $(NAME)

$(NAME):
	@printf "Inception Project Started...\n"
	@mkdir -p ~/ykondo/data/mariadb
	@mkdir -p ~/ykondo/data/wordpress
	@docker-compose -f srcs/docker-compose.yml up -d --build

clean:
	@docker-compose -f srcs/docker-compose.yml down

fclean:
	@rm -rf ~/ykondo/
	@docker-compose -f srcs/docker-compose.yml down --rmi all --volumes --remove-orphans

.PHONY: all clean fclean
