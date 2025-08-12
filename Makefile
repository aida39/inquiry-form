up:
	docker-compose up -d
build:
	docker compose build --no-cache --force-rm
laravel-install:
	docker compose exec php composer create-project --prefer-dist laravel/laravel .
create-project:
	mkdir -p src
	@make build
	@make up
	@make laravel-install
	docker compose exec php php artisan key:generate
	docker compose exec php php artisan storage:link
	docker compose exec php chmod -R 777 storage bootstrap/cache
	@make fresh
install-recommend-packages:
	docker compose exec php composer require doctrine/dbal
	docker compose exec php composer require --dev ucan-lab/laravel-dacapo
	docker compose exec php composer require --dev barryvdh/laravel-ide-helper
	docker compose exec php composer require --dev beyondcode/laravel-dump-server
	docker compose exec php composer require --dev barryvdh/laravel-debugbar
	docker compose exec php composer require --dev roave/security-advisories:dev-master
	docker compose exec php php artisan vendor:publish --provider="BeyondCode\DumpServer\DumpServerServiceProvider"
	docker compose exec php php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
init:
	docker-compose up -d --build
	docker-compose exec php composer install
	docker-compose exec php cp .env.example .env
	docker-compose exec php php artisan key:generate
	docker-compose exec php php artisan storage:link
	docker-compose exec php chmod -R 777 storage bootstrap/cache
	@make fresh
remake:
	@make destroy
	@make init
start:
	docker compose start
stop:
	docker compose stop
down:
	docker compose down --remove-orphans
down-v:
	docker compose down --remove-orphans --volumes
restart:
	@make down
	@make up
destroy:
	docker compose down --rmi all --volumes --remove-orphans
ps:
	docker compose ps
logs:
	docker compose logs
logs-watch:
	docker compose logs --follow
log-web:
	docker compose logs web
log-web-watch:
	docker compose logs --follow web
log-app:
	docker compose logs app
log-app-watch:
	docker compose logs --follow app
log-db:
	docker compose logs db
log-db-watch:
	docker compose logs --follow db
php:
	docker compose exec php bash
migrate:
	docker compose exec php php artisan migrate
fresh:
	docker compose exec php php artisan migrate:fresh
	docker compose exec php php artisan db:seed
seed:
	docker compose exec php php artisan db:seed
renewal-seed:
	docker compose exec php php artisan db:seed --class="Database\Seeders\Renewal\RenewalDatabaseSeeder"
dacapo:
	docker compose exec php php artisan dacapo
rollback-test:
	docker compose exec php php artisan migrate:fresh
	docker compose exec php php artisan migrate:refresh
tinker:
	docker compose exec php php artisan tinker
test:
	docker compose exec php php artisan test
single-test:
	docker compose exec php php artisan test $(FILENAME)
single-test-filter:
	docker compose exec php php artisan test --filter $(METHOD) $(FILENAME)
optimize:
	docker compose exec php php artisan optimize
optimize-clear:
	docker compose exec php php artisan optimize:clear
cache:
	docker compose exec php composer dump-autoload -o
	@make optimize
	docker compose exec php php artisan event:cache
	docker compose exec php php artisan view:cache
cache-clear:
	docker compose exec php composer clear-cache
	@make optimize-clear
	docker compose exec php php artisan event:clear
db:
	docker compose exec db bash
sql:
	docker compose exec db bash -c 'mysql -u $$MYSQL_USER -p$$MYSQL_PASSWORD $$MYSQL_DATABASE'
sql-olddb:
	docker compose exec olddb bash -c 'mysql -u $$MYSQL_USER -p$$MYSQL_PASSWORD $$MYSQL_DATABASE'
redis:
	docker compose exec redis redis-cli
ide-helper:
	docker compose exec php php artisan clear-compiled
	docker compose exec php php artisan ide-helper:generate
	docker compose exec php php artisan ide-helper:meta
	docker compose exec php php artisan ide-helper:models --nowrite
l5-generate:
	docker compose exec php php artisan l5-swagger:generate
