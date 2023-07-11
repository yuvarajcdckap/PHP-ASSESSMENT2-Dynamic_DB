<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
    <link rel="stylesheet" href="view/tableView.css" type="text/css">
</head>

<body>
    <div class="mainDiv">
        <h1>Create Table</h1>
        <div class="container">
            <div>
                <form action="/createTable" method="post">
                    <div class="DbInput">
                        <label for="Database selection" class="">Select Database:</label>
                        <select name="DbName">
                            <?php foreach ($DbList as $DbNames => $DbName) : ?>
                                <option value="<?php echo $DbName->Database ?>"><?php echo $DbName->Database ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="tableInput">
                        <div class="inputs">
                            <div class="input-group">
                                <label for="tableName" class="">Enter Table Name<span>*</span></label>
                                <input type="text" name="tableName" placeholder="Table Name" require>
                                <div class="columnMainDiv">
                                    <label for="column Name">Enter Column Name<span>*</span></label>
                                    <input type="text" name="columnName[]" placeholder="Column Name" class="column" require>
                                    <select name="dataTypes[]" require>
                                        <option value="INT">Number</option>
                                        <option value="VARCHAR(255)">Text</option>
                                        <option value="DATE">Date Time</option>
                                    </select>
                                </div>
                            </div>
                            <div class="buttonDiv">
                                <input type="button" class="createTableRow" value="Add More Rows">
                                <button type="submit">Create Table</button>
                            </div>
                        </div>
                </form>
            </div>
            <div>
            </div>
        </div>
    </div>
    <div class="backBtn">
        <button><a href="/">back</a></button>
    </div>
    <script src="/view/tableView.js"></script>
</body>

</html>