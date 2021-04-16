<!DOCTYPE html>
<html>
<head>
    <title>Verification Page</title>
</head>
<body>
     <h1>Driver/Vehicle Login</h1>
    <form action="form_auth.php" method="post">
        
  
    <label for="fname"> First Name: </label>
           <input type="text" name="first_name" id="fname" placeholder="Your First name"><br>
        <br>
    <label for="email"> Email: </label>
            <input type="email" name="email" id="email"><br>
        <br>
    <label for="vpnum"> Vehicle Plate Number: </label>
            <input type="text" name="vehicle_number" id="vpnum"><br> 
        <br>
    <label for="vpass"> Vehicle Passcode: </label>
            <input type="password" name="passcode" id="vpass"> <a href="resetpass.php"><i>Reset Passcode</i></a><br>
        <br> 
       
        <button type="submit" name="submit">Submit</button>  



    </form>   



</body>
</html>