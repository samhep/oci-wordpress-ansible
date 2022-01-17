server {
    listen 80;
    server_name example.com www.example.com;
    root /var/www/example.com;

    index index.html index.htm index.php index.nginx-debian.html;

    location / {
        try_files $uri $uri/ /index.php?q=$uri$args;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
     }

    location ~ /\.ht {
        deny all;
    }

}