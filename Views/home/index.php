<div class="login">
    <?php

    if($_SESSION['id'] == ""){
        print "Hello, Anonymous :)<br><hr>";
        print "Please, register ot login from buttoms here:";
    }

    ?>

    <a href="register.php">Register</a>
    <a href="login.php">Login</a>

</div>

<style>
    body {
        background-color: lightyellow;
    }

    a {
        background-color: darkorange;
        border-radius: 15px;
        color: white;
        padding: 1em 1em;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }

    div.login{
        margin-left: auto;
        margin-right: auto;
    }
</style>