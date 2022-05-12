<?php
$cijfer = $_POST['tafel'];
$tafelkeer = "1";
$tafelkeer1 = "1";
$tafelkeer2 = "1";

echo "De For loop<br/>";

for ($tafelkeer = 1; $tafelkeer <= 10; $tafelkeer++) {
    $antwoord = $tafelkeer * $cijfer;
    echo "$cijfer x $tafelkeer = $antwoord" ;
    echo "<br/>";
}

    echo "<br/><br/>";
    echo "De While loop<br/>";

while ($tafelkeer1 <= 10) {
    $antwoord1 = $tafelkeer1 * $cijfer;
    echo "$cijfer x $tafelkeer1 = $antwoord1";
    echo "<br/>";
    $tafelkeer1++;
}

echo "<br/><br/>";
echo "De Do While loop<br/>";

do {
    $antwoord2 = $tafelkeer2 * $cijfer;
    echo "$cijfer x $tafelkeer2 = $antwoord2 <br>";
    $tafelkeer2++;
  } while ($tafelkeer2 <= 10);

?>