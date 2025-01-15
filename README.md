# Exercices de Base en PHP

Bienvenue dans cette série d'exercices pour apprendre les bases de **PHP**. Ces exercices sont conçus pour les débutants et couvrent les notions fondamentales telles que les **variables**, les **affichages**, les **boucles**, et les **conditions**.

---

## **1. Déclarer et afficher des variables**

### **Objectif**
Apprendre à déclarer des variables, leur assigner une valeur et les afficher à l'écran.

### **Instructions**
1. Déclarez une variable `$nom` et assignez-lui votre prénom.
2. Déclarez une variable `$age` et assignez-lui votre âge.
3. Affichez ces deux variables à l'écran dans une phrase, par exemple :  
   `Bonjour, je m'appelle [nom] et j'ai [âge] ans.`

---

## **2. Les différents types de variables**

### **Objectif**
Découvrir les types de données en PHP.

### **Instructions**
1. Déclarez une variable de type chaîne (`string`), par exemple : `$chaine = "Bonjour";`.
2. Déclarez une variable de type entier (`int`), par exemple : `$entier = 42;`.
3. Déclarez une variable de type décimal (`float`), par exemple : `$decimale = 3.14;`.
4. Déclarez une variable booléenne (`bool`), par exemple : `$vrai = true;`.
5. Affichez chacune de ces variables en précisant son type.

---

## **3. Faire des opérations mathématiques**

### **Objectif**
Utiliser des variables pour effectuer des calculs simples.

### **Instructions**
1. Déclarez deux variables `$a` et `$b` avec des valeurs numériques.
2. Calculez leur **somme**, **différence**, **produit**, et **quotient**.
3. Affichez les résultats des calculs dans des phrases, par exemple :  
   `La somme de $a et $b est [résultat].`

---

## **4. Utiliser des conditions simples**

### **Objectif**
Apprendre à écrire des conditions `if` et `else`.

### **Instructions**
1. Déclarez une variable `$note` avec une valeur numérique entre 0 et 20.
2. Si la note est supérieure ou égale à 10, affichez "Admis".
3. Sinon, affichez "Échoué".

---

## **5. Écrire une boucle `for`**

### **Objectif**
Savoir utiliser une boucle pour répéter une action.

### **Instructions**
1. Écrivez une boucle `for` qui affiche les nombres de 1 à 10.
2. Pour chaque nombre, affichez un message :  
   `Nombre actuel : [nombre]`.

---

## **6. Utiliser une boucle `while`**

### **Objectif**
Savoir écrire une boucle `while`.

### **Instructions**
1. Déclarez une variable `$i` avec une valeur de 0.
2. Utilisez une boucle `while` pour afficher les nombres de 0 à 5.
3. Incrémentez `$i` à chaque itération.

---

## **7. Combiner les conditions et les boucles**

### **Objectif**
Mettre en pratique les conditions dans une boucle.

### **Instructions**
1. Écrivez une boucle `for` qui parcourt les nombres de 1 à 20.
2. Pour chaque nombre, affichez :
   - `"Pair"` si le nombre est divisible par 2.
   - `"Impair"` sinon.

---

## **8. Afficher des tableaux simples**

### **Objectif**
Découvrir comment déclarer et afficher un tableau (array) en PHP.

### **Instructions**
1. Déclarez un tableau `$fruits` contenant : `"Pomme"`, `"Banane"`, `"Cerise"`.
2. Affichez chaque fruit à l'aide d'une boucle `foreach`.

---

## **9. Manipuler un tableau associatif**

### **Objectif**
Apprendre à manipuler des tableaux associatifs.

### **Instructions**
1. Déclarez un tableau associatif `$personne` avec les clés suivantes :
   - `nom` => Votre nom.
   - `age` => Votre âge.
   - `ville` => Votre ville.
2. Affichez chaque clé et sa valeur, par exemple :  
   `Nom : [valeur]`.

---

## **10. Faire une condition avec un tableau**

### **Objectif**
Combiner tableaux et conditions.

### **Instructions**
1. Déclarez un tableau `$notes` contenant plusieurs notes (exemple : `[12, 8, 15, 19]`).
2. Parcourez le tableau avec une boucle `foreach`.
3. Pour chaque note :
   - Affichez `"Note valide"` si la note est supérieure ou égale à 10.
   - Affichez `"Note insuffisante"` sinon.

---

## **11. Créer une fonction simple**

### **Objectif**
Écrire et appeler une fonction en PHP.

### **Instructions**
1. Créez une fonction `bonjour($nom)` qui prend un paramètre `$nom` et affiche :  
   `Bonjour [nom] !`.
2. Appelez cette fonction avec votre prénom.

---

## **12. Créer une fonction avec retour de valeur**

### **Objectif**
Créer une fonction qui retourne un résultat.

### **Instructions**
1. Créez une fonction `addition($a, $b)` qui retourne la somme de `$a` et `$b`.
2. Affichez le résultat en appelant la fonction.

---

## **13. Créer une fonction avec des conditions**

### **Objectif**
Utiliser des conditions dans une fonction.

### **Instructions**
1. Créez une fonction `estPair($nombre)` qui retourne :
   - `"Vrai"` si `$nombre` est pair.
   - `"Faux"` sinon.
2. Appelez cette fonction avec un nombre.

---

## **14. Créer une fonction pour manipuler un tableau**

### **Objectif**
Créer une fonction qui parcourt un tableau.

### **Instructions**
1. Créez une fonction `afficherTableau($tableau)` qui affiche chaque élément d'un tableau.
2. Testez cette fonction avec un tableau d'animaux : `["Chat", "Chien", "Oiseau"]`.

---

## **15. Combiner fonctions, boucles et conditions**

### **Objectif**
Mettre en pratique tout ce que vous avez appris.

### **Instructions**
1. Créez une fonction `analyserNotes($notes)` qui prend un tableau de notes.
2. Pour chaque note :
   - Si la note est supérieure ou égale à 10, ajoutez-la dans un tableau `admis`.
   - Sinon, ajoutez-la dans un tableau `echoues`.
3. Retournez les deux tableaux `admis` et `echoues`.
4. Affichez le résultat.

---

### **Bonus : Sujets à explorer**

- Les constantes.
- Les boucles imbriquées.
- Les chaînes de caractères et leurs fonctions (ex. : `strlen`, `strtoupper`, etc.).

---

### **Comment exécuter ces exercices**
1. Installez PHP sur votre machine ou utilisez un serveur local (ex. : XAMPP, WAMP, MAMP).
2. Créez un fichier PHP pour chaque exercice.
3. Exécutez le fichier dans un terminal ou un navigateur pour tester vos solutions.

Amusez-vous bien ! 🎉
