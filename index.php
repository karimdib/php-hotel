<?php


$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hotels</title>
</head>
<body class="container-md p-5">


<?php 
foreach($hotels as $hotel) {}
 ?>

<table class="table ">
    <thead>
        <tr>
            <?php 
               
               foreach($hotel as $key =>$value){
                    ?>
                    <th><?php echo $key ?></th>
                    <?php
               };            
                ?>
        </tr>
    </thead>
    <tbody>
   <?php
    foreach($hotels as $hotel){
    ?>
      <tr>
        <td><?php echo $hotel['name'] ?></td>
        <td><?php echo $hotel['description'] ?></td>
        <?php if($hotel['parking']=== true){
            ?>
             <td>Disponibile</td>
            <?php 
        }else{
            ?>
            <td>Non disponibile</td>
            <?php
        }
         ?>
        
        <td><?php echo $hotel['vote'] ?></td>
        <td><?php echo $hotel['distance_to_center'] ?> metri</td>
      </tr>
    <?php
};

?>
    </tbody>
</table>

</body>
</html>


<div class="d-none">
      <p><?php echo $hotel['name'] ?></p>
      <p><?php echo $hotel['description'] ?></p>
      <p><?php echo $hotel['parking'] ?></p>
      <p><?php echo $hotel['vote'] ?></p>
      <p><?php echo $hotel['distance_to_center'] ?> metri</p>
</div>

