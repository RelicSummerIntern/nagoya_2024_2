up:
	docker compose up -d
	docker compose exec laravel.test npm run dev

stop:
	docker compose stop

exec:
	docker compose exec laravel.test /bin/bash

clear-cache:
	docker compose exec laravel.test php artisan cache:clear
	docker compose exec laravel.test php artisan config:clear
	docker compose exec laravel.test php artisan route:clear
	docker compose exec laravel.test php artisan view:clear
	docker compose exec laravel.test php artisan clear-compiled

mysql:
	docker compose exec mysql mysql -u sail -p'password' example_app

migrate:
	docker compose exec laravel.test php artisan migrate:fresh
