<?php

require 'vendor/autoload.php';

$valueGreenHouse = $_POST['greenHouseNumber'] ?? 0;
$valueBlueHouse = $_POST['blueHouseNumber'] ?? 0;

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test PHP Anthony Magron</title>
        <link rel="stylesheet" href="./assets/css/normalize.css">
        <link rel="stylesheet" href="./assets/css/index.css">
    </head>
    <body>
        <header>
            <h1>Test PHP <span>Anthony Magron</span></h1>
            <h2><span>Kaizen</span> Agency</h2>
        </header>

        <main>
            <h2>Construisez vos maisons :</h2>
            <p>Indiquez le nombre de maison à construire.</p>

            <form action="index.php" method="post">
                <div>
                    <div class="green little"></div><input type="number" value=<?=$valueGreenHouse?> name="greenHouseNumber" />
                </div>  

                <div>
                    <div class="blue little"></div><input type="number" value=<?=$valueBlueHouse?> name="blueHouseNumber" />
                </div>  

                <div>
                    <input type="submit" value="Construire !">
                </div>
            </form>

            <div class="setRedColor">
                <button id="redButton"></button>
                <p>Colorier les maisons en rouge.</p>
            </div>

            <hr>

            <div class="quartier">
                <div>
                    <?php 
                        if($valueGreenHouse > 0) {
                            for ($i=0; $i < $valueGreenHouse; $i++) { 
                                echo(new MyHouse1())->generate();
                            }
                        }                 
                    ?>                 
                </div>
                <div>
                    <?php 
                        if($valueBlueHouse > 0) {
                            for ($i=0; $i < $valueBlueHouse; $i++) { 
                                echo(new MyHouse2())->generate();
                            }
                        }                   
                    ?>                    
                </div>
            </div>
        </main>
    </body>
    <script src="./assets/js/index.js"></script>
</html>