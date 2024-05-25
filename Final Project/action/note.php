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
    <title>New Note</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: rgba(221, 221, 221, 0.795);

}

.main {
    display: flex;
    column-gap: 35px;
    /* height: 100vh; */
}


.panel {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    row-gap: 20px;
    border: 2px transparent;
    /* background-color: rgb(186, 186, 185); */
    background: url("../images/panel.jpg");
    background-size: cover;
    height: 100vh;
    width: 16vw;
    font-weight: 800;
}

.panel a {
    color: white;
    text-decoration: none;
    font-size: 25px;
}

.panel a:hover {
    text-decoration: underline;
}

.txtArea {
    display: flex;
    flex-direction: column;
    row-gap: 35px;
    align-items: center;
    padding: 10px 0;
}

.txtArea form {
    display: flex;
    flex-direction: column;
    row-gap: 20px;
    align-items: center;
    padding: 10px 0;
}

#text {
    resize: none;
    height: 65vh;
    width: 75vw;
    border: 2px transparent;
    box-shadow: 0 0 10px rgba(5, 5, 5, 0.445);
    border-radius: 5px;
    padding: 10px;
    font-size: 18px;
    font-weight: 600;
}

.txtArea button {
    padding: 10px 20px;
    color: white;
    border: transparent;
    background-color: rgb(144, 144, 144);
}

.txtArea button:hover {
    background-color: rgb(8, 8, 8);
}

.txtArea input {
    border: 2px transparent;
    border-radius: 5px;
    padding: 8px 25px;
}

@media screen and (max-width: 768px) {
    .main {
        flex-direction: column;
        /* width: 100%; */
        /* height: 100%; */
        padding-bottom: 5px;
    }

    .panel {
        width: 100%;
        height: 100%;
        flex-direction: row;
        column-gap: 10px;
        padding: 10px 0;
    }

    .panel a {
        font-size: 18px;
    }

    #text {
        /* width: 100%; */
        margin: auto;
    }

    .main .txtArea {
        padding: 20px 0;
    }

    .txtArea input {

        padding: 8px 6px;
    }

    .txtArea button {
        padding: 10px 15px;
    }
}

@media (min-width:768px) and (max-width: 1024px) {
    .main {
        flex-direction: column;
        /* width: 100%; */
        /* height: 100%; */
        /* padding: 5px 0 0 0; */
    }

    .panel {
        width: 100%;
        height: 100%;
        flex-direction: row;
        column-gap: 60px;
        padding: 20px 0;
    }

    .panel a {
        font-size: 18px;
    }

    #text {
        /* width: 100%; */
        margin: auto;
    }

    .main .txtArea {
        padding: 20px 0;
    }

    .txtArea input {

        padding: 8px 6px;
    }

    .txtArea button {
        padding: 10px 15px;
    }
}
    </style>
    <title>New Note</title>
</head>
<body>
    <div class="main">
        <div class="panel">
            <a href="/Final Project/index.php">Homepage</a>
            <a href="../action/saved.php">Saved Notes</a>
            <a href="../action/update_note.php">Update</a>
            <a href="../action/delete.php">Delete</a>
            <a href="/Final Project/about.php">About</a>
        </div>
        <div class="txtArea">
            <h1 style="text-decoration: underline;">New Note Section</h1>
            <form action="<?php echo BASEURL . "action/sign_in.php";?>" method="POST">
            <input type="text" id="key" placeholder="Enter the title!" name="key">
                <textarea id="text" placeholder="Enter your note!" name="text"></textarea>
                <div><button id="save" >Save</button></div>
            </form>
        </div>
    </div>
</body>
</html>