# starwars-api

Pour faire fonctionner le htaccess en localhost il faut ajouter ça au virtual host
<pre>
&lt;Directory "/var/www/html/starwars/"&gt;
	Options Indexes FollowSymLinks Multiviews
	AllowOverride All
	Require all granted
	Options -Indexes
&lt;/Directory&gt;
</pre>
