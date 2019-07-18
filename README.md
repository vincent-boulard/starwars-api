# starwars-api

Pour faire fonctionner le htaccess en localhost il faut ajouter ça au virtual host
<pre>
&lt;Directory "/chemin/vers/votre/repository/"&gt;
	Options Indexes FollowSymLinks Multiviews
	AllowOverride All
	Require all granted
	Options -Indexes
&lt;/Directory&gt;
</pre>
