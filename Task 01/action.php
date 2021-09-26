<!DOCTYPE HTML>
<html>
    <body>
    <style>
      div {
        margin-bottom: 10px;
      }
      label {
        display: inline-block;
        width: 100px;
      }
      input {
        padding: 10px ;
      }
    </style>
        <h1 style="font-family:times new roman; font: size 50px;">Register Form</h1><br><hr>
        <form action="get/information.php" method="POST">
        <div><label>First name:</label>   <input onkeypress="return /[a-z]/i.test(event.key)" name="fname"><br></div>
        <div><label>Last name:</label>    <input onkeypress="return /[a-z]/i.test(event.key)" name="name"><br></div>
        <div><label>Age:</label>          <input type="number" name="age" min="1" max="200"><br></div>
        <div><label>Email:</label>       <input onkeypress="return /[a-z]/i.test(event.key)" name="email" size=100><br></div>


</form>


</body>
</html>
