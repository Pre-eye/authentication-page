<!DOCTYPE html>
<html>
<head>
    <title>My Authentication Page</title>
</head>
<body>
     <h1>Vehicle Registration</h1>
    <form action="form.php" method="post">
         <label for="fname"> First Name: </label>
           <input type="text" name="first_name" id="fname" placeholder="Your First name"><br>
        <br>
         <label for="lname"> Last Name: </label>
           <input type="text" name="last_name" id="lname" placeholder="Your Last name"><br>
        <br>   
         <label for="email"> Email: </label>
           <input type="email" name="email" id="email" placeholder="Your Email"><br>           
        <br>
         <label for="gender"> Gender: </label>
                <select id="gender" name="gender">
                    <option value="male"> Male </option>
                    <option value="female"> Female </option>   
                </select>
        <br>
        <br>
         <label for="sor"> State of Registration: </label>
            <input type="text" name="state_registration" id="sor"><br>     
        <br>
         <label for="vname"> Vehicle Name: </label>
            <input type="text" name="vehicle_name" id="vname"><br>
        <br>
         <label for="vpnum"> Vehicle Plate Number: </label>
            <input type="text" name="vehicle_number" id="vpnum"><br> 
        <br> 
         <label for="vcol"> Vehicle Color: </label>
            <input type="text" name="vehicle_color" id="vcol"><br>
        <br>

        <label for="passcode"> Vehicle Passcode: </label>
            <input type="password" name="passcode" id="passcode"><br>
        <br>
        <button type="submit" name="submit">Submit</button>  



    </form>   



</body>
</html>