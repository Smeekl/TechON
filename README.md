# TechOn

## Installation

### Download

Clone current version

```
git clone https://github.com/Smeekl/TechON.git
```

Setting rewrite rules on .htaccess

```htaccess
RewriteEngine On
RewriteRule ^favicon\.ico$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /index.php?$1 [L]
```

Setting rewrite rules on nginx: /etc/nginx/sites-available/

```nginx
server {
	server_name mvc;
	access_log //your_root//;

	root //your_root//;
	index index.php index.htm index.html;

    location / {
        try_files $uri $uri/ /index.php;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php7.2-fpm.sock;
    }

}
```
