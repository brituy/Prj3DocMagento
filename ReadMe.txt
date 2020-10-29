 1. sudo docker-compose up --build
 2. sudo docker exec -i -t php-fpm bash

    root@eecd1a5c3259:/var/www#
 3. usermod -u 1000 www-data
 4. chown -R www-data:www-data /var/www
 5. find . -type f -exec chmod 644 {} \;
 6. find . -type d -exec chmod 755 {} \;
 7. find var bin pub/static pub/media generated/ app/etc -type f -exec chmod 775 {} \;
 8. find var bin pub/static pub/media generated/ app/etc -type d -exec chmod 775 {} \;
 9. chmod g+w pub/media pub/static var
10. chmod u+x bin/magento
 
11. bin/magento setup:install --base-url='http://localhost:8000' --db-host='database' --db-name='magento2' --db-user='magento2' --db-password='magento2' --admin-firstname='Magento' --admin-lastname='User' --admin-email='user@example.com' --admin-user='admin' --admin-password='admin123' --use-rewrites='1' --language='en_US' --elasticsearch-host='elasticsearch' --elasticsearch-port='9200'

    /admin_xqxq3u

12. chown -R www-data:www-data var pub/static pub/media
 
13. bin/magento deploy:mode:set developer
14. bin/magento setup:upgrade
15. bin/magento setup:di:compile
16. bin/magento setup:static-content:Deploy -f
17. chown -R www-data:www-data pub/static/adminhtml


