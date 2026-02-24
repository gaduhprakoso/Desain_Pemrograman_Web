<?php
$LoremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Voluptatem reprehenderit nobis veritatis commodi fugiat molestias impedit 
unde ipsum voluptatum, corrupti minus sit excepturi nostrum quisquam? Quos 
impedit eum nulla optio.";

echo "<p>{$LoremIpsum}</p>";
echo "Panjang Karakter: " . strlen($LoremIpsum) . "<br>";
echo "Panjang Kata: " . str_word_count($LoremIpsum) . "<br>";
echo "<p>" . strtoupper($LoremIpsum) . "</p>";
echo "<p>" . strtolower($LoremIpsum) . "</p>";
?>