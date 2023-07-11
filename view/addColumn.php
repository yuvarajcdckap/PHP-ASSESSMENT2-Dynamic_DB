<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Column</title>
    <link rel="stylesheet" href="view/addColumn.css" type="text/css">
</head>

<body>
    <h1>Insert Values</h1>
    <div class="container">
        <form action="/createColumn" method="post" class="DbForm">
            <label for="select table">select database:</label>
            <select name="selectedDb">
                <?php if (!empty($db["selectedDb"])) : ?>
                    <option value=" <?php echo ($db["selectedDb"]); ?>"> <?php echo ($db["selectedDb"]); ?></option>
                    <?php foreach ($dbList as $name => $lists) : ?>
                        <option value="<?php echo $lists->Database ?>"><?php echo $lists->Database ?></option>
                    <?php endforeach; ?>
                <?php else : ?>
                    <?php foreach ($dbList as $name => $lists) : ?>
                        <option value="<?php echo $lists->Database ?>"><?php echo $lists->Database ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            <button type="submit">Enter</button>
        </form>

        <form action="/createColumn" method="post">
            <input value="<?php echo ($db["selectedDb"]); ?>" type="hidden" name="dbName">
            <label for="select table">select table:</label>
            <select name="tableName">
                <?php if (isset($tableList)) : ?>
                    <?php echo $db['tableName']; ?>
                    <?php foreach ($tableList as $tablesNameList => $tableName) : ?>
                        <option value="<?php echo $tableName->tablesNameList; ?>"> <?php echo $tableName->tablesNameList; ?> </option>
                    <?php endforeach; ?>
                <?php else : ?>
                    <option> <?php echo 'please select a database' ?> </option>
                <?php endif; ?>
            </select>
            <button type="submit">Enter</button>
        </form>

        <form action="/insertValues" method="post">
            <input value="<?php echo $_SESSION['dbName']; ?>" name="db" type="hidden">
            <input value="<?php echo $_SESSION['tableName']; ?>" name="table" type="hidden">
            <div class="cl-Name-Div">
                <table>
                    <tr>
                        <th>Column Name</th>
                        <th>Value</th>
                    </tr>
                    <?php foreach ($column as $columnName => $columns) : ?>
                        <tr>
                            <th><?php echo $columns->column_name ?></th>
                            <td><input name="<?php echo $columns->column_name ?>" placeholder="Enter values" require></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <button type="submit" class="submitBtn">submit</button>
            </div>
        </form>

        <div class="backBtn">
            <button><a href="/">back</a></button>
        </div>
    </div>

</body>

</html>