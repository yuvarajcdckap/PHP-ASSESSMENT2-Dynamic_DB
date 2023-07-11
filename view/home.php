<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style type="text/css">
        .container {
            margin-left: 28%;
            background-color: #af2be2;
            display: flex;
            gap: 30px;
            height: 300px;
            width: 600px;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
        }
        h1{
            margin-top: 10%;
            text-align: center;
        }

        form>input {
            height: 50px;
            width: 140px;
            background-color: white;
            border: none;
            outline: none;
            border-radius: 5px;
            font-size: 18px;
        }
        form>input:hover{
            background-color: grey;
        }
    </style>
</head>

<body>
    <h1>Dynamic Database creation</h1>
    <div class="container">
        <?php
        if (isset($_SESSION["empty"])) {
        ?>
            <span><?php echo $_SESSION["empty"] ?></span>
            <?php
            unset($_SESSION["empty"]);
        } else {
            if (isset($_SESSION["success"])) {
            ?>
                <span><?php echo $_SESSION["success"]; ?></span>
        <?php
                unset($_SESSION["success"]);
            }
        }
        ?>
        <form action="/DbPage" method="post">
            <input type="submit" value="create DB">
        </form>

        <form action="/tablePage" method="post">
            <input type="submit" value="create Table">
        </form>

        <form action="/createColumn" method="post">
            <input type="submit" value="Insert Values">
        </form>
    </div>
</body>

</html>