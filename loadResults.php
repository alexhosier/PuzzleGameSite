<?php
    // Include database
    include "./includes/database.php";

    // SQL Statement
    $sql = "SELECT * FROM leaderboard ORDER BY play_time ASC LIMIT 25";

    // Fetch the result and process it
    $result = mysqli_query($conn, $sql);

    $number = 1;

    while($row = $result->fetch_assoc()) {
        echo '<tr class="display-6"><th scope="row">' . $number . '</th><td>' . $row['play_name'] . '</td><td>' . $row['play_time'] . '</td></tr>';
        $number = $number + 1;
    }
?>