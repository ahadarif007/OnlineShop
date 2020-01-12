<head>
    <style>
    #tab {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tab td, #tab th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tab tr:nth-child(even){background-color: #f2f2f2;}

#tab tr:hover {background-color: #ddd;}

#tab th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
    </style>
</head>
<?php  

session_start();
if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]=="yes" )
{
    include("adminHeader.php");
    $data=array();
    include("../lib.php");
    
	$sql="select * from admindata ";
	//print_r($sql);
	loadFromMySQL($sql);

?>

<table  align="center" width=90% border="1px" id="tab">
            <tr>
                <th>
                        First Name
                </th>

                <th>
                        Last Name
                </th>

                <th>
						dateOfBirth 
                </th>

                <th>
						gender
                </th>

                <th>
						phone
                </th>

                <th>
						email
                </th>
                <th>
						Permanent Address
                </th>
                <th>
						password hash:
				</th>
				<th>
						Profile Picture
				</th>

            </tr>

            
<?php


     foreach($data as $v){ 
?>
     <tr>



	 








     <td><?php echo $v["firstname"]; ?></td>

     <td><?php echo $v["lastname"]; ?></td>
     
     <td><?php echo $v["dateOfBirth"]; ?></td>
     
     <td><?php echo $v["gender"]; ?></td>
     
     <td><?php echo $v["phone"]; ?></td>

	 <td><?php echo $v["email"]; ?></td>

	 <td><?php echo $v["permanentAddress"]; ?></td>

	 <td> <?php echo $v["password"]; ?></td>
     
     <td>
         <img src="<?php echo $v["Picture"]; ?>" alt="picture missing" height="50px" width="50px">
     </td>

    

     </tr>
     <?php
     }
    ?>
    </table>








<?php



	if(sizeof($data)==0)
		echo "Not found";

}
    
?>




