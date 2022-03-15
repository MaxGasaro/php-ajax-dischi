<?php
    require __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <div class="container flex">
            <div class="header-left">
                <div class="img">
                    <img src="./Spotify_App_Logo.svg.png" alt="logo spotify">
                </div>
            </div>
            <div class="header-right">

            </div>
        </div>
    </header>
        
    <main>

        <div class="container">
            <div id="discs-container">
                <?php
                    foreach($database as $disc) {
                        echo "<div class='disc'>";
                        echo "<img src='{$disc['poster']}' />";
                        echo "<h3> {$disc['title']} </h3>";
                        echo "<small> {$disc['author']} </small>";
                        echo "<strong> {$disc['year']} </strong>";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
            
    </main>
</body>
</html>