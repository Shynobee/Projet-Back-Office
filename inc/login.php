<?php 
include('header.php');
?>
<div class="connect">

<h1>Linagora</h1>

<div class="homepage-hero-module">
    <div class="video-container">
        <video autoplay loop class="fillWidth">
            <source src="../img/Office-Day.mp4" type="video/mp4" />
        </video>
    </div>
</div>

    <form class="form-co" action="connexion.php" method="post">
    <div class="username-co style-co">
        <label for="id"><i class="fa fa-user"></i> | </label>
        <input type="text" name="id" placeholder="Username">
    </div>
    <div class="password-co style-co">
        <label for="mp"><i class="fa fa-key"></i> | </label>
        <input type="password" name="mp" placeholder="Password">
    </div>
    <button type="submit">Connect</button>
    </form>

    <?php 
        if(isset($_GET['erreur'])):
    ?>
    <span class="error"><i class="fa fa-info"></i><?= $_GET['erreur']?></span>
        <?php endif; ?>
</div>
