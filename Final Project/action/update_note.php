<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Section</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            /* font-family: Arial, sans-serif; */
            background-color: #f0f0f0;
            overflow: hidden;
        }
        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            /* height: 100vh; */
            display: flex;
            flex-direction: column;
            row-gap: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
            width: 355px;
        }
        form {
            display: flex;
            flex-direction: column;
            row-gap: 20px;
            align-items: center;
            justify-content: center;
        }
        input, textarea {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            resize: none;
        }
        button {
            padding: 10px;
            font-size: 16px;
            background-color: black;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #555555;
        }
    </style>
</head>
<body>
    <?php $current_page = 'update_note'; ?>
    <?php include("../common/header.php"); ?>
    <div class="main">

        <div class="container">
            <h1 style="text-decoration: underline;">Update Note Section</h1>
            <form method="post" action="">
                <label for="title">Note Title:</label>
                <input type="text" id="title" name="title" required>
            <button type="submit" name="fetch">Fetch Note</button>
        </form>

        <?php
        if (isset($_POST['fetch'])) {
            require_once("../Final Project/includes/config.php");
            require_once("../Final Project/includes/connection.php");

            $conn = connect_db();
            
            $title = ($_POST['title']);
            $query = "SELECT Title, Content FROM `all-notes` WHERE Title = '$title'";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $content = $row['Content'];
            } else {
                echo "<p>No note found with title '$title'</p>";
            }

            $conn->close();
        }
        ?>

        <?php if (isset($title) && isset($content)): ?>
        <form method="post" action="">
            <input type="hidden" name="original_title" value="<?php echo htmlspecialchars($title); ?>">
            <label for="new_title">New Title:</label>
            <input type="text" id="new_title" name="new_title" value="<?php echo htmlspecialchars($title); ?>" required>
            <label for="content">Content:</label>
            <textarea id="content" name="content" required><?php echo htmlspecialchars($content); ?></textarea>
            <button type="submit" name="update">Update Note</button>
        </form>
        <?php endif; ?>

        <?php
        if (isset($_POST['update'])) {
            require_once("../Final Project/includes/config.php");
            require_once("../Final Project/includes/connection.php");
            
            $conn = connect_db();

            $original_title = $conn->real_escape_string($_POST['original_title']);
            $new_title = $conn->real_escape_string($_POST['new_title']);
            $content = $conn->real_escape_string($_POST['content']);
            
            $query = "UPDATE `all-notes` SET Title='$new_title', Content='$content' WHERE Title='$original_title'";
            
            if ($conn->query($query) === TRUE) {
                echo "<p>Note updated successfully</p>";
            } else {
                echo "Error updating note: " . $conn->error;
            }

            $conn->close();
        }
        ?>
    </div>
</div>
</body>
</html>