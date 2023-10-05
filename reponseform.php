<?php

echo 'Merci '. $_POST['nom'] .' '. $_POST['prénom'] .' de nous avoir contacté à propos de '. $_POST['sujet'] . '<br>' .'
Un de nos conseiller vous contactera soit à l’adresse '.$_POST['e-mail'] .' ou par téléphone au '. $_POST['téléphone'] .' dans les plus brefs délais pour traiter votre demande : <br>'.
$_POST['message'] ;