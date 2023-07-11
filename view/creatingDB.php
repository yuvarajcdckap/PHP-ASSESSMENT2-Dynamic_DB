<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Create Your Database</h1>
        <div class='form-section'>
            <form action="/createDb" method="POST" onsubmit="return validateForm()">
                <label for="dbname">Please provide a DB Name:</label>
                <input name="DbName" type="text" placeholder="database name" class="dbName">
                <input type="submit" value="Submit" />
            </form>
        </div>
        <div class="backBtn">
            <button><a href="/">back</a></button>
        </div>
    </div>
    <script src="view/home.js"></script>
</body>

</html>