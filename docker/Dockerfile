FROM ubuntu:jammy-20250126

# Set environment variables
ARG REPO_PATH
ARG DEBIAN_FRONTEND=noninteractive
ENV APP_ROOT /srv/app

# Install Linux deps
RUN apt update && apt install -y \
    curl \
    apt-transport-https \
    git \
    ca-certificates \
    lsb-release \
    software-properties-common \
    # gnupg 
    npm


RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.2/install.sh | bash
    
RUN add-apt-repository ppa:ondrej/php -y
# RUN curl -sSLo /usr/share/keyrings/deb.sury.org-php.gpg https://packages.sury.org/php/apt.gpg
# RUN sh -c 'echo "deb [signed-by=/usr/share/keyrings/deb.sury.org-php.gpg] https://packages.sury.org/php/ bullseye main" > /etc/apt/sources.list.d/php.list'


RUN apt update && apt install -y \
    php8.3 \
    php8.3-cli \
    php8.3-common \
    php8.3-curl \
    php8.3-mbstring \
    php8.3-mysql \
    php8.3-xml


# Install PHP Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'.PHP_EOL; } else { echo 'Installer corrupt'.PHP_EOL; unlink('composer-setup.php'); exit(1); }"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

# Copy the application code
COPY $REPO_PATH $APP_ROOT

# Set work directory
WORKDIR $APP_ROOT

# Install dependencies
# RUN composer update
RUN composer install --no-dev --prefer-dist
RUN npm install


# Expose the port that the application will use
EXPOSE 9000

# RUN chmod +x $APP_ROOT/docker/entrypoint.sh

# Run the command to start the development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=9000"]
# ENTRYPOINT ["$APP_ROOT/docker/entrypoint.sh"]