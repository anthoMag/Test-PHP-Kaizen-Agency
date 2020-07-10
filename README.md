# Test algorithmique (en PHP)

FizzBuzz
---

- Rédigez un programme court qui imprime chaque numéro de 1 à 100 sur une nouvelle ligne. 
- Pour chaque multiple de 3, imprimez "Fizz" au lieu du numéro. 
- Pour chaque multiple de 5, imprimez "Buzz" au lieu du numéro. 
- Pour les nombres qui sont des multiples de 3 et de 5, imprimez "FizzBuzz" au lieu du nombre.

Transformation d'un nombre décimal en nombre romain
---

Rédigez une fonction appelé `parseToRoman` qui, pour un nombre donné, va retourner sa valeur en chiffres romains.

```php
parseToRoman(1234); // === "MCCXXXIV"
```


Algorithme de décriptage de ROT13
---

Rédigez une fonction ROT13 (ou Rotate By 13 Places). L’idée est de décaler chacune des lettres de l’alphabet de 13 places. Autrement dit, le H devient le U, le E devient le R, etc.

```php
toRot13('URYYB JBEYQ'); // HELLO WORLD
```