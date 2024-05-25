<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
    <title>About Section</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            row-gap: 10px;
            height: 100vh;
            background-color: rgb(204, 202, 201);
        }

        .main p {
            padding: 4px 20px;
        }

        .about {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px transparent;
            background-color: white;
            box-shadow: 0 0 10px rgba(5, 5, 5, 0.445);
            width: 45%;
            margin-top: 50px;

        }

        .header {
            display: flex;
            column-gap: 75px;
            align-items: center;
            justify-content: center;
            width: 100%;
            background-color: rgb(0, 0, 0);
            bottom: 0px;
            padding: 15px 0;
        }

        .header a {
            text-decoration: none;
            color: white;
        }

        .header a:hover {
            text-decoration: underline;
        }

        @media screen and (max-width: 1024px) {


            .about {
                width: 90%;
                margin: auto;
            }

            .header {
                column-gap: 35px;
                /* position: relative; */
            }
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="header">
            <a href="../Final Project/action/note.php">New Note</a>
            <a href="../Final Project/action/saved.php">Saved Notes</a>
            <a href="../Final Project/action/update_note.php">Update</a>
            <a href="../Final Project/action/delete.php">Delete</a>
        </div>

        <div class="about">
            <h1>About Notepad</h1>
            <p>This notepad has 4 sections.
            <ul>
                <li>New Note Section</li>
                <li>Saved Notes Section</li>
                <li>Update Notes Section</li>
                <li>Delete Notes Section</li>
            </ul>
            </p>
            <p>On <strong>New Note</strong> section, user will be able to make notes. This section has an input field to
                enter the key.
                This
                key specify all the user's notes.
                It also has a side panel to go to the other sections.
            </p>
            <p><strong>In Saved Section</strong>, user will be able to see all the saved notes.
            </p>
            <p><strong>In Update Section</strong>, user can Update the note by entering the key.</p>
            <p><strong>In Delete Section</strong>, user will be able to delete the specific note by input the key of
                that note.</p>
        </div>
    </div>


</body>

</html>