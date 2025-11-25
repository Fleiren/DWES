# Construcción PHP + Apache
FROM php:8.3-apache

#Habilitamos el módulo rewrite de Apache
RUN a2enmod rewrite

#Actualizamos e instalamos dependencias de PHP y herramientas básicas
RUN apt-get update && apt-get install -y \
    procps \
    nano\
    git \
    unzip \
    curl \
    build-essential \
    openssl \
    libssl-dev \
    libicu-dev \
    zlib1g-dev \
    libreadline-dev \
    supervisor \
    cron \
    sudo \
    libzip-dev \
    #Limpiar la cache \
    && rm -rf /var/lib/apt/lists/*

#Configurar e instalar extensiones de PHP necesarias \
    RUN docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-configure mysqli \
    && docker-php-ext-configure intl \
    && docker-php-ext-install \
    pdo \
    mysqli \
    pdo_mysql \
    sockets \
    intl \
    opcache \
    zip \
    && rm -rf /tmp/*

#Usuario NO-ROOT y PERMISOS \
WORKDIR /var/www/html

ARG USERNAME
ARG USER_UID
ARG USER_GID


RUN groupadd --gid ${USER_GID} ${USERNAME} \
    && useradd --uid ${USER_UID} --gid ${USER_GID} -m ${USERNAME} \
    && echo ${USERNAME} ALL=\(root\) NOPASSWD:ALL > /etc/sudoers.d/${USERNAME} \
    && chmod 0440 /etc/sudoers.d/${USERNAME}

# 3. Copiamos el archivo de configuración de Apache al contenedor
COPY apache/apache2.conf /etc/apache2/apache2.conf

# 4. Establecer el usuario y grupo en el archivo de configuración principal de Apache
# Este comando usa 'sed' para reemplazar las directivas User/Group en el apache2.conf copiado
RUN sed -i "s/^User www-data/User ${USERNAME}/g" /etc/apache2/apache2.conf \
    && sed -i "s/^Group www-data/Group ${USERNAME}/g" /etc/apache2/apache2.conf


RUN chown -R ${USERNAME}:${USERNAME} /var/www/html

#Instalamos las herramientas de desarrollo
#instalamos composer
COPY --from=composer:2.8.11 /usr/bin/composer /usr/local/bin/composer

#Instalamos Xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

#Instalamos PHPUnit
RUN composer global require phpunit/phpunit --quiet \
    && ln -s /root/.composer/vendor/bin/phpunit /usr/local/bin/phpunit