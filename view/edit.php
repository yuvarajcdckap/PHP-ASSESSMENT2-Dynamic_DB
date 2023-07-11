<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php foreach($products as $product):?>
    <div class="container">        
    <h1>Edit page</h1>  
    <div class='form-section'>
    <form action="/update" method="POST" enctype="multipart/form-data">
            <div>
                <label for="">product Name</label>
                <input type="text" placeholder="productName" name="name" value="<?=$product->product_name;?>">
            </div>
            <div>
                <label for="">productImage<span>*</span></label>
                <input type="file" placeholder="product_image" name="image" require>
            </div>
            <div>
                <label for="">product_SKU<span>*</span></label>
                <input type="text" placeholder="product_SKU" name="sku" require class='sku' value="<?=$product->SKU;?>">
            </div>
            <div>
                <label for="">product_price<span>*</span></label>
                <input type="number" placeholder="product_price" name="price" require value="<?=$product->price;?>">
            </div>
            <div>
                <label for="">Brand</label>
                <select name="brand" id="products" class='select'>
                    <option ><?=$product->brand;?></option>
                    <option value="dell">Dell</option>
                    <option value="lenovo">Lenovo</option>
                    <option value="apple">Apple</option>
                    <option value="acer">Acer</option>
                </select>
            </div>
            <div>
                <label for="">Manufacture Date</label>
                <input type="date" placeholder="Manufacture Date" name="mfd" value="<?=$product->manufacture_date;?>">
            </div>
            <div>
                <label for="">Stock Availablity</label>
                <input type="number" placeholder="Stock Availablity" name="stk_avl" value="<?=$product->available_stocks;?>">
            </div>
            <button type="submit" name='update' value="<?=$product->id;?>">Submit</button> <a class='list-link' href="/list"> ⬅ Go back</a>
        </form>
        <?php endforeach;?>
    </div>
</div>
</body>
</html>