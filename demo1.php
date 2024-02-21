<html>
    <head>
        <title>Registration form</title>
        <style>
            body{
                background-color: #8ba0e0;
            }
            h1{
                text-align: center;
                color: #6527BE;
            }
            label{
                color: #BA704F;
                font-style: italic;
                font-size: 120%;
            }
            button{
                background-color: #FAF3F0;
                color: black;
                border-radius: 10px;
            }
            form{
                background-color: azure;
                padding: 10%;
                max-width: 400px;
                margin: 0 auto;
                border-radius: 5px;
                box-shadow: #DBC4F0;
            }
            input[type="text"],input[type="password"],input[type="checkbox"]{
                width: 100%;
                padding: 12px;
                margin: 6px 0;
                box-sizing: border-box;
                border: none;
                border-bottom: 1px solid;
                background-color: #DBC4F0;
                color: black;  
            }
            input[type="submit"]:hover{
                background-color: #95f095;
            }
            p{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Registration form</h1>

        <form action="demo1-db.php" method="POST" >
        
        <label for= "fname"><b>First Name</b></label>
        <input type="text" name="fname" id="fname" placeholder="Your Name" required><br>
        <br>

        <label for="mname"><b>Middle Name</b></label>
        <input type="text" name="mname" id="mname" placeholder="Father's Name" required><br>
        <br>

        <label for="lname"><b>Last Name</b></label>
        <input type="text" name="lname" id="lname" placeholder="Enter your Surname" required><br>
        <br>

        <label for="email"><b>Email</b></label>
        <input type="text" name="email" id="email" placeholder="Enter Email" required><br>
        <br>

        <label for="password"><b>Password</b></label>
        <input type="password" name="pass" id="pass" placeholder="Password" required><br>
        <br>
        
        <label for="Reenter password"><b>Reeneter Password</b></label>
        <input type="password" name="pass1" id="pass" placeholder="Password" required><br>
        <br>

        <label>
            Gender:
        </label>
        <br>
        <input type="radio" name="gender" id="Female" value="female" placeholder="Female">Female<br>
        <input type="radio" name="gender" id="male"  value="male" placeholder="male">Male<br>
        <br>
        
<table border:="1">  
   <tr>  
      <td colspan="2">Select Technolgy:</td>  
   </tr>  
   <tr>  
      <td>PHP</td>  
      <td><input type="checkbox" name="techno[]" value="PHP"></td>  
   </tr>  
   <tr>  
      <td>.Net</td>  
      <td><input type="checkbox" name="techno[]" value=".Net"></td>  
   </tr>  
   <tr>  
      <td>Java</td>  
      <td><input type="checkbox" name="techno[]" value="Java"></td>  
   </tr>  
   <tr>  
      <td>Javascript</td>  
      <td><input type="checkbox" name="techno[]" value="javascript"></td>  
   </tr>  
   <tr>  
      <td colspan="2" align:="center">
    <input type="submit" value="submit" name="sub"></td>  
   </tr>  
</table>  
        </form>
        
    </body>
</html>
