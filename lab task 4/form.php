<?php
           $name="";
           $err_name="";
           $uname="";
	       $err_uname="";
           $pass=$_POST['pass'];
	       $err_pass="";
           $cpass=$_POST['cpass'];
           $err_cpass="";
           $email="";
           $err_email="";
           $hasError=false;
           $phone="";
		   $err_phone="";
		   $address="";
		   $err_address="";
           
if($_SERVER["REQUEST_METHOD"] == "POST")
		if(empty($_POST["name"]))
        {
			$err_name="Name Required";
			$hasError = true;
		}
        else
        {
			$name=htmlspecialchars($_POST["name"]);
        }
    
    
        if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
        else if(strlen($_POST["username"])<=5){
			$err_uname="Username must contain at least 6 characters";
			$hasError = true;
		}
        else
        {
			$uname=htmlspecialchars($_POST["uname"]);
		}
         
        if(empty($_POST["password"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		
		else{
			$pass=$_POST["password"];
		}
        
        if($pass != $cpass)
        {   
            $err_cpass = "Password didn't matched";
            $hasError = true;
        }
        else{
            $cpass=$_POST["Confirm Password"];
        }
        if (empty($_POST["email"]))
        {
            $err_email = "Email is required";
            $hasError = true;
        }
        else
        {
			$email=htmlspecialchars($_POST["email"]);
        }
        
    
    
           
    if(!$hasError){
			echo $name."<br>";
            echo $_POST["uname"]."<br>";
            echo $pass."<br>";
            echo $cpass."<br>";
            echo $email."<br>";
			echo $phone."<br>";
			echo $address."<br>";
    }
		
            
            

?>

<html>
	<head></head>
	<body>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
                    </tr>
                    <tr>
						<td>Username: </td>
						<td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
                    <tr>
						<td>Password: </td>
						<td><input type="text" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>
                    <tr>
						<td>Confirm Password: </td>
						<td><input type="text" name="cpass" value="<?php echo $cpass;?>" placeholder="Confirm Password"></td>
						<td><span><?php echo $err_cpass;?></span></td>
					</tr>
                    <tr>
						<td>Email: </td>
						<td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span><?php echo $err_email;?></span></td>
                    </tr>
					<tr>
						<td>Phone: </td>
						<td><input type="text" name="code" value="<?php echo $phone;?>" placeholder="Code"> - </td>
						<td><input type="text" name="number" value="<?php echo $phone;?>" placeholder="Number"></td>
						<td><span><?php echo $err_phone;?></span></td>
                    </tr>
					<tr>
						<td>Address: </td>
						<td><input type="text" name="street address" value="<?php echo $address;?>" placeholder="street address"></td>
					</tr>
					<tr>
					<td></Td>
						<td><input type="text" name="city" value="<?php echo $address;?>" placeholder="city"> - </td>
						<td><input type="text" name="state" value="<?php echo $address;?>" placeholder="state"></td>
					</tr>
					<tr>
					<td></td>
					<td><input type="text" name="postal/zip code" value="<?php echo $address;?>" placeholder="postal/zip code"></td>
						<td><span><?php echo $err_address;?></span></td>
                    </tr>
                    
                    
                    
                    <tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
				    </tr>
                </table>
			</form>
		</fieldset>
	</body>
</html>