<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .form{
             width: 300px;

            margin:100px  auto;
            padding: 15px;
            background-color: rgb(9, 248, 196);
        }
        h2{
            text-align: center;
            padding-bottom: 5px;
            color: rgb(133, 2, 89);
        }
        h4{ text-align: center;
            align-items: center;
            justify-content: center;
            padding-top: 8px;
            padding-left: 110px;
           }
           a{  text-align: right;
              
        
               text-decoration: none;
               color: rgb(7, 7, 7);
           }
           a:hover{
               color: rgb(0, 66, 128);
           }
           p{
               text-align: center;
           }
    </style>
</head>
<body>
    <div class="form">
        <h2>Thanks for submitting your reponse! </h2>
        <p style="color: white;"> your response is submitted</p>
        <h4><a  href="contact.html">Go to the back page</a></h4>
 </div>
</body>

</html>
<?php
  $name = $_POST['nm'];
  $lastname = $_POST['lm'];
  $email =$_POST ['mail'];
  $msg = $_POST['msg'];
  echo "$name ".$name;
//   extract($_POST);
//   $file=fopen("database.txt","a");
//   fwrite($file,"first name :");
//   fwrite($file,$nm."\n");
//   fwrite($file,"last name :");
//   fwrite($file,$lm."\n");
//   fwrite($file,"email :");
//   fwrite($file,$mail."\n");
//   fwrite($file,"messge :");
//   fwrite($file,$msg."\n\n");
//   fwrite($file,"Next Entry\n\n");
//   fclose($file);
echo "lastname ".$lastname;
echo "<br>";
echo "email ".$email;
echo "<br>";
echo "msg ".$msg;
?>
