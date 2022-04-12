<!DOCTYPE html>
<html>
    <head>
        <title>
            Product add
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        <form method="post" action="product_list.php">
            <div class="container">
                <h1 class="bg-primary text-white p-3">
                    Product add
                </h1>
                <div class="container">
                    <labe>Product Name</labe>
                    <input type="text" id="productName" name="productName" class="form-control"></input>
                </div>
                <div class="container">
                    <labe>Product Price</labe>
                    <input type="text" id="productPrice" name="productPrice" class="form-control"></input>
                </div>
                <div class="container">
                    <labe>Product Description</labe>
                    <textarea type="text" id="productDescription" name="productDescription" class="form-control"></textarea>
                </div>
                <div class="container">
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
                <!--
                    Create the PHP code as well as the product registration form
                    Every new product should be added to a $_SESSION["products"]
                    variable as an associative array.
                    
                    You must also use $_POST to get the values of all fields in the form
                    so these can be added to the array
                -->
            </div>
        </form>
    </body>
</html>
