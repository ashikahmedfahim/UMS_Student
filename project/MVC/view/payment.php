<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../data/css/style.css">
    <link rel="stylesheet" href="../data/css/profile.css">
    <title>Home</title>
</head>
<body>
    <?php
        require('../controller/paymentController.php');
    ?>
    <section>
        <header class="header">
            <p>University Management System</p>
        </header>
    </section>
    <div class="body">
        <section>
            <main>
                <div>
                    <div>
                        <p class="pageHeader">Payment</p>
                    </div>
                    <div class="navButton">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class=>
                            <input type="submit" value="Back" name="back" class="danger back">  
                            <input type="submit" value="Logout" name="logout" class="danger logout">  
                        </form>
                    </div>
                    <div class="content">
                        <table>
                            <tr>
                                <td>
                                    <nav>
                                        <ul>
                                            <li class="homeListItem">
                                                <a href="profile.php">Profile</a>
                                            </li>
                                            <li class="homeListItem">
                                                <a href="changePassword.php">Change Passowrd</a>
                                            </li>
                                            <li class="homeListItem">
                                                <a href="courses.php">Courses</a>
                                            </li>
                                            <li class="homeListItem">
                                                <a href="booklist.php">Book List</a>
                                            </li>
                                            <li class="homeListItem">
                                                <a href="results.php">Result</a>
                                            </li>
                                            <li class="homeListItem">
                                                <a href="classShedule.php">Class Shedule</a>
                                            </li>
                                            <li class="homeListItem">
                                                <a href="tsf.php">TSF</a>
                                            </li>
                                            <li class="homeListItem">
                                                <a href="payment.php">Paymnt</a>
                                            </li>
                                            <li class="homeListItem">
                                                <a href="notice.php">Notice</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </td>
                                <td class="contentBox">
                                    <div class="contentBoxForm">
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post" class="">
                                            <label for="due" class="paymentLabel">Due:</label>
                                            <br>
                                            <label for="dueValue" name="due" class="paymentLabelValue"><?php echo $due;?></label> 
                                            <br>  
                                            <label for="dueAmount" class="contentText">Enter Amount</label>
                                            <br>
                                            <input type="text" name="amount" id="amount" placeholder="Enter Amount" class="contentBoxInput">
                                            <br>
                                            <label for="amountInfo" id="amountInfo" class="amountInfo" ><?php echo "";?></label>
                                            <br>
                                            <label for="Info" id="Info" class="contentBoxInfo" ><?php echo $ans;?></label>
                                            <br>
                                            <br>
                                            <input type="submit" name="confirm" id="confirm" value="Confirm" class="success">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </table> 
                    </div>
                </div>
            </main>
        </section>
    </div>
    <section>
            <footer class="footer">
                <p>Copyright 2000-2020</p>
            </footer>
        </section>
        <script src="../data/javaScript/paymentJs.js"></script>
</body>
</html>