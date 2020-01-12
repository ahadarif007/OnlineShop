
<head>
<style>

#src{
  height:100px;
  width: 100%;
  margin: 0;
  background-color:slategrey;
}

input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 15%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}
#src form {
  font-size: large;
  text-align: center;
  color: white;
}

li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: red;
}
</style>
</head>
<body>

<ul>
  <li><a href="http://localhost/projectFinal/AdminData/adminHome.php" class="active">Home</a></li>
  <li><a href="http://localhost/projectFinal/adminData/Update/update.php">Update Account Information</a></li>
  <li><a href="http://localhost/projectFinal/adminData/signup/signup.html">Create New Admin Account</a></li>
  <li><a href="http://localhost/projectFinal/adminData/ShowAll/showall.php">Show All Admin Account</a></li>
  <li><a href="http://localhost/projectFinal/UserData/ShowAll/showall.php">Show All user Account</a></li>
  <li><a href="http://localhost/projectFinal/product/Insert/insert.html">Add New Product</a></li>
  <li><a href="http://localhost/projectFinal/product/ShowAll/showall.php">Show All Products</a></li>
  <li><a href="http://localhost/projectFinal/product/Search/search.html">Search Products</a></li>
  <li><a href="http://localhost/projectFinal/order/ShowAll/showall.php">Order History</a></li>
  <li><a href="http://localhost/projectFinal/UserData/xml/XML.html">About</a></li>
  <li><a href="http://localhost/projectFinal/signout.php">Sign Out</a></li>
</ul>

<div id="src">
  <br> 
  <form action="http://localhost/projectFinal/product/Search/search.php" method="post">
     Search Products:
    <input type="text" name="productName" id="productName">
    <input type="submit" Value="Search" ></input>
</form>
</div>

