<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../data/css/style.css">
    <title>Login</title>
</head>
<body>
    <?php
        require('../controller/loginController.php');
    ?>
    <section>
        <header class="header">
            <p>University Management System</p>
        </header>
    </section>
    <section>
        <div class="body">
            <main>
                <div class="formDiv">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post" class="">
                        <div>
                            <p class="formHeader">Login</p>
                        </div>
                        <div>
                            <label for="id" class="label">Student ID</label>
                            <br>
                            <input type="text" name="id" id="id" placeholder="Enter your student ID" value="" class="inputField">
                            <br>
                            <label for="idInfo" id="idInfo" class="labelInfo" ><?php echo $idInfo;?></label>
                            <br>
                            <br>
                            <label for="password" class="label">Password</label>
                            <br>
                            <input type="password" name="password" id="password" placeholder="Enter your Password" value="" class="inputField">
                            <br>
                            <label for="passwordInfo" id="passwordInfo" class="labelInfo" ><?php echo $passwordInfo;?></label>
                            <br>
                            <label for="loginInfo" id="loginInfo" class="labelInfo" ><?php echo $loginInfo;?></label>
                            <br>
                            <br>
                            <input type="submit" name="" id="" value="Login" class="success">
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </section>
    <section>
            <footer class="footer">
                <p>Copyright 2000-2020</p>
            </footer>
        </section>
    <script src="../data/javaScript/loginJs.js"></script>
</body>
</html>