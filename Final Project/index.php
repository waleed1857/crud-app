<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            color: #555555;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        @media screen and (max-width:1024px) {
            .container {
                width: 85%;
                margin: 30px auto;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 style="text-decoration: underline;">Welcome to My Notepad</h1>
        <p>Choose an option:</p>
        <ul>
            <li><a href="/Final Project/action/note.php">Create a New Note</a></li>
            <li><a href="/Final Project/action/saved.php">View Saved Notes</a></li>
            <li><a href="/Final Project/action/update_note.php">Update a Note</a></li>
            <li><a href="/Final Project/action/delete.php">Delete a Note</a></li>
            <li><a href="../Final Project/about.php">About My Notepad</a></li>
        </ul>
    </div>
</body>

</html>