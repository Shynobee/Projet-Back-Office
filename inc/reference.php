<?php
include('header.php');
if($_SESSION['newsession'] == NULL) {
    header('Location: login.php');
}
if(isset($_POST['searchbar'])){
$_SESSION['search'] = $_POST['searchbar'];
}
switch ($_GET['page']){
    case 'HOME':
        break;
    case 'CLIENT LIST':
        break;
    case 'ADD NEW CLIENT':
        break;
    case 'EDIT CLIENT':
        break;
    case 'VIEW CLIENT':
        break;
    default:
        $_GET['page']='HOME';
        break;

}
?>


<main>
    <div class="container">
        <aside class="sidebar">
            <div class="background">    
                <header class="profile">
                    <i class="fa fa-user"></i>
                    <span><?=$_SESSION['newsession']?></span>
                </header>
                <nav class="navigation">
                    <ul>
                        <li class="<?php if($_GET['page']=='HOME'){ echo 'isactive';} ?>"> 
                            <a href="?page=HOME">
                                <i class="fa fa-home"></i>HOME
                            </a>
                        </li>
                        <li class="<?php if($_GET['page']=='CLIENT LIST'){ echo 'isactive';} ?>">
                            <a href="?page=CLIENT LIST&num=0">
                                <i class="fa fa-list-ul"></i>CLIENT LIST
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="main-container">
            <nav class="navbar">    
                <div class="nav-container">
                    <h2><?= $_GET['page'] ?></h2>
                    <div class="custom-search">
                        <form action="" method="post">
                            <label for="searchbar"><i class="fa fa-search"></i></label>
                            <input value="<?= $_SESSION['search'] ?>" type="search" name="searchbar" placeholder="Search"/>
                        </form>
                    </div>
                    <div class="custom-logout">
                        <form action="logout.php">
                            <button type="submit"><i class="fa fa-times"></i> Sign Out</button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="content">
            <?php include 'content.php'?>
            </div>
        </div>
    </div>
</main>







