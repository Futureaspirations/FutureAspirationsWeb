<?php 
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Future Aspirations</title>
         <?php include_once "header.php"; ?>
    </head>
    <body> 

        <div name="side" style="width:20%; float: left; border: 2px solid blue; margin: 5px;">
            <div name="navigationPanel" id="nav" style=" margin: 5px;">
                <ul>
                    
                    <li><a href="#">Welcome</a></li>           
                    <li><a href="GroupWorkRecording.php">Group Work Recording</a> </li>
                    <li><a href="StreetWorkRecording.php">Street Work Recoding</a></li>
                    <li><a href="TimeSheetSubmission.php">Time Sheet Submission</a></li>
                    <li><a href="VolunteerTimesheet.php">Volunteer Timesheet</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="#">Contact</a></li> 
                </ul>
            </div>
            <?php
            //$_SESSION['user']= "user";
            if(isset($_SESSION['user'])) { 
            ?>
            <div name="loginPanel" style="border: 2px solid black; margin: 5px;">
                <form action="login.php" method="post">
                    <table>
                        <tr>
                            <td>
                                Greetings, User!
                            </td>
                            <td>
                                <input type="submit" value="logout">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <?php } else {?>
            <div name="loginPanel" style="border: 2px solid black; margin: 5px;">
                <form action="login.php" method="post">
                    <table name="login" >
                        <tr>
                            <td> username </td>
                            <td> <input name="user" type="text"></td>
                        </tr>
                        <tr>
                            <td> password </td>
                            <td> <input name="pass" type="password"></td>
                        </tr>
                        <tr>
                            <td> <input type="submit" value="Login"> </td>
                        </tr>
                    </table>
                </form>
            </div>
            <?php } ?>
    </div>
        <div id="mainPanel"> 
        </div> 
    </body>

    <script>

    </script>
</html>
