<?php include 'include/header.php'; ?>

<html>
<head>
    
<style>
table {
  font-family: 'Alfa Slab One', cursive;
  border-collapse: collapse;
  width: 50%;
  
}

td, th {
  border: 1px solid #282828;
  text-align: left;
  padding: 8px;
}

/* this is for making the rows striped for easy reading*/
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<!-- php array -->
<?php

$contries = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

?>

</head>
<body>

<!-- Table title -->
<h2>Countries and Capitals</h2>

<!-- This is my container -->
<div class="container">
    <!-- To make the table good for all devices -->
    <div class="table-responsive">

<table align="center">
    <thead style="background-color: lightsalmon;">
  <tr>
      <!-- table header -->
    <th>Country</th>
    <th>Capital</th>
  </tr>
    </thead>
  <tbody>
      <!-- foreach loop for the array -->
  <?php foreach ($contries as $x => $y): ?>
      <tr>
          <!-- index the values of the array in the rows and columns -->
          <td> <?php echo ($x) ?> </td>
          <td> <?php echo ($y) ?> </td>
      </tr>
      <!-- ending the loop -->
      <?php endforeach; ?>
  </tbody>
</table>

    </div>
</div>


</body>
</html>

<?php include 'include/footer.php'; ?>