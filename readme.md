# Elodie Photographe

Elodie Photographe est un site internet présentant des photos

# Environnement de développement

### Pré-Requis

* PHP 7.4
* Composer
* Symfony CLI
* Docker (pas fait encore)
* Docker-compose 

Vous pouvez vérifier les pré-requis (sauf Docker et Docker-compose) avec la commande suivante (de la CLI symfony) :

```bash
symfony check:requirements
```

### Lancer l'environnement de développement 

```bash
docker-compose up -d
npm install
npm run build
docker-compose up -d
symfony serve -d
```
## Lancer des test

```bash
php bin/phpunit --testdox
```
## ############################################## ##

## Terminal

# Permet de lancer le serveur
    symfony serve

# Permet de créer des fichiers
    symfony console make: NomDuFichier
ou
    symfony console m:con NomDuFichier

# DOCTRINE -> Base de données
Creer une BDD. Aller dans le fichier .env pour mettre à jour les données et choisir un nom de BDD
DATABASE_URL="mysql://root:GNTHrmn@127.0.0.1:3306/nomDeBDD?serverVersion=5.7"

    php bin/console doctrine:database:create

Entity -> Represente une table

    php bin/console make:entity
    php bin/console make:migration -> Mettre la BDD dans PHPmyAdmin
    php bin/console doctrine:migrations:migrate -> Migrer les élements dans la BDD

Manager -> Manipuler un enregistrement (Insertion, MaJ, Suppresion)

Repository -> Selection de données

# Permet de creer des fixtures

Installation du package
    composer require orm-fixtures --dev

Création de fixtures
    php bin/console make:fixtures
# Permet de creer une authentification
    symfony console make:auth
# Permet de creer un formulaire d'inscription
    symfony console make:registration-form
# Permet d'installer pour envoyer des mails confirmation
    composer require symfonycasts/verify-email-bundle
# Permet d'installer un serveur google mailer pour l'envoi de mail
Ne pas oublier de configurer la boite mail

    composer require symfony/google-mailer
# Permet d'installer pour reset un MdP
    symfony console m:reset-password
# Permet de creer des formulaires
    symfony console m:form
# Permet de vérifier la sécurité du site
    symfony security:check 

# Commentaire en twig
{# mettre ce que l'on veut ici #}