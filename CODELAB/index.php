<?php

include("CODELAB/Controller/ProductController.php");

use Controller\ProductController;

$productController = new ProductController;

echo $productController->getAllProduct();
