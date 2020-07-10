# Test algorithmique (en PHP)

Installation
---

```sh
composer install --dev
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

Rédigez une fonction appelé `parseToRoman` qui, pour un nombre donné, va retourner sa valeur en chiffres romains.

```php
parseToRoman(1234); // === 'MCCXXXIV'
```

### Algorithme de décriptage de ROT13

Rédigez une fonction ROT13 (ou Rotate By 13 Places). L’idée est de décaler chacune des lettres de l’alphabet de 13 places. Autrement dit, le H devient le U, le E devient le R, etc. Interdit d'utiliser la fonction native `str_rot13` ;)

```php
toRot13('URYYB JBEYQ'); // HELLO WORLD
```
