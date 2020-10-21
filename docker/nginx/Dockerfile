#FROM nginx:1.18-alpine
FROM nginx:1.19.3-alpine
#RUN adduser -G www-data -u 1000 -h /var/www -s /bin/bash -S www-data
 
#RUN mkdir -p /etc/nginx/html /var/www/html \
#  && chown -R www-data:www-data /etc/nginx /var/www /var/cache/nginx 

CMD ["nginx"]  
EXPOSE 80 443

#USER www-data:www-data

WORKDIR /var/www
