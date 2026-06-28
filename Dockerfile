FROM php:8.2-apache

# PHP extensions required for MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache modules required by .htaccess
RUN a2enmod rewrite headers expires

# Allow .htaccess to override settings in the web root
RUN printf '<Directory /var/www/html>\n\
    Options FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n' > /etc/apache2/conf-available/sorwatom.conf \
    && a2enconf sorwatom

# Copy all site files into the web root
COPY . /var/www/html/

# Remove files that must not be web-accessible
RUN rm -rf /var/www/html/.github \
           /var/www/html/Dockerfile \
           /var/www/html/fly.toml \
           /var/www/html/router.php

# Create smtp_config.php one level ABOVE the web root.
# mail.php resolves it via: dirname(__DIR__, 2) = /var/www
# Values are injected at runtime from Fly.io secrets (environment variables).
RUN printf '<?php\n\
define("SMTP_HOST",     getenv("SMTP_HOST")     ?: "");\n\
define("SMTP_USERNAME", getenv("SMTP_USERNAME") ?: getenv("SMTP_EMAIL") ?: "");\n\
define("SMTP_EMAIL",    getenv("SMTP_EMAIL")    ?: "");\n\
define("SMTP_PASSWORD", getenv("SMTP_PASSWORD") ?: "");\n\
define("SMTP_PORT",     (int)(getenv("SMTP_PORT") ?: 465));\n' \
    > /var/www/smtp_config.php

# Correct ownership for Apache
RUN chown -R www-data:www-data /var/www/html /var/www/smtp_config.php

EXPOSE 80
