FROM wordpress

RUN apt update && apt-get install -y nano

RUN rm -rf /var/www/html/*
COPY --chown=33:33 . /var/www/html
