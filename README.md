# starwars-api

Pour faire fonctionner le htaccess en localhost il faut ajouter ça au virtual host

<Directory "/var/www/html/starwars/">
		Options Indexes FollowSymLinks Multiviews
		AllowOverride All
		Require all granted
		Options -Indexes
	</Directory>
