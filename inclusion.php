 
<?php
include_once("config.php");

if( !isset($_SESSION) ){
    session_start();
}



function tt_connectionbase()
{
//    echo ">>>>>".host." ".user." ".password." ".db."<<<<<";
    $base = mysql_connect (host, user, password);  
    if (!$base) {
        die('Connexion impossible : ' . mysql_error());
    }
    $db_selected=mysql_select_db( db, $base);
    if (!$db_selected) {
       die ('Impossible de sélectionner la base de données : ' . mysql_error());
    }
    return $base;
}



function tt_insert($nom,$prenom,$profession,$sexe,$nom_ville,$cp,$rue,$add_mail,$telephone,$description,$pass,$base)
{
    //création de la requête SQL:
    $sql = "INSERT  INTO tt_inscrit (nom, prenom,profession,sexe,nom_ville,cp,rue,add_mail,telephone,pass,description)
            VALUES ( '$nom', '$prenom','$profession','$sexe','$nom_ville','$cp','$rue','$add_mail','$telephone','$pass','$description') " ;

    //exécution de la requête SQL:
    $requete = mysql_query($sql, $base) or die( mysql_error() ) ;

    //affichage des résultats, pour savoir si l'insertion a marchée:
    if($requete)
    {
        echo("enregistrement correct") ;
    }
    else
    {
        echo("enregistrement raté") ;
    }
}


// vim: ts=4 sw=4 et
?>
