CONTAINERS	= $(shell docker ps -qa)
IMAGES		= $(shell docker images -qa)
VOLUMES		= $(shell docker volume ls -q)
NETWORKS	= $(shell docker network ls -q)

up				: volume_dir
				@ docker compose -f srcs/docker-compose.yml up --build

down			:
				@ docker compose -f srcs/docker-compose.yml down

hostname		:
				@ echo "127.0.0.1 sakkus.42.fr" >> /etc/hosts

volume_dir		:
				@ mkdir -p /home/biekinci/data/wordpress
				@ mkdir -p /home/biekinci/data/mariadb

rm_containers	: down
				@ docker rm -f $(CONTAINERS); true;

rm_images		:
				@ docker rmi -f $(IMAGES); true;

rm_volumes		:
				@ docker volume rm $(VOLUMES); true;

rm_networks		:
				@ docker network rm $(NETWORKS) 2> /dev/null; true;

rm_volume_dir	:
				@ rm -rf /home/biekinci/data

clean			: rm_containers rm_images rm_networks rm_volumes rm_volume_dir
