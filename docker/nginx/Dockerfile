FROM nginx:1.18-alpine

RUN adduser -D -u 1000 -s /bin/bash www-data -G www-data

WORKDIR /var/www

CMD ["nginx"]  
EXPOSE 80 443
