<?php
 include 'header.php';
?>

    <title>Document</title>
</head>
<body>

<!-- header -------------->



<div class="container">
    <div class="login-form">
        <form action="includes/login.inc.php" method="POST">
            <h1>LogIn</h1>
            <p>Username</p>
            <input type="text" name="username" placeholder="Username">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Password">
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</div>






<!-- footer -------------->


<?php
 include 'footer.php';
?>