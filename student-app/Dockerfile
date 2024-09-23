# Use the official PHP image with Apache
FROM php:7.4-apache

# Install mysqli extension for MySQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy application files into the Apache web root directory
COPY ./app /var/www/html/

# Expose port 80 (default HTTP port for Apache)
EXPOSE 80

# Entrypoint to start Apache in the foreground
CMD ["apache2-foreground"]
