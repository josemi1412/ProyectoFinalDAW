<?php

if (isset($_GET['p'])){

    if ($_GET['p']=="1") {

        include '../Vista/ayuda1.php';

    } else if ($_GET['p']=="2") {

        include '../Vista/ayuda2.php';

    } else if ($_GET['p']=="3") {

        include '../Vista/ayuda3.php';

    } else if ($_GET['p']=="4") {

        include '../Vista/ayuda4.php';

    } else if ($_GET['p']=="5") {

        include '../Vista/ayuda5.php';

    }

} else {
    include '../Vista/ayuda.php';
}