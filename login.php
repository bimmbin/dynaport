<?php
include 'header.php';

$ipadd = $_SERVER['REMOTE_ADDR'];

$create = new AuthCtrl($ipadd);

// $ipAdd = $create->getUserIp();

// print_r ($ipAdd);

// if($create->ipBel5() == true) {
//     echo "row was below 5 or 0";
// } else if($create->ipRowGreater5() == true) {
//     echo "greter 5";
// } 

?>

    <title>Document</title>
</head>
<body>

<!-- header -------------->



<div class="container">
    <div class="login-form">
        <form action="includes/login.inc.php" method="POST">

        <?php if($create->ipBel5() == true) {?>

            <h1>LogIn</h1>
            <p>Username</p>
            <input type="text" name="username" placeholder="Username">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Password">
            <input type="submit" name="submit" value="Login">

        <?php } else if($create->ipRowGreater5() == true) {?>
            <p>Nice try . . .</p>

        <?php } ?>
        </form>
    </div>
</div>






<!-- footer -------------->


<?php
 include 'footer.php';
?>