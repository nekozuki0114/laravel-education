.PHONY: init
init:
	docker compose build
	docker compose up -d
	docker exec -it laravel /bin/sh -c "composer install && cp -p .env.example .env && php artisan storage:link && npm i && npm run dev"

.PHONY: schemaspy
schemaspy:
	docker run -v $PWD/docs:/output --net="host" schemaspy/schemaspy:6.1.0 -t pgsql -host localhost:5432 -db postgres -u postgres -p password -connprops useSSL\\\=false -all

.PHONY: test
test:
	docker exec -it laravel bash -c "php artisan test"
