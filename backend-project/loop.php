<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<table class="table table-striped">
    <tr>
        <th>states</th>
        <th>capital</th>
    </tr>


      <?php

      printStateAndCapital();
      ?>
    
</table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
function printStateAndCapital() {
    $statesAndCapitals = array(

        'Abia'=> 'Umahia',
        'Adamawa'=> 'Yola',
        'Awka Ibom'=> 'Uyo',
        'Anambra'=> 'Awka',
        'Bauchi'=> 'Bauchi',
        'Bayelsa'=> 'Yenagoa',
        'Benue'=> 'Markodi',
        'Borno'=> 'Mardugiri',
        'Cross-river'=>'Calaba',
        'Delta'=> 'Asaba',
        'Ebonyi'=> 'Abakaliki',
        'Edo'=> 'Benin city',
        'Ekiti'=> 'Adokiti',
        'Enugu'=> 'Enugu',
        'Gombe'=> 'Gombe',
        'Imo'=> 'Owerri',
        'Jigawa'=> 'Dutse',
        'Kaduna'=> 'Kaduna',
        'Kano'=> 'Kano',
        'Kastina'=> 'Kastina',
        'Kebbi'=> 'Birnin kebbi',
        'Kwara'=> 'Ilorin',
        'Lagos'=> 'Ikeja',
        'Nasarawa'=> 'Lafi',
        'Niger'=> 'Minna',
        'Ondo'=> 'Akure',
        'Ogun'=> 'Abeokuta',
        'Osun'=> 'Oshogbo',
        'Oyo'=> 'Ibadan',
        'Plateau'=> 'Jos',
        'Rivers'=> 'Portharcourt',
        'Sokoto'=> 'Sokoto',
        'Taraba'=> 'Jalingo',
        'Yobe'=> 'Damaturu',
        'Zamfara'=> 'Gusua',
        
    );
    
    
if(count($statesAndCapitals) > 0) {
    foreach($statesAndCapitals as $key => $value){
        echo "
            <tr>
                    <td>$key</td>
                    <td>$value</td>
             </tr>
         ";
}
} else {
    echo "
        <tr>
                <td>no state</td>
                <td>no capital</td>
         </tr>
     ";
}
}







?>