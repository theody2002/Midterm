<div id="third-submenus">
    <a href="index.php?page=users">User List</a>-<a href="index.php?page=users&action=create">Add User</a>
</div>
<div id="subcontent">
    <?php
    switch ($action) {
        case 'create':
            require_once 'users-module/create-user.php';
            break;
        case 'modify':
            require_once 'users-module/modify-user.php';
            break;
        case 'profile':
            require_once 'users-module/view-profile.php';
            break;
        case 'result':
            require_once 'users-module/search-user.php';
            break;
        default:
            require_once 'users-module/main.php';
            break;
    }
    ?>
</div>