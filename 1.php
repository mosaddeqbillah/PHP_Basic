
<?php
//php regex

$str = "visit w3school";
$pattern = "/w3school/i";
echo "Section 1 \n";
echo preg_match($pattern,$str);

echo "\nSection 2 \n";

$str = " visit w3school visit w3school";
echo preg_match_all($pattern,$str);






