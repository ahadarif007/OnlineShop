<?php
/*

firstname
lastname
dateOfBirth
gender
phone
email
permanentAddress
password
Picture

*/
session_start();
//include("lib.php");
if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]=="yes" )
{

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	

		if (empty($_POST["firstname"])) 
		 {
			echo"<p style='color:red'>First Name is required </p><br/>";
			$v1=0;
		 } 
		 else 
		 {
			$firstname = $_POST["firstname"];
			$v1=1;	
		 }
		if (empty($_POST["lastname"])) 
		 {
			echo"<p style='color:red'>Last Name is required </p><br/>";
			$v2=0;
		 } 
		 else 
		 {
			$lastname = $_POST["lastname"];
			$v2=1;
			
		 }
		if (empty($_POST["day"]) || $_POST["day"]==0) 
		 {
			echo"<p style='color:red'> Day in date of birth is not specified </p><br/>";
		    $v3=0;
		 } 
		 else 
		 {
			$day = $_POST["day"];
			$v3=1;
		 }
		 if (empty($_POST["month"]) || strlen($_POST["month"])<=1) 
		 {
			echo"<p style='color:red'>month in date of birth is not specified</p><br/>";
			$v4=0;
		 } 
		 else 
		 {
			$month = $_POST["month"];
			$v4=1;
		 }
		 if (empty($_POST["year"]) || $_POST["year"]==0) 
		 {
			echo"<p style='color:red'>Year in date of birth is not specified</p><br/>";
			$v5=0;
		 } 
		 else 
		 {
			$year = $_POST["year"];
			$v5=1;
		 }
		 if (empty($_POST["gender"])) 
		 {
			echo"<p style='color:red'>Gender is not specified</p><br/>";
			$v6=0;
		 } 
		 else 
		 {
			$gender = $_POST["gender"];
			$v6=1;
		 }
		 

		if (empty($_POST["phone"]) || strlen($_POST["phone"])<11) 
		 {
			echo"<p style='color:red'>valid phone number must be specified</p><br/>";
			$v7=0;	
		 } 
		 else 
		 {
			$phone = $_POST["phone"];
			$v7=1;
		 }
		
		 if (empty($_POST["email"])) 
		 {
			echo"<p style='color:red'>email is required</p><br/>";
			$v8=0;
		 } 
		 else 
		 {
			if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
			{				
			echo"<p style='color:red'>Invalid email format</p>";
		  	$v8=0;
			}
			else{

					$email = $_POST["email"];
					$v8=1;
				}


			
		}
		 
		 if (empty($_POST["permanentAddress"])) 
		 {
			echo"<p style='color:red'>permanent Address  is required </p><br/>";
			$v9=0;
		 } 
		 else 
		 {
			$permanentAddress = $_POST["permanentAddress"];
			$v9=1;	
		 }
		 
		 if (empty($_POST["pass"]) || empty($_POST["cpass"]) ) 
		 {
			echo"<p style='color:red'>Both password field must be specified</p><br/>";
			$v10=0;	
		 }
		 else 
		 {
			 if($_POST["pass"]!=$_POST["cpass"])
			 {
				 echo"<p style='color:red'>password not matched</p><br/>";
				 $v10=0;
			 }
			 else 
			 {
				 if(strlen($_POST["pass"])<8)
				 {
					 echo"<p style='color:red'>password must be more then 8 degit</p>";
				 $v10=0;
				 }		
				else
				 {
				 $pass= $_POST["pass"];
				 $v10=1;
				 }
			 }
			 		 
         }
         
         $source=$_FILES['picture']['tmp_name']; // upload pic temporary in php server
        $target="../signup/userImages/".$_FILES['picture']['name']; // target will hold image directory 
        if(move_uploaded_file($source,$target)){
            $v11=1;
            $Picture=$target;
    }
    else {
        $v11=0;
    }


}

if($v1==1 && $v2==1 && $v3==1 && $v4==1 && $v5==1 && $v6==1 && $v7==1 && $v8==1 && $v9==1 && $v10==1 && $v11==1){

include("../lib.php");
/*
UserData:
    0           1           2         3       4      5          6              7        8
firstname , lastname , dateOfBirth, gender, phone, email, shippingAddress, password , Picture
*/
$dateOfBirth=$day." ".$month." ".$year;
$password=md5($pass);
$sql="INSERT INTO admindata (firstname, lastname, dateOfBirth, gender, phone, email, permanentAddress, password, Picture) 
VALUES('".$firstname."', '".$lastname."', '".$dateOfBirth."', '".$gender."', '".$phone."', '".$email."', '".$permanentAddress."', '".$password."', '".$Picture."')";

	//print_r($sql);
	$result=insert($sql);
    if($result=true)
    {
		echo "Account Created successfully.";
		
		?>
		<a href="../adminLogin/adminLogin.html"> Home</a>

		<?php


    }
	
}

else {
	echo"<p style='color:red'>Form Not Validated</p>";
}

}
?>