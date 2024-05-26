<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
    <title>Saved notes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: rgba(221, 221, 221, 0.795);
            overflow-y: scroll;

        }

        .main {
            height: 100vh;
            padding: 10px 0;
        }

        .area {
            text-align: center;
        }

        #display {
            display: flex;
            flex-direction: column;
            row-gap: 10px;
            align-items: center;

        }

        #display div {

            border: 3px transparent;
            background-color: whitesmoke;
            box-shadow: 0 0 10px rgba(5, 5, 5, 0.445);
            width: 80%;
            margin: auto;
            padding: 5px 0 5px 5px;
        }

        #display div:hover {
            color: white;
            background-color: rgba(179, 172, 172, 0.678);
        }
        @media screen and (max-width: 768px) {
            .main{
                height: 100%;
                padding: 10px 0;
            }
            }
    </style>
</head>

<body>
<?php $current_page = 'view_notes'; ?>
<?php include("../common/header.php"); ?>
    <div class="main">
        <div class="area">
            <h1 style="text-decoration: underline;">Saved Notes Section</h1>
            <p style="margin-bottom: 10px;">In this section, user will see all notes which he saved.</p>
        </div>


        <div id="display">
                <?php
include("../includes/config.php");
include("../includes/connection.php");
$conn = connect_db();
$query = "SELECT Title,Time,Content FROM `all-notes`";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>" . "Time: " . htmlspecialchars($row['Time']) . "</h2>";
        echo "<h2>" . "Key: " . htmlspecialchars($row['Title']) . "</h2>";
        echo "<p>" . "Note: " . "<br>" . htmlspecialchars($row['Content']) . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>No saved notes found.</p>";
}
$conn->close();
?>
            <!-- <div id="content">
</div> -->
        </div>

    </div>
</body>

</html>