run:
	docker-compose up

composer-install:
	docker exec -it php-apache composer install

build:
	docker exec -it frontend npm run build

dump:
	docker exec -it php-apache composer dump

deploy:
	make build
	docker exec -it php-apache php vendor/dg/ftp-deployment/deployment deployment.live.php
