 <html>
 <title>php8</title><head><style>
  body {
   background-image:url('wel.jpg');
   background-size:cover;
   }
     div {
     background-color:#fff;
     width:40%;
     height:60%;
     margin-left:30%;
     margin-top:10%;
     text-align:center;
     border-radius:13px;
     opacity:0.8;
     font-size:30px;
     }
      h1 {
       text-align:center;
       margin-top:13%;
       }
 </style></head>
 <body>

 <div>
  
 <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username=$_POST["username"];
        $email=$_POST["email"];
        $password1=$_POST["password"];
        echo "<h1>Congratulations $username ! &#x1F389;</h1>";
        echo "<p>Thank you for connecting with us:</p>";
        echo "<ul>";
        echo "Your username: $username <br>";
        echo "Your password: $password1";
       
      }
    //  echo "<script>alert('Redirecting to another page...');</script>";
       echo "<p>Your registration is successful. We wish you all the best!</p>";
   echo '<a href="/Act2/hos.html" style="font-size:30px;color:green;">Go to Login page</a>';
   //   sleep(3); // delay for 3 seconds
      
    //  header("Location:/Act2/hos.html");  // it refer to the page mentioned

 ?>
 </div>
 </body></html>
