<?php
    session_start();
?>
<?php 
    include_once 'config.php';
?>
<?php
if (isset($_POST ['delete']))
{

    $USERNAME =$_SESSION["email"];
    $PASSWORD =$_SESSION["password"];
$sql= "DELETE FROM account_details where email = '$USERNAME' AND Password = '$PASSWORD'";

$data = mysqli_query($conn,$sql);

    if($data)
    {
        echo '<script type = "text/javascript">alert("Your Account successfully Removed")</script>';
        echo '<script type = "text/javascript">alert("Thank you")</script>';
        header("location:https://courseweb.sliit.lk");
        
    }
    else
    {
        echo '<script type = "text/javascript">alert("Your Account still in our database")</script>';
        echo '<script type = "text/javascript">alert("Thank you")</script>';
        header("location:https://courseweb.sliit.lk");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <title>
        Main page
    </title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/Tharushi.css">
    <script>
        alert("Welcome to the Whatever.com");
    </script>
</head>
<body>

<header>
            <?php
                include ('commonHeader.php')
            
            ?>

        </header>
    


    <!--//Navigation bar-->
    <hr />
    <h1 align="center">MANAGE MY ACCOUNT</h1>
    <h4 align="center">Join us to enjoy exclusive privileges and rewards</h4>
    <hr />
    <center>
        <form action= "<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST">
    <?php
    $USERNAME =$_SESSION["email"];
    $PASSWORD =$_SESSION["password"];
   
    $sql = "SELECT * FROM b_account_details WHERE Password like '%$PASSWORD%' and email like '%$USERNAME%';";

    

    $result = $conn ->query($sql);
    if ($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()){
    
            echo "<img src='C_uploads/".$row['Image']."' class='makesize'>";
            
                echo "<br/><lable><b>Title</b></lable><br/>";

                echo "<div class='new'>".$row['Title']."</div>";

                         echo "<br/><br/><lable><b>Company name </b></lable><br/>";
                         echo "<div class='new'>".$row['BAcc_ID']."</div>";

                                echo "<br/><br/><lable><b>Email </b></lable><br/>";
                                echo "<div class='new'>".$row['email']."</div>";

                                            echo "<br/><lable><b>Phone Number </b></lable><br/>";
                                            echo "<div class='new'>".$row['CPhone1']."</div>";

                                                        echo "<br/><lable><b>Address </b></lable><br/>";
                                                        echo "<div class='new'>".$row['CAddress1']."</div>";

                                                                echo "<br/><lable><b>Agent details </b></lable><br/>";
                                                                echo "<div class='new'>".$row['A_name1']."</div>";

                        

                                echo "<br/><input type='submit' value='DELETE' class='but' name='delete'  style='background-color:green;'> ";
        
        }
    }
?>
     </form>
    </center>
    <!--google calander-->
	<div align="left">
    <iframe id="ifmCalendar" 
                    src="https://www.google.com/calendar/embed?
                    height=50&amp;wkst=1&amp;bgcolor=%23FFFFFF&
                    amp;src=24tn4fht2sssdssfdiqqlsedk%40group.calendar.google.com&
                    amp;color=%238C500B&amp;ctz=Asia%2FCalcutta"
                        style="border-width: 0" width="300" 
                        height="300" frameborder="0" scrolling="no">
</div>

          <!--Footer-->
          <div class="footer">

            <div class="footer-column">
                <div class="footer-content">

                    <div class="content">
                        <ul type="none">
    
                            <li class="font"><b><font size="4">Service</font></b></li>
                            <li class="font">
                                Customer service
                            </li>
                            <li class="font">
                                Reservation
                            </li>
                            <li class="font">
                                Blogs
                            </li>
                            <li class="font">
                                Search Companies
                            </li>
                        </ul>
        
                        <ul type="none">
        
                            <li class="font"><b><font size="4">Contact Us</font></b></li>
                            <li class="font">
                              
                                Call : +94 77 3283 832
                            </li>
                            <li class="font">
                                Mail : whateverCo@gmail.com
                            </li>
                            <li class="font">
                                Address : 46, Colombo, Sri Lanka
                            </li>
                            
                        </ul>
                        <ul type="none">
        
                            <li class="font"><b><font size="4">Service</font></b></li>
                            <li class="font">
                                Customer service
                            </li>
                            <li class="font">
                                Reservation
                            </li>
                            <li class="font">
                                Blogs
                            </li>
                            <li class="font">
                                Search Companies
                            </li>
                        </ul>
                    </div>
                    
                    <div class="links">
                        <a href="http://www.facebook.com">
                        <img src="pictures/facebook.png" alt="Facebook" class="social" height="20" width="20" >
                        </a>

                        <a href="http://www.twitter.com">
                        <img src="pictures/Twitter.png" alt="Twitter" class="social" height="20" width="20">
                        </a>

                        <a href="http://www.instagram.com">
                        <img src="pictures/insta.png" alt="instagram" class="social" height="20" width="20">
                        </a>

                        <a href="http://www.linkedin.com">
                        <img src="pictures/LinkedIn.jpg" alt="LinkedIn" class="social" height="20" width="20">
                        </a>
                    </div>
                    
                    
                </div>


                <div class="footer-bottom">
                    &copy; Designed by: 1.2 Group 6
                </div>

            </div>
            </div>
</body>
</html> 

