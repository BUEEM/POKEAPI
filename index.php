<?php
    include 'form-handler.php';
    $url = 'https://pokeapi.co/api/v2/pokemon-color/black';
    $curl = curl_init($url);
    $data = file_get_contents($url);
    $pokemon = json_decode($data);  
    $result = array();
    // var_dump($pokemon)
    echo '<pre>';
    var_dump($data);
    echo '</pre>';

    $colorChoosen = []
 ?>



<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Find your match !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>

    <div class="QCM">
    <h2>What's your favorite color ?</h2>
    <div class="color">
    <form action="#" method="get">

            <!-- COLORS -->
        <!-- <input type="radio" name="color" value="red" required value="<?= $users_color ?>"> Red <br>
        <input type="radio" name="color" value="blue" required value="<?= $users_color ?>"> Blue <br>
        <input type="radio" name="color" value="purple" required value="<?= $users_color ?>"> Purple <br>
        <input type="radio" name="color" value="pink" required value="<?= $users_color ?>"> Pink <br>
        <input type="radio" name="color" value="black" required value="<?= $users_color ?>"> Black <br>
        <input type="radio" name="color" value="brown" required value="<?= $users_color ?>"> Brown <br>
        <input type="radio" name="color" value="green" required value="<?= $users_color ?>"> Green <br>
        <input type="radio" name="color" value="white" required value="<?= $users_color ?>"> White <br>
        <input type="radio" name="color" value="gray" required value="<?= $users_color ?>"> Gray <br>
        <input type="radio" name="color" value="yellow" required value="<?= $users_color ?>"> Yellow <br> -->


            <!-- PHP COLORS -->
       
            <div class="field">
                 Color
                 <?php foreach ($colors as $_color): ?>
                 <br>
                 <label>
                     <input
                        type="radio"
                        name="color"
                        value="<?= $_color ?>"
                        <? $_POST['color'] === $_color ? 'checked' : '' ?>
                    >
                    <?php echo($_color) ?>
                 </label>

                <?php endforeach; ?>
            </div>
        <input type="submit">
        </div>
  
            <!-- PLACES -->
    <h2> Where would you like to go in summer ? </h2>
    <div class="places">
    <input type="radio" name="place" value="sea" required value="<?= $habitat?>"> Sea Trip
    <input type="radio" name="place" value="mountain" required value="<?= $habita?>"> Mountain
    <input type="radio" name="place" value="forest" required value="<?= $habita?>"> Forest
    <input type="radio" name="place" value="cave" required value="<?= $habita?>"> Cave
    <input type="radio" name="place" value="grassland" required value="<?= $habita?>"> Grass field
    <input type="radio" name="place" value="urban" required value="<?= $habita?>"> Cities
    <input type="radio" name="place" value="waters-edge" required value="<?= $habita?>"> The beach 
    <input type="radio" name="place" value="rough-terrain" required value="<?= $habita?>"> Desertic place

            <!-- PHP PLACES -->

             <?php
                     $url_habitat="https://pokeapi.co/api/v2/pokemon-habitat/";
                     $data_habitat = file_get_contents($url_habitat);
                     $pokemon_habitat = json_decode($data_habitat); 
                    // var_dump($pokemon_habitat);
        
             // RECUPERATION DES DONNEES
                    foreach ($pokemon_habitat->results as $habita) {
                         echo $habita->name.'<br>';
                     }
        ?>
        <p>Your place is <?php echo $_GET['place'] ?> </p>

    </div>
                 <!-- POKEMON NATURE -->

    <div class="Nature">
        <h2>Would you say you are more :</h2>
    <input type="radio" name="nature" value="bold" required value="<?= $user_nature?>"> Bold 
    <input type="radio" name="nature" value="calm" required value="<?= $user_nature?>"> Calm
    <input type="radio" name="nature" value="modest" required value="<?= $user_nature?>"> Modest
    <input type="radio" name="nature" value="gentle" required value="<?= $user_nature?>"> Gentle
    <input type="radio" name="nature" value="quirky" required value="<?= $user_nature?>"> Quirky
    <input type="radio" name="nature" value="rash" required value="<?= $user_nature?>"> Rash
    <input type="radio" name="nature" value="jolly" required value="<?= $user_nature?>"> Jolly
    <input type="radio" name="nature" value="hasty" required value="<?= $user_nature?>">Hasty

            <!-- PHP NATURE  -->
            <?php
            $url_nature="https://pokeapi.co/api/v2/nature/";
            $data_nature = file_get_contents($url_nature);
            $pokemon_nature = json_decode($data_nature); 
            
            // RECUPERATION DES DONNEES 
            
            foreach ($pokemon_nature->results as $nature) {
                echo $nature->name.'<br>';
            }
            ?>
    </div>
      
        <input type="submit">
    </form>
    </div>
</body>
</html>