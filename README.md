# Instructions d'installation

1. Installer les dépendances avec Composer:
   composer install
2. créer la base de données:
   php bin/console doctrine:database:create
3. Générer les fichiers de migration:
   php bin/console make:migration
4. Appliquer les migrations:
   php bin/console doctrine:migrations:migrate
5. run l'app:
   symfony serve
