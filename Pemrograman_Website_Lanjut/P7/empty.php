<?php

$MyArray = array();

if (empty($MyArray)) {
    echo "Array tidak terdefinisi atau kosong.<br>";
} else {
    echo "Array terdefinisi dan tidak kosong.<br>";
}

if (empty($NonExistentVar)) {
    echo "Variabel tidak terdefinisi atau kosong.<br>";
} else {
    echo "Variabel terdefinisi dan tidak kosong.<br>";
}

?>