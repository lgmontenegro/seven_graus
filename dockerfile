FROM php:7.4-cli
COPY . /usr/src/seven_graus
WORKDIR /usr/src/seven_graus
CMD [ "php", "-S", "0.0.0.0:8080" ]