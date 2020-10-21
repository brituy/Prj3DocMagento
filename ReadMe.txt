 1. sudo docker-compose up --build
 2. sudo docker exec -i -t php-fpm bash

    root@eecd1a5c3259:/var/www#
 3. find . -type f -exec chmod 644 {} \;
 4. find . -type d -exec chmod 755 {} \;
 5. find var pub/static pub/media  generated/ app/etc -type f -exec chmod 777 {} \;
 6. find var pub/static pub/media generated/ app/etc -type d -exec chmod 777 {} \;
 7. chmod 644 ./app/etc/*.xml
 8. chmod u+x bin/magento
 9. bin/magento setup:install --base-url='http://localhost:8000/magento2/' --db-host='database' --db-name='magento2' --db-user='magento2' --db-password='magento2' --use-rewrites='1' --elasticsearch-host='elasticsearch'
 
10. bin/magento deploy:mode:set developer
11. bin/magento setup:upgrade
12. bin/magento setup:di:compile
13. bin/magento setup:static-content:Deploy -f
14. bin/magento indexer:reindex
15. chmod -R 777 var/ generated/ pub/ pub/static pub/media/
16. INSERT INTO core_config_data (path, value) VALUES ('dev/static/sign', 0) ON DUPLICATE KEY UPDATE value = 0;
17. bin/magento cache:clean config 
