<?php include 'include/header.php';?>

<html>

<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Tell me a country: <input type="text" name="cnty">
<input type="submit">
</form>

<?php

$contries = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
foreach ($contries as $x => $y)

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
// collect value of input field
$x= $_POST['cnty'];
if (empty($countries)) {
echo "country is not listed (or could not be found).";
} else{
    echo $y;
}
}

?>


    
</body>
</html>

<?php include 'include/footer.php';?>
