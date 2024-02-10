# Use an official PHP runtime as a parent image
FROM php:cli-alpine3.18

# Set the working directory to /app
WORKDIR /app

# Copy only the composer.json file to the container (build context)
COPY composer.json /app/

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install project dependencies
RUN composer install

# CMD specifies the command to run on container start
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/app", "entry.php"]
