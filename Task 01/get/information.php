<html>
<body>

Welcome <?php echo $_POST["fname"]; ?><?php echo $_POST["lname"]; ?><br>
?php
$validationmessage1="";
$validationmessage2="";
$validationmessage3="";

if(isset($_POST["register"]))
{
    $fname=$_POST["fname"];

    $lname=$_POST["lname"];


    if(empty($fname))
    {
        $validationmessage1= "Fill up the field";
    }

    else

    {
        echo " Welcome here ".$fname;
    }

    if(empty($lname))
    {
        $validationmessage1= "Fill up the field";
    }

    else

    {
        echo "How can we help you Mr/Mrs ".$lname;
    }
}


   

Your email : <?php echo $_POST["email"];?> <br>

if(isset($_POST["register"]))
{
    $email=$_POST["email"];

    if(empty($email))
    {
      $validationmessage2="Email invalid";
  }

  else

  {
      echo "Email: ".$email;
  }

Age: <?php echo $_POST["age"]; ?><br>
if(isset($_POST["register"]))

{$age=$_POST["age"];
if(empty($age))
    {
        $validationmessage3="Age not found";
    }

    else

    {
        echo "Age: ".$age;
    }
    
    
}


</body>
</html>
