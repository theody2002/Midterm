<?php
include_once 'classes/class.user.php';
include_once 'classes/class.product.php';
include_once 'classes/class.receive.php';
include_once 'classes/class.release.php';
include_once 'classes/class.inventory.php';
include 'config/config.php';

$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$user = new User();
$product = new Product();
$receive = new Receive();
$release = new Release();
$inventory = new Inventory();
if (!$user->get_session()) {
    header("location: login.php");
}
$user_id = $user->get_user_id($_SESSION['user_email']);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Floreria</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css?<?php echo time(); ?>">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body> 
        <div id="wrapper">
            <div id="menu">
                <div class ="logo"><h3>Floreria<span>Flowers</span></h3></div>
                <a href="index.php?page=receive">SUPPLIER</a>
                <a href="index.php?page=release">SALES</a>
                <a href="index.php?page=inventory">INVENTORY</a>
                <a href="index.php?page=products">PRODUCTS</a>
               <a href="index.php?page=users"><i class='fas fa-user-alt' style='font-size:23px'></i></a>
                <div class="logout"><a href="logout.php" >Log Out</a></div>
            </div>
           
        </div>
        <div id="content">
            <?php
            switch ($page) {
                case 'products':
                    require_once 'products-module/index.php';
                    break;
                case 'receive':
                    require_once 'receive-module/index.php';
                    break;
                case 'inventory':
                    require_once 'inventory-module/index.php';
                    break;
                case 'release':
                    require_once 'release-module/index.php';
                    break;
                case 'users':
                    require_once 'users-module/index.php';
                    break;
                default:
                    require_once 'main.php';
                    break;
            }
            ?>
        </div>
  

</body>

</html>