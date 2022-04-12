<!DOCTYPE html>
<html>
    <head>
        <title>
            Product list
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        <?php
            session_start();
            $products = array();

            if(isset($_SESSION["products"])){
                $products = $_SESSION["products"];
            }

            array_push($products, array(
                "productName" => $_POST["productName"],
                "productPrice" => $_POST["productPrice"],
                "productDescription" => $_POST["productDescription"]
            ));

            $_SESSION["products"] = $products;

        ?>
        <form action="product_add.php">
            <div class="container">
                <h1 class="bg-primary text-white p-3">
                    Product list
                </h1>
                <div class="container">
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
                <table class="table table-striped table" background-color="black">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($products as $arrayx => $product){
                                echo "<tr>";
                                echo "<td>".$product["productName"]."</td>";
                                echo "<td>".$product["productPrice"]."</td>";
                                echo "<td>".$product["productDescription"]."</td>";
                                echo "<td>";
                                echo "<form action='product_list.php' method='post'>";
                                echo "<button type='submit' class ='btn btn-primary' onclick = 'function();'>Delete</button>";
                                echo "</form>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            function delete(){
                                unset($_SESSION["products"]);
                            }
                        ?>
                    </tbody>
                </table>
                <!--
                    Add the PHP code as well as the table
                    that iterates all products in $_SESSION["products"]
                    Every time a new product gets added via product_add.php, it should
                    be display on this table.
                    
                    You should also implement the PHP logic to delete the selected product
                    from $_SESSION["products"]. You could use something like:
                    
                    foreach ($products as $key => $product)
                    
                    in order to retrieve the key of the element that needs to be deleted.
                    The "Delete" button should be inside of a POST form that sends the key
                    of the element to be deleted.
                    
                -->
            </div>
        </form>
    </body>
</html>
