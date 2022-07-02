<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript"> 
        function preback(){window.history.forward();}
        setTimeout("preback()",0);
        window.onunload = function(){null};
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/AboutUs.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body>
      
    <!-- nav start -->
    <div class="logo">
            <a href="Home.php"><img src="img/logo.png"></a>
    </div>
    <nav> 

        <ul>
            <li><a href="Home.php" >Home</a></li>
            <li><a href="Profile.php">Profile</a></li>
            <li><a href="Notifications.php">Notifications</a></li>
            <li><a href="HistoryUser.php">History</a></li>
        </ul>

        <ul class="xyz">
           <li><a href="#">About Us</a></li>
        </ul>

       <ul class="logout">
         <li><a href="#" id="logout-btn" onclick=logoutClicked>Log Out</a></li>
       </ul>
    </nav>
    <!-- nev end-->

            <article>
                
                <div class="wpb_wrapper">
                    <p><strong>Vision:</strong><br />To be the leading integrated healthcare network in Emerging markets, transforming the quality of healthcare and impacting millions of people.</p>
                    <p><strong>Mission:</strong><br />To build a legacy of impact driven, accessible safe and private healthcare for patients in need.</p>
                    <p><strong>Values:</strong><br />We are committed to providing best-in-class, accessible, private healthcare for all and encourage all our employees and caregivers to share our values:</p>
                </div>
                <div class="Picture">
                    <p><img  title="" src="img/Aboutus.png"  alt="Evercare-Values Mission &amp; Vision"  width="80%"></p>
                </div>   
            </article>
    
    <script type="text/javascript" src="js/logout.js"></script>
</body>
</html>