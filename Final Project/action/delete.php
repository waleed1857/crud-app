<?php
require_once("../includes/config.php");
require_once("../includes/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
    <title>Delete Section</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {overflow: hidden;}

.main {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: rgb(228, 225, 225);
}

input {
    border: 2px solid black;
    border-radius: 5px;
    padding: 8px 10px;
}

.area {
    display: flex;
    flex-direction: column;
    align-items: center;
    row-gap: 20px;
    border: 3px transparent;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 15px;
}

.area p {
    padding: 0 10px;
}

form {
    display: flex;
    column-gap: 10px;
    /* flex-direction: column; */
    align-items: center;
    
}
#delBtn {
    padding: 10px 15px;
    color: white;
    background-color: rgb(144, 144, 144);
    border: transparent;
}

#delBtn:hover {
    background-color: black;
}

@media screen and (max-width:768px) {
    .area {
        width: 90%;
    }
}
    </style>
</head>

<body>
<?php $current_page = 'delete_note'; ?>
<?php require_once("../common/header.php"); ?>
    <div class="main">
        <div class="area">
            <h1 style="text-decoration: underline;">Notepad Delete Section</h1>
            <p>In this section, user will enter the key of specific note in order to delete it.</p>
            <form action="<?php echo BASEURL . "/action/delete_in.php";?>" method="POST">
                <input type="text" placeholder="Enter the title!" id="delKey" name="title" required>
                <button id="delBtn">Delete</button>
            </form>
        </div>
    </div>

</body>

</html>