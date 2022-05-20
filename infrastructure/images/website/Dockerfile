FROM wordpress:latest

RUN apt-get update && apt-get install -y nano
RUN rm -rf /var/www/html/*

COPY infrastructure/images/website/docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Copy application files
COPY --chown=33:33 . /var/www/html
