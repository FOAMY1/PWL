<?php
session_start();
include_once 'conf.php';
if (!isset($_SESSION['login'])) {
    $_SESSION['level'] = "";
    $_SESSION['name'] = "Unknown User";
    $_SESSION['gambar'] = "unknown.jpg";
    error_reporting(E_ERROR | E_PARSE);
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-fixed-top">
        <div class="container">
        <a class="navbar-brand" <?php
            if (isset($_SESSION['login'])) {?>
            href="index.php?pilih=user&m=showuser"
            <?php }else
            {?>
            href="index.php?pilih=login"
            <?php
            }?>>
            <img src="assets/users/<?php echo $_SESSION['gambar'] ?>" width="30" height="30" class="d-inline-block align-top" alt="">
            <?php echo $_SESSION['name']; ?></a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php?pilih=home">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php
            if (isset($_SESSION['login'])) {
                if ($_SESSION['level'] == "pelanggan") { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pilih=mycart">MyCart</a>
                    </li>
                <?php
                } else if ($_SESSION['level'] == "publisher") { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pilih=mycart">MyBuyer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pilih=upload">Upload Buku Baru</a>
                    </li>
                <?php
                } ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pilih=logout">Logout</a>
                </li>
            <?php
            } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pilih=login">Login/Register</a>
                </li>
            <?php
            }
            ?>
        </ul>
        </div>
    </nav>
    <?php
    if (!is_null(get('pilih'))) {
        switch (get('pilih')) {
            case 'mycart':
                inc('membeli/view/viewshowcart');
                break;
            case 'cart':
                inc('membeli/view/viewaddtocart');
                break;
            case 'upload':
                inc('book/view/viewaddbooks');
                break;
            case 'home':
                switch(get('m')){
                    case 'lihat':
                        inc('book/view/viewbooks');
                        break;
                        case 'edit':
                            inc('book/view/vieweditbooks');
                        break;
                    default:
                        inc('book/view/viewshowbooks');
                        break;
                }
                break;
                case 'user':
                    switch(get('m')){
                        case 'showuser':
                            inc('user/view/viewuser');
                            break;
                        case 'edituser':
                            inc('user/view/edituser');
                            break;
                        default:
                        inc('user/view/viewuser');
                            break;

                    }
                break;
                case 'login':
                    switch(get('m')){
                        case 'register':
                            inc('user/view/register');
                            break;
                        default:
                            inc('user/view/login');
                            break;
                    }
                        break;
                    case 'logout':
                        inc('user/view/logout');
                        break;
            default:
                inc('users/view/viewusers');
                break;
        }
    } else {
        inc('users/view/viewusers');
    } ?>
    
</body>

</html>