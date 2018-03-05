<style>

.connect2{
    height:100vh;
    width:100vw;
    display:flex;
    justify-content:center;
    align-items:center;
    
}
.login{
    margin: auto;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    z-index: 3;
    padding: 30px;
    /*! background: linear-gradient(#3d89ff,#0f92b8); */
    box-shadow: 0px 0px 2px 0px #fff;
    background-color: #2996a8;
}
.btn-connect{
    width: 320px;
    height: 50px;
    border-radius: 66px;
    border: none;
    background-color: #151515;
    color: #fff;
    margin-top: 30px;

}
.style-con{
    background-color: #fff;
    padding: 5px 10px;
    margin: 5px;
    border-radius: 80px;
    width:300px;
    height:40px;
    font-size:30px;
    display: flex;
    align-items: center;
}
.style-con input{
    border:none;
    
    font-size: 15px;
    padding: 0 20px;
}
.style-con i{
    width:20px;
    padding: 5px;
}
.form-con{
    display: flex;
    flex-direction: column;
    align-items: center;
}
.avatar img{
    width: 150px;
    border-radius: 100px;
    margin-bottom: 50px;
}
.gradient{
    width:100vw;
    height:100vh;
    position: absolute;
    top: 0;
    background:linear-gradient(#00c6fb,#005bea);
    opacity: 0.6;
    z-index: 2;
}

</style>
<?php 
include('header.php');
?>
<div class="connect2">
    <div class="gradient"></div>

    <div class="homepage-hero-module">
        <div class="video-container">
            <video autoplay loop class="fillWidth">
            <source src="../img/Office-Day.mp4" type="video/mp4" />
        </video>
        </div>
    </div>

    <div class="login">
        <div class="avatar">
            <img src="../img/avatar.png" alt="">
        </div>
        <form class="form-con" action="connexion.php" method="post">
            <div class="username-con style-con">
                <label for="id"><i class="fa fa-user"></i></label>
                <input type="text" name="id" placeholder="Username">
            </div>
            <div class="password-con style-con">
                <label for="mp"><i class="fa fa-key"></i></label>
                <input type="password" name="mp" placeholder="Password">
            </div>
            <button class='btn-connect'type="submit">Connect</button>
        </form>

        <?php 
        if(isset($_GET['erreur'])){
    ?>
        <span class="error2"><i class="fa fa-info"></i><?= $_GET['erreur']?></span>
        <?php } ?>

    </div>


</div>