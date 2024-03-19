<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Player Stats</title>
    <style>
        /* Styles for the form */
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Cricket Player Stats</h1>
        </header>
        <!-- Player details form -->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h2>Enter Player Details</h2>
            <label for="player_name">Player Name:</label>
            <input type="text" id="player_name" name="player_name" required><br>

            <label for="player_age">Player Age:</label>
            <input type="number" id="player_age" name="player_age" required><br>

            <label for="player_role">Player Role:</label>
            <select id="player_role" name="player_role" required>
                <option value="Batsman">Batsman</option>
                <option value="Bowler">Bowler</option>
                <option value="All rounder">All rounder</option>
            </select><br>

            <input type="submit" value="Submit">
        </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $player_name = $_POST['player_name'];
        $player_age = $_POST['player_age'];
        $player_role = $_POST['player_role'];

        // Sample match statistics (you can replace this with actual data)
        $matches_played = 20;
        $not_outs = 5;
        $innings = $matches_played - $not_outs;
        $total_runs = 850;
        $highest_score = 120;
        $batting_average = ($innings > 0) ? number_format($total_runs / $innings, 2) : 0;

        // Display player stats in a table
        echo "<h2>Player Statistics</h2>";
        echo "<table>";
        echo "<tr><th colspan='2'>Player Information</th></tr>";
        echo "<tr><td>Name:</td><td>$player_name</td></tr>";
        echo "<tr><td>Age:</td><td>$player_age</td></tr>";
        echo "<tr><td>Role:</td><td>$player_role</td></tr>";
        echo "<tr><th colspan='2'>Batting Statistics</th></tr>";
        echo "<tr><td>Matches Played:</td><td>$matches_played</td></tr>";
        echo "<tr><td>Innings:</td><td>$innings</td></tr>";
        echo "<tr><td>Not Outs:</td><td>$not_outs</td></tr>";
        echo "<tr><td>Total Runs:</td><td>$total_runs</td></tr>";
        echo "<tr><td>Highest Score:</td><td>$highest_score</td></tr>";
        echo "<tr><td>Batting Average:</td><td>$batting_average</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
