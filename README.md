ProbesysValidateSchemaBundle
============================

## Description
Adds Docrine2 Validate Shema to Symfony2 app/console

Based on the work of Ulrich
http://www.mon-code.net/article/26/ajouter-les-lignes-de-commande-doctrine2-symfony2

## Installation

1) Add the following to your composer.json

    "probesys/validate-schema-bundle": "master",

2) run :

    php composer.phar update

3) Add this line to your AppKernal :

    new Probesys\ValidateSchemaBundle\ProbesysValidateSchemaBundle(),

## Using

From the root of your symfony project :

    php app/console probesys:doctrine:orm:validate-schema