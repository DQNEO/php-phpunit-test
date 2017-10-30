test: vendor
	./phpunit

vendor: composer.json
	composer install
