<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php Functions</title>
</head>
<body>

    <?php

// -------------- EXERCICE 1
echo '<h2>Exercice 1</h2>';
echo '<p>Faire une fonction qui retourne **true**.</p>';

if(true) {
    echo 'true';
}


echo '<hr>';

// ---------------EXERCICE 2
echo '<h2>Exercice 2</h2>';
echo '<p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>';


function couleur($color) {
    echo "$color <br>";
}

couleur("Rouge");
couleur("Bleu");
couleur("Vert");

echo '<hr>';

// --------------EXERCICE 3
echo '<h2>Exercice 3</h2>';
echo '<p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines</p>';

function couleur2($color, $color2) {
    echo "$color"."$color2"."<br>";
}

couleur2("Rouge", "Bleu");


echo '<hr>';

// -------------- EXERCICE 4
echo '<h2>Exercice 4</h2>';
echo '<p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
- **Le premier nombre est plus grand** si le premier nombre est plus grand que le deuxième
- **Le premier nombre est plus petit** si le premier nombre est plus petit que le deuxième
- **Les deux nombres sont identiques** si les deux nombres sont égaux</p>';

function nombre($nb1, $nb2) {
    if ($nb1 > $nb2) {
        echo $nb1." est plus grand que ".$nb2;
    }
    if ($nb1 < $nb2) {
        echo $nb1." est plus petit que ".$nb2;
    }
    if ($nb1 = $nb2) {
        echo $nb1." est égal à ".$nb2;
    }
}

nombre(8, 8);

echo '<hr>';

// -------------- EXERCICE 5
echo '<h2>Exercice 5</h2>';
echo '<p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>';

function concatNbSt($nb, $str) {
    echo $nb.' '.$str;
}

concatNbSt(2, "voitures");

echo '<hr>';

// ----------------- EXERCICE 6
echo '<h2>Exercice 6</h2>';
echo '<p>Faire une fonction qui prend trois paramètres : **nom**, **prenom** et **age**. Elle doit renvoyer une chaine de la forme :
"Bonjour" + **nom** + **prenom** + ",tu as" + **age** + "ans".</p>';

function pres($nom, $prenom, $age) {
    echo 'Bonjour '.$nom.' '.$prenom.', '.'tu as '.$age.' ans.';
}

pres ('léponge', 'bob', 18);

echo '<hr>';

// ---------------- EXERCICE 7
echo '<h2>Exercice 7</h2>';
echo '<p>Faire une fonction qui prend deux paramètres : **age** et **genre**. Le paramètre **genre** peut prendre comme valeur :
- Homme
- Femme

La fonction doit renvoyer en fonction des paramètres :
- **Vous êtes un homme et vous êtes majeur**
- **Vous êtes un homme et vous êtes mineur**
- **Vous êtes une femme et vous êtes majeur**
- **Vous êtes une femme et vous êtes mineur** </p>';

function genre($genre, $age) {

if ($age >= 18) {
    if($genre == "homme") {
        echo $age.' | '.$genre.'<br>';
        echo 'Vous êtes un homme et vous êtes majeur.<br>';
    } else if ($genre == "femme") {
        echo $age.' | '.$genre.'<br>';
        echo 'Vous êtes une femme et vous êtes majeure.<br>';
    }
} else {
    if ($genre == "homme") {
        echo $age.' | '.$genre.'<br>';
        echo 'Vous êtes un homme et vous êtes mineur.<br>';
    } else if ($genre == "femme") {
        echo $age.' | '.$genre.'<br>';
        echo 'Vous êtes une femme et vous êtes mineure.<br>';
    }
}


}

genre("homme", 18);
genre("homme", 17);
genre("femme", 25);
genre("femme", 16);
    // if ($genre = Homme && $age < 18) {
    //         echo 'vous êtes un homme et vous êtes mineur';
    // }
    // if ($genre = Homme && $age >= 18) {
    //         echo 'vous êtes un homme et vous êtes majeur';
    // }

    // if ($genre = Femme && $age < 18) {
    //         echo 'vous êtes une femme et vous êtes mineure';
    // }
    // if ($genre = Femme && $age >= 18) {
    //         echo 'vous êtes une femme et vous êtes majeure';
    // }

    // } if else ($genre = Femme) {
    //     if ($age <== 18) {
    //         echo 'vous êtes une femme et vous êtes mieure';
    //     } else {
    //         echo 'vous êtes une femme et vous êtes majeure';
    //     }
    // }




//      && $age>=18) {
//     echo 'Vous êtes un homme et vous êtes majeur.';
// } else if ($genre = Homme && $age<18) {
//     echo 'Vous êtes un homme et vous êtes mineur.';
// }
// if ($genre = Femme && $age<18) {
//     echo 'Vous êtes une femme et vous êtes mineur.';
// } else if ($genre = Femme && $age>=18) {
//     echo 'Vous êtes une femme et vous êtes majeur.';
// }
// }

// echo ' <strong> !!!!!!!!!!! essaie de code, non fonctionnel!!!!!!!!!!!!!!!!!!!!!!!!!!  </strong> <br>';
// echo '
//     <form name="form" action="" method="get">
//         <label for="">Entrez un genre et appuyez sur Entrée :</label>
//         <input type="text" name="genre" value="">
//     </form><br>
//     <form name="form2" action="" method="get">
//         <label for="">Entrez un age et appuyez sur Entrée :</label>
//         <input type="text" name="age" value="">
//     </form>';

// $genre = $_GET['genre'];
// $age = $_GET['age'];
// genre(23, $genre);


// echo '<br><strong> !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</strong> <br>';


echo '<hr>';

// ----------------- EXERCICE 7
echo '<h2>Exercice 8 </h2>';
echo '<p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut.</p>';

$nb4 = 3;
$nb5 = 4;
$nb6 = 5;

function addup($nb4, $nb5, $nb6) {
    echo $nb4.'+'.$nb5.'+'.$nb6.' =';
    echo $nb4+$nb5+$nb6;
}

addup($nb4, $nb5, $nb6);



    ?>


</body>
</html>