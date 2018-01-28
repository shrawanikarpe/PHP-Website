For this app I have used for nginx web server on which the website is hosted.
This web server is  connected to MySQL database and to load balancer.
For nginx, mysql and load balancer I have used docker containers. 
The PHP website content are added to the nginx containers which will fetch the data from MySQL database.
The load balancer container is linked with nginx server for displaying the data using round robin fashion.
The main advantage of using the docker container is that the whole environment is now very light weight and there is no need to manually go and install the software for nginx and MySQL. 

To start the installation in centos instance:
•	Make sure docker is installed. Try running "docker version" or "docker info"
•	Make sure all the packages are updated. Check by running "yum update"
To run the PHP app in nginx server and connect to MySQL database create the following containers:
•	nginx-php-fpm (for nginx)
•	mysql (for database)
•	haproxy (for load balancer)
