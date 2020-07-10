# Test algorithmique (en PHP)

Installation
---

```sh
composer install --dev
```

Si vous n'avez pas de token Github pour composer (actif par défaut), vous pouvez désactiver son usage avec la commande suivante (puis relancer le `composer install --dev`)


```sh
composer config --global --unset github-oauth.github.com
```

Écrivez vos fonctions dans `src/DeveloperInterview.php`, puis lancez les tests:


```sh
./vendor/bin/phpunit --testdox --bootstrap vendor/autoload.php tests
```

Exercices
---

### FizzBuzz

- Rédigez un programme court qui concatène chaque numéro de 1 à 100 à la suite.
- Pour chaque multiple de 3, concatènez "Fizz" au lieu du numéro.
- Pour chaque multiple de 5, concatènez "Buzz" au lieu du numéro.
- Pour les nombres qui sont des multiples de 3 et de 5, concatènez "FizzBuzz" au lieu du nombre.

### Transformation d'un nombre décimal en nombre romain

Rédigez une fonction appelé `parseToRoman` qui, pour un nombre donné, va retourner sa valeur en chiffres romains (<3999).

```php
parseToRoman(1234); // === 'MCCXXXIV'
```

### Algorithme de (dé)chiffrement ROT13

Rédigez une fonction ROT13 (ou Rotate By 13 Places). L’idée est de décaler chacune des lettres de l’alphabet de 13 places. Autrement dit, le H devient le U, le E devient le R, etc. Interdit d'utiliser la fonction native `str_rot13` ;)

```php
toRot13('URYYB JBEYQ'); // HELLO WORLD
```

### Expression régulière

Rédigez une fonction qui utilse une expression régulière et qui extrait l'année dans le texte suivant :

> Rapport n°2187 (09/2019) - Achats

```php
extractYear(); // 2019
```

### Optimisation

Analysez la fonction `simplifyMe` et modifiez là pour l'améliorer.


### Fonction Factorielle

Écrire une fonction qui retourne la factorielle d'un nombre :

```php
factorial(5); // 120
```
### Fonction de calcul de l'angle d'une pendule

Écrire une fonction qui retourne l'angle formé par les aiguilles d'une pendule (entre la petite et la grande aiguille).

Le premier argument est le chiffre des heures (petite aiguille), le second le chiffre des minutes (grande aiguille)

```php
clockAngle(3, 30); // 75
```
