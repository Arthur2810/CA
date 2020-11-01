<?php include 'include/header.php'; ?>

<head>
    <title>Associative Array</title>
</head>

<body>

    <?php

    $countries = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
    "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague",
    "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna",
    "Poland" => "Warsaw", "Not listed" => "Other");


    if (!isset($_POST['submit'])) {
    ?>


        <form method="post" action="" align="center">
            <div class="form-inline">
                <p> Please, choose a city :</p>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="city">


                    <?php

                    foreach ($countries as $y) {
                        echo "<option value=\"$y\">$y</option>\n";
                    }
                    ?>

                </select>
                <div class="col-auto my-1">
                    <input class="btn btn-primary mb-2" type="submit" name="submit" value="Submit">


                </div>
            </div>
        </form>




    <?php

    } else {

        $capital = $_POST['city'];

        $country = array_search($capital, $countries);

        echo "<p>$capital is the capital of $country.</p>";
    }
    ?>

</body>

</html>

<?php include 'include/footer.php'; ?>