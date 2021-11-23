install:
	composer install
	docker build -t sevengraus .

run:
	docker run --name sevenassessment -it -d -p 8080:8080 sevengraus

stop:
	docker stop sevenassessment

uninstall:
	rm -rf ./vendor
	docker rm sevenassessment
	docker rmi sevengraus