<?php
    include 'crud_header.php';
?>

<form name="form1" method="post" action="process.php">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter your first name" name="name" required minlength="3" maxlength="30"><br>  
    <span id="nameError"> </span> 

    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required><br> 
    <span id="emailError"> </span> 

    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required><br> 
    <span id="passwordError"> </span> 
    
    <label for="age">Age</label>
    <input type="age" class="form-control" id="age" placeholder="Enter your last age" name="age" required><br> 
    <span id="ageError"> </span> 

    <button type="submit" name="regSub">Submit</button><br> 


<script>
    //function to validate the name
    function validateName()
    {
        const name= document.getElementById("name").value;
        const nameError= document.getElementById("nameError");

        if(name.length <3 || name.length > 20)
        {
            //innerHTML menas it is goint to replace the place between <span id="nameError"> here</span> 
            nameError.innerHTML = "Name must be between 3 & 20 characters";
            return false;
        }

        else
        {
            nameError.innerHTML = "";
            return true;
        }
    }

    function validateEmail()
    {
        const email= document.getElementById("email").value;
        const emailError= document.getElementById("emailError");

        if(email === " " || !email.includes("@"))
        {
            //innerHTML menas it is goint to replace the place between <span id="emailError"> here</span> 
            emailError.innerHTML = "Email must be entered and it includes @ eg: abc@gmail.com";
            return false;
        }

        else
        {
            emailError.innerHTML = "";
            return true;
        }
    }

    function validatePassword()
    {
        const password= document.getElementById("password").value;
        const passwordError= document.getElementById("passwordError");

        if(password.length < 6 || password === "")
        {
            //innerHTML menas it is goint to replace the place between <span id="passwordError"> here</span> 
            passwordError.innerHTML = "Your Password must be at least 6 characters long";
            return false;
        }

        else
        {
            passwordError.innerHTML = "";
            return true;
        }
    }

    //event listners for real time validations
    document.getElementByID("name").addEventListner("input",validateName);
    document.getElementByID("email").addEventListner("input",validateEmail);
    document.getElementByID("password").addEventListner("input",validatePassword);

</script>
</form>