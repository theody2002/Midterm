<div id="third-menu">
    <a href="index.php?page=products">List of Products</a>-
    <a href="index.php?page=products&action=create">Add Product</a>-
    <a href="index.php?page=products&action=types">Product Types</a>
</div>
<div id="subcontent">
    <?php
    switch ($action) {
        case 'create':
            require_once 'products-module/create-product.php';
            break;
        case 'modify':
            require_once 'products-module/modify-product.php';
            break;
        case 'profile':
            require_once 'products-module/view-product.php';
            break;
        case 'types':
            require_once 'products-module/list-product-types.php';
            break;
        case 'upload':
            require_once 'products-module/imageupload.php';
            break;
        default:
            require_once 'products-module/main.php';
            break;
    }
    ?>
</div>