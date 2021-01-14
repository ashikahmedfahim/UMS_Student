<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../data/css/style.css">
    <title>Home</title>
</head>
<body>
    <?php
        require('../controller/classSheduleController.php');
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
                        <p class="pageHeader">Class Shedule</p>
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
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post">
                                        <select id="day" name="day" class="contentBoxSelect">
                                                <option value="null">Select Day</option>
                                                <?php
                                                $i=0;
                                                while($row = $courseDetails->fetch_assoc()) {
                                                    if($i%2!=1){
                                                        echo "<option value=".$row["day"].">" . $row["day"]. "</option>";
                                                    }
                                                    $i++;
                                                }
                                            ?>
                                            </select>
                                            <br>
                                            <br>
                                            <input type="submit" value="Select" class="neutral optionSelect">
                                            <br>
                                            <br>
                                            <label for="" id="dayInfo" class="contentBoxLabel"></label>
                                            <br>
                                            <br>
                                            <label for="" id="time" class="contentBoxLabel"><?php
                                                if($time!=""){
                                                    echo "Time: ".$time;
                                                }
                                            ?></label>
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
    <script src="../data/javaScript/classSheduleJs.js"></script>
</body>
</html>