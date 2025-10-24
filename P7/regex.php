<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}
echo "<br><br>";

$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada cocok!";
}

echo "<br><br>";

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';

$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;

echo "<br><br>";

$pattern = '/go*d/';
$text = 'god is good.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br><br>";

$pattern_55 = '/go?d/'; 
$text_55 = 'god is good.';


if (preg_match($pattern_55, $text_55, $matches_55)) {
    echo "Cocokkan: " . $matches_55[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!";
}

$text_test_55 = 'gd';
if (preg_match($pattern_55, $text_test_55, $matches_test_55)) {
    echo "Uji 'gd': Cocokkan: " . $matches_test_55[0] . "<br>";
}

echo "<br><br>";

$pattern_56 = '/go{1,2}d/';
$text_56 = 'god is good.';


if (preg_match($pattern_56, $text_56, $matches_56)) {
    echo "Cocokkan: " . $matches_56[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!";
}

$text_test_56 = 'goood';
if (preg_match($pattern_56, $text_test_56, $matches_test_56)) {
    echo "Uji 'goood': Cocokkan: " . $matches_test_56[0] . "<br>";
} else {
    echo "Uji 'goood': **Tidak cocok** (karena lebih dari 2 'o').<br>";
}
?>