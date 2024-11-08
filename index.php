<?php
// Variable 'name' und Ausgabe mit echo
$name = "Obada"; // Ersetze "Obada" mit deinem echten Namen
echo "Mein Name ist " . $name . "<br>";

// Variablen 'x' und 'y', Summe berechnen und ausgeben
$x = 18200;
$y = 5000;
$summe = $x + $y;
echo "Die Summe von $x und $y ist: " . $summe . "<br>";



// Überprüfen, ob das Alter >= 18 ist
$age = 26;
if ($age >= 18) {
    echo "Die Person ist volljährig.<br>";} 
else {
    echo "Die Person ist nicht volljährig.<br>";
}

// Überprüfen, ob die Person ein Student ist
$isStudent = true;
if ($isStudent) {
    echo "Der Nutzer ist Student.<br>";} 
else {
    echo "Der Nutzer ist kein Student.<br>";
}



// for-Schleife von 1 bis 10
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

//  while-Schleife mit counter = 5
$counter = 5;
while ($counter >= 0) {
    echo "Counter: " . $counter . "<br>";
    $counter--; // Counter um 1 verringern
}




// Array 'fruits' erstellen und ausgeben
$fruits = array("<br>Apfel<br>", "Banane<br>", "Orange<br>");
foreach ($fruits as $x) {
    echo $x . "<br>";
}


//HTML-Liste von Lieblingsbüchern erstellen
$books = array("Buch 1", "Buch 2", "Buch 3"); // Ersetze mit deinen Lieblingsbüchern
echo "<ul>";
foreach ($books as $book) {
    echo "<li>" . $book . "</li>";
}
echo "</ul>";

// Multiplikationstabelle von 1 bis 5 mit einer geschachtelten for-Schleife
echo "<table border='1'>";
for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";



echo "<br>-----Übung 1------<br><br>";
	//Übung 1: Einfacher Umgang mit Variablen und Operationen
 
    //Erstelle eine Variable preis1 mit dem Wert 19.99 und eine Variable preis2 mit dem Wert 7.50. Berechne die Summe der beiden Preise und gib das Ergebnis mit echo aus.
    //Erstelle eine Variable anzahl und multipliziere sie mit preis1, um die Gesamtkosten für mehrere Produkte zu berechnen. Gib das Ergebnis aus.		
	$preis1 = 19.99;
	$preis2 = 7.50;
	$summe = $preis1 + $preis2 ;
	echo $summe . " €" . "<br>";
	$x = 5;
	$summe = $x * $preis1 . "<br>";
	echo $summe;
	echo "<br>";
	echo "<br>-----Übung 2------<br><br>";
	//Übung 2: if-Bedingungen und Vergleiche
 
    //Erstelle eine Variable temperature. Verwende eine if, elseif, else Struktur, um je nach Temperatur zu sagen, ob es "Kalt", "Mild" oder "Heiß" ist.
    //Prüfe, ob eine Zahl gerade oder ungerade ist. Verwende den Modulo-Operator % und eine if-Bedingung.
	$temperature = 20;
	if ( $temperature <= 5){
		echo "Es ist Kalt";
	}elseif($temperature <= 15){
		echo "Es ist Mild";
	}else{
		echo "Es ist Heiß";
	}
	echo "<br><br>-----------<br>";
	echo "<br>-----Übung 3------<br><br>";
	//Übung 3: Schleifen (for, foreach, while)
 
    //Schreibe eine for-Schleife, die die Zahlen von 1 bis 100 ausgibt.
    //Erstelle ein Array namen mit fünf Namen und verwende eine foreach-Schleife, um die Namen auszugeben.
    //Erstelle eine while-Schleife, die bei 10 beginnt und bis 1 zählt (Countdown).
 
	for ($x = 1; $x <= 3; $x++){
		echo "The number is: $x <br>";
	}	
	echo "<br>-----------<br>";
	$namen = array("Ibrahim", "Moayad", "Obada", "Mohannad", "Osman");
	$number = 1;
	foreach($namen as &$x){
		echo $number . ". " . $x . "<br>";
		$number++;
	}
	echo "<br>-----------<br>";
	$number = 5;
	while($number > 0){
		echo $number . "<br>";
		$number--;
	}
	echo "<br>-----Übung 4------<br><br>";
	//Übung 4: Arrays
 
    //Erstelle ein assoziatives Array personen, in dem der Name einer Person als Schlüssel und das Alter als Wert gespeichert ist (z.B. "Anna" => 25). Verwende eine Schleife, um das Alter jeder Person auszugeben.
    //Verwende eine Funktion array_sum(), um die Summe der Werte eines Arrays von Zahlen zu berechnen.
	$personen_alter = array("Moayad" => 50, "Ibrahim" => 51, "obada" => 62);
		echo  $personen_alter ["Ibrahim"];
		foreach ($personen_alter as $name => $alter) {
		echo "Name: $name, Alter: $alter <br>";
		}
	echo "<br><br>-----------<br>";
	echo "<br>-----Übung 5------<br><br>";
	//Übung 5: Benutzerdefinierte Funktionen
 
    //Schreibe eine Funktion berechneFakultaet($n), die die Fakultät einer Zahl berechnet (z.B. 5! = 5 * 4 * 3 * 2 * 1). Verwende eine for-Schleife.
    //Schreibe eine Funktion greetUser($name), die den Namen des Benutzers entgegennimmt und eine Begrüßung ausgibt.

    
function berchnenFakultaet($n) {
    $fakultaet = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fakultaet *= $i;
    }
    return $fakultaet;
}
$zahl =5;
echo "Die Fakulttät von zahl ist " . berchnenFakultaet($zahl);
?>




