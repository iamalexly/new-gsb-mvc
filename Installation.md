# INSTALLATION
Pour installer GSB MVC, vous devrez dans un premier temps avoir une machine sous PHP 7.2 et Apache2. De plus, vous devrez avoir activé l'URL Rewriting sur votre serveur.  
- [Etape 01 - Configurer l'application]()
- [Etape 02 - Importer la base de données]()
- [Etape 03 - Configurer l'URL Rewriting]()
- [Etape 04 - Créer un utilisateur]()
- [Etape 5 - C'est fini :1st_place_medal:]()
  
## Etape 01 - Configurer l'application :
Dans un premier temps, Git clonez le projet :  
```bash
git clone https://github.com/iamalexly/new-gsb-mvc.git
```  
Une fois fait, rendez-vous dans le fichier `/models/Database.conf.php`  
Modifiez le code suivant en entrant vos informations de connexion à votre base de données :  
```php
    protected $host = "Hôte"; /** @var string $host Hôte de la base de données */
    protected $dbname = "Nom"; /** @var string $dbname Nom de la base de données */
    protected $username = "Nom d'utilisateur"; /** @var string $username Nom d'utilisateur de la base de données */
    protected $password = "Mot de passe"; /** @var string $password Mot de passe de la base de données */
```  
  
## Etape 02 - Importer la base de données :
Importez le fichier `backup.sql` dans votre base de données.  
Il se trouve dans le répertoire principal de l'application.  
  
## Etape 3 - Configurer l'URL Rewriting : 
Dans un premier temps, activez le `mod_rewrite` à l'aide de la commande :  
```bash
a2enmod rewrite
```
Ensuite, éditez le fichier de configuration d'Apache2 (`/etc/apache2/apache2.conf`) :
```bash
nano /etc/apache2/apache2.conf
```
Puis ajoutez le code suivant à la fin du fichier pour vous assurer que le module est bien activé :  
```apache
<ifModule mod_rewrite.c>
RewriteEngine On
</ifModule>
```
Pour finir, modifiez le code suivant (toujours dans le fichier `/etc/apache2/apache2.conf`) :
```apache
<Directory /var/www/>
    Options Indexes FollowSymLinks
    AllowOverride None
    Require all granted
</Directory>
```
Par :
```apache
<Directory /var/www/>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
```
Redémarrez Apache :  
```bash
service apache2 restart
``` 

## Etape 4 - Créer un utilisateur :
Enfin, rendez-vous dans la base de données à la table `visiteurs` pour créer un visiteur.

## Etape 5 - C'est fini :1st_place_medal: ### 
Si vous rencontrez des problèmes lors de l'installation de l'application, n'hésitez pas à me contacter à l'adresse :  
`alexlebaillypro@gmail.com` 
