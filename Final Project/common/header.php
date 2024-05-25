<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
    <title>Header</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            display: flex;
            column-gap: 75px;
            align-items: center;
            justify-content: center;
            width: 100%;
            background-color: rgb(0, 0, 0);
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
            .header {
                column-gap: 20px;
                /* position: absolute; */
            }
        }
    </style>
</head>
<body>
    <!-- <div class="main"> -->
        <div class="header">
        <a href="/Final Project/index.php" class="<?php echo ($current_page == 'index') ? 'active' : ''; ?>">Homepage</a>
        <a href="../action/note.php" class="<?php echo ($current_page == 'create_note') ? 'active' : ''; ?>">Create Note</a>
        <a href="../action/saved.php" class="<?php echo ($current_page == 'view_notes') ? 'active' : ''; ?>">View Notes</a>
        <a href="../action/update_note.php" class="<?php echo ($current_page == 'update_note') ? 'active' : ''; ?>">Update Note</a>
        <a href="../action/delete.php" class="<?php echo ($current_page == 'delete_note') ? 'active' : ''; ?>">Delete Note</a>
        <a href="/Final Project/about.php" class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>">About</a>
        </div>
    <!-- </div> -->
</body>
</html>