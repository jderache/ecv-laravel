# Projet Laravel

## Introduction

Ce projet à été réalisé par Julien Derache, Alyssa Cherrif, Achille David, Fabien Lapert

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

-   PHP >= 7.3
-   Composer
-   Node.js avec npm

## Installation

1. Clonez le dépôt du projet :

```sh
    git clone https://github.com/jderache/ecv-laravel.git
```

2. Accédez au répertoire du projet :

```sh
    cd ecv-laravel
```

3. Installez les dépendances PHP avec Composer :

```sh
    composer install
```

4. Installez les dépendances JavaScript avec npm :

```sh
    npm install
```

5. Copiez le fichier d'exemple de configuration environnementale et modifiez-le selon vos besoins :

```sh
    cp .env.example .env
```

6. Générez la clé de l'application :

```sh
    php artisan key:generate
```

## Configuration de la base de données

1. Configurez votre fichier .env pour qu'il corresponde aux paramètres de votre base de données. Par exemple :

```sh
DB_CONNECTION=sqlite
```

2. Exécutez les migrations et les seeders pour configurer la base de données :

```sh
php artisan migrate:fresh --seed
```

## Exécution du projet

1. Compilez les ressources front-end :

```sh
npm run dev
```

2. Démarrez le serveur de développement :

```sh
php artisan serve
```

3. Accédez à l'application dans votre navigateur à l'adresse suivante :

http://127.0.0.1:8000
