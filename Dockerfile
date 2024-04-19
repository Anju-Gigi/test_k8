FROM ubuntu:latest
ENV DEBIAN_FRONTEND=noninteractive
ENV APACHE_PID_FILE=/var/run/apache2/apache2.pid
ENV APACHE_RUN_DIR=/var/run/apache2/
ENV APACHE_LOCK_DIR=/var/lock/apache2/
ENV APACHE_RUN_USER=www-data
ENV APACHE_RUN_GROUP=www-data
ENV APACHE_LOG_DIR=/var/log/apache2/
RUN apt-get update
RUN apt-get install -y apache2
RUN apt-get install -y --no-install-recommends php8.1
RUN apt-get install -y php8.1-cli php8.1-common php8.1-mysql php8.1-zip php8.1-gd php8.1-mbstring php8.1-curl php8.1-xml php8.1-bcmath
RUN apt-get install -y vim
COPY ./index.php /var/www/html
COPY ./register.php /var/www/html
EXPOSE 80
CMD ["apache2", "-D", "FOREGROUND"]



