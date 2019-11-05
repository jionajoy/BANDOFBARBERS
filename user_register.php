<html>
    <script src="js/validation.js"></script>
    <body>
       <h1>Register As a User</h1>
        <form name="user_register_form" method="post" action="user_register_action.php" >      
            <input type="text" id="fname" name="fname" placeholder="Your First Name" required onChange="inputAlphabet(fname)"/>  <br>    
            <input type="text" id="lname" name="lname" placeholder="Your Last Name" required onChange="inputAlphabet(lname)"/><br>     
            <input type="text"  id="email" name="email" placeholder="Email"  onChange="ValidateEmail(email)" required/><br>  
            <input type="password" name="password" id="password" placeholder="Password"  required onChange="lengthDefine(password,4)"/> <br> 
            <input type="password" id="rePassword" placeholder="Re-enter Password" onChange="checkRePassword(password, rePassword)" required/> <br>
            <input type="submit" id="register" name="register" value="Register"/>
            <input type="reset" id="reset" value="Clear Form" onClick="reset_frm(document)" />
        </form>
    </body>
</html>




