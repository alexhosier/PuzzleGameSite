<?php

include "./includes/database.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Discord Metatags -->
        <meta property="og:title" content="Escape Room Leaderboards" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://leaderboard.alexhosier.dev" />
        <meta property="og:image" content="https://i.imgur.com/Oh8FLLT.jpg" />
        <meta property="og:description" content="The official leaderboards for the VR Escape Room Game" />

        <title>Puzzle Game Leaderboard</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <div id="container-fluid">
            <table class="table table-dark table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="display-5" scope="col">#</th>
                        <th class="display-5" scope="col">Name</th>
                        <th class="display-5" scope="col">Time</th>
                    </tr>
                </thead>
                <tbody id="results">
                </tbody>
            </table>
        </div>

        <script>
            $("#results").load("loadResults.php");

            setInterval(() => {
                $("#results").load("loadResults.php");
            }, 1000);
        </script>
    </body>
</html>