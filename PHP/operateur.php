<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opérateurs en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h2 {
            color: #4CAF50;
        }
        p {
            margin: 5px 0;
        }
        pre {
            background: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<h1>Opérateurs en PHP</h1>

<h2>1. Opérateurs Arithmétiques</h2>
<p>Utilisés pour effectuer des calculs mathématiques :</p>
<pre>
+ : Addition
- : Soustraction
* : Multiplication
/ : Division
% : Modulo (reste d'une division)
    </pre>
<?php
$a = 10;
$b = 3;
echo "<p>Exemple : $a + $b = " . ($a + $b) . "</p>";
echo "<p>Exemple : $a - $b = " . ($a - $b) . "</p>";
echo "<p>Exemple : $a * $b = " . ($a * $b) . "</p>";
echo "<p>Exemple : $a / $b = " . ($a / $b) . "</p>";
echo "<p>Exemple : $a % $b = " . ($a % $b) . "</p>";
?>

<h2>2. Opérateurs de Comparaison</h2>
<p>Utilisés pour comparer deux valeurs :</p>
<pre>
== : Égal à
=== : Strictement égal (valeur et type identiques)
!= : Différent
<  : Inférieur
>  : Supérieur
<= : Inférieur ou égal
>= : Supérieur ou égal
    </pre>
<?php
$x = 5;
$y = 10;
echo "<p>Exemple : $x == $y : " . ($x == $y ? "true" : "false") . "</p>";
echo "<p>Exemple : $x === $y : " . ($x === $y ? "true" : "false") . "</p>";
echo "<p>Exemple : $x != $y : " . ($x != $y ? "true" : "false") . "</p>";
echo "<p>Exemple : $x < $y : " . ($x < $y ? "true" : "false") . "</p>";
?>

<h2>3. Opérateurs Logiques</h2>
<p>Utilisés pour combiner plusieurs conditions :</p>
<pre>
&& : ET logique (les deux conditions doivent être vraies)
|| : OU logique (au moins une des conditions est vraie)
!  : NON logique (inverse la condition)
    </pre>
<?php
$val1 = true;
$val2 = false;
echo "<p>Exemple : $val1 && $val2 : " . (($val1 && $val2) ? "true" : "false") . "</p>";
echo "<p>Exemple : $val1 || $val2 : " . (($val1 || $val2) ? "true" : "false") . "</p>";
echo "<p>Exemple : !$val1 : " . ((!$val1) ? "true" : "false") . "</p>";
?>

<h2>4. Opérateurs d'Affectation</h2>
<p>Utilisés pour affecter ou modifier la valeur d'une variable :</p>
<pre>
=   : Affectation simple
+=  : Ajoute une valeur
-=  : Soustrait une valeur
*=  : Multiplie par une valeur
/=  : Divise par une valeur
%=  : Modulo avec une valeur
    </pre>
<?php
$num = 10;
echo "<p>Exemple : num = 10 -> $num</p>";
$num += 5;
echo "<p>Exemple : num += 5 -> $num</p>";
$num -= 3;
echo "<p>Exemple : num -= 3 -> $num</p>";
$num *= 2;
echo "<p>Exemple : num *= 2 -> $num</p>";
$num /= 4;
echo "<p>Exemple : num /= 4 -> $num</p>";
$num %= 2;
echo "<p>Exemple : num %= 2 -> $num</p>";
?>
</body>
</html>
