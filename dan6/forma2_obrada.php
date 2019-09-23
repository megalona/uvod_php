<?php


if (isset($_POST['submit'])) {
    echo '<pre>';
    print_r ($_REQUEST);
    echo '</pre>';
    
    if (!empty($_POST['ime']) && !empty($_POST['prezime'])){
        echo "Ime: $_POST[ime].<br>";
        echo "Prezime: $_POST[prezime].<br>";
    }else{
        echo 'Popunite sva polja!';
    }
    
    }else{
        header('Location:forma2_obrazac.php'); //ako netko proba uć u obradu podataka, tipa hakeri
    }