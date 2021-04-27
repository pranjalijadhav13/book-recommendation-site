<?php 
session_start();
/*if(!isset($_SESSION['loggedInUser'])){
    //send them to login page
    header("location:Home.php");
}*/
include_once("includes/functions.php");
include_once("includes/connection.php");

if(isset($_POST['submit'])) {
	/*$target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imgpath"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    $image=basename( $_FILES["imgpath"]["name"],".jpg"); // used to store the filename in a variable*/

    //storind the data in your database
	$book_name=$_POST['book_name'];
	$author=$_POST['author'];
	$genre=$_POST['genre'];
	$dop=$_POST['dop'];
	$agegroup=$_POST['agegroup'];
	$imgpath=$_POST['imgpath'];
	$sql="INSERT INTO bookdetails(book_name,author,genre,dop,agegroup,onshelf,imgpath) VALUES ('$book_name','$author','$genre','$dop','$agegroup','n','$imgpath')";
	$res=mysqli_query($conn,$sql);
	if($res) {
		//echo '<script> alert("Sign Up successful") </script>';
		header("location:Books.php");
	}
}

?>

<!DOCTYPE HTML>

<head>
	<title> Add book (Admin) </title>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="A social cataloguing site">
	<meta name="keywords" content="Books, user-to-user recommendations">
	<meta name="Author" content="Anonymous">
	<link rel="stylesheet" href="addbookstyle.css">
</head>
<body>
	<h3>Add your book</h3>
	<form method="post" id="myForm">
		<input type="name" name="book_name" id="book_name" placeholder="Book name" required><br>
		<input type="name" name="author" id="author" placeholder="Author" required><br>
		<input type="name" name="genre" id="genre" placeholder="Genre" required><br>
		<input type="date" name="dop" id="dop" required><br>
		<input type="number" name="agegroup" id="agegroup" placeholder="Age group till" required><br>
		<input type="text" name="imgpath" id="imgpath" placeholder="Image path" required><br>
		<input type="submit" name="submit" id="submit">
	</form>
</body>