

/** Docker Tutorial */

// A docker container bundles up all your dependencies and neccessary configuration


//docker file - this is a text file where you write instructions on how to build a docker image

//A DOCKER IMAGE is a read only executable package that includes everything needed to run your application,
//such as source code, dependencies, enviromental variables, configurations

//docker images and containers are similar, the difference is that the images are ready only and they exist without containers
//but for containers to run they need an image .
//
//
//
//
//when you setup file strucutre have a docker directory and a source directory
// source directory will contain all the source code
//docker directory will contain all the things about docker and nginx.

//this is an example of how docker will look

<!--FROM php: 8.0.2-fpm-->
<!--RUN apt-get update && apt-get install -y \-->
<!--git \-->
<!--curl \-->
<!--zip \-->
<!--unzip-->
<!---->
<!--WORKDIR /var/www -->

//dockrt-compose.yml file
//

//IN THE BELOW SETUP we only have 2 servies, APP and NGINX:
//nginx = webserver
//app = is our application

//in the app serive we are saying use the docker file that was just created in context of current directory (./)
//loding the file called Dockerfile
//then setting the container name (learning_php)
//volumes is very important- its a file system mounted on the docker container

version: '3.8'

services:
    app:
     build:
      context: ./
       dockerfile: Dockerfile
    container_name: learning_php
    restart: always
    working_dir: /var/www/
    volumes:
     -../src:/var/www

nginx:
    image: nginx:1.19-alphine
    container_name: learning_php-nginx
    restart: always
    ports:
     -"8000:80"
    volumes:
     -../src:/var/www
     -./nginx:/etc/nginx/conf.d


//nginx service
//is our webserver that is using nginx 1.19 alpine
//you give it a container name
//map the port of the local host i.e localhost:8000 will open the browser