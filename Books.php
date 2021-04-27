<?php 

ob_start();
  session_start();
  if(!isset($_SESSION['loggedInUser'])){
    //send the iser to login page
    header("location:Home.php");
}
	include_once("includes/functions.php");
	include_once("includes/connection.php");
?>

<!DOCTYPE HTML>
<html>
<head>
<title> Bibliophile | Welcome </title>
  <meta charset = "utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="A social cataloguing site">
  <meta name="keywords" content="Books, user-to-user recommendations">
  <meta name="Author" content="Anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="./css/test2.css">

<style>
      
      table{
        padding:5px;
        border:10px solid gray;
        margin-top:20px;
        margin-left:60px;
      }
      td,th{
        padding:15px;
      }
      
</style>
</head>
<body>
  <header>
    <img src="img/logo.png">
      <nav>
        <ul>
          <li><a href="Books.php">Books</a></li>
          <li><a href="Contact.php">Contact</a></li>
          <li class="current"><a href="logout.php">Sign Out</a></li>    
          </ul>
      </nav>
      
  </header>
  
  <section id="showcase">
        <div class="container">
          <h1 >Welcome</h1>
          <p>Meet your next favourite book!</p>
        </div>
      
  </section>
 
  <section>

    <table border='1' WIDTH='75%'>
      <tr>
      <td colspan="8"><a href="addbook.php">Add New Book</a></td>
      </tr>
      <tr>
      <td WIDTH='20%' style="color:darkgreen"><b><u>Book cover</u></b></td>
      <TD style="color:darkgreen" WIDTH='50%'><b><u>Book Name</u></b></TD>
      <TD style="color:darkgreen" WIDTH='20%'><b><u>Author</u></b></TD>
      <TD style="color:darkgreen" WIDTH='20%'><b><u>Genre</u></b></TD>
      <TD style="color:darkgreen" WIDTH='25%'><b><u>Date of publishing</u></b></TD>
      <TD style="color:darkgreen" WIDTH='25%'><b><u>Age group</u></b></TD>
      <TD style="color:darkgreen" WIDTH='25%'><b><u>Upload PDF</u></b>
        <input accept=".pdf" type="file" id="uploadZip" name="icon"></TD>  
      <TD style="color:darkgreen" WIDTH='25%'><b><u>Delete option</u></b></TD></tr>    
		

		<?php
		
    
		  $sql="SELECT * FROM bookdetails";
		  $res=mysqli_query($conn,$sql);
		
		  if(mysqli_num_rows($res)>0) {
			 while($row =mysqli_fetch_assoc($res)){
          echo "<tr>";
          echo "<td> <img src='".$row['imgpath']."' /></td>"; 
				  echo "<td>" .$row['book_name']."</td>";
				  echo "<td>" .$row['author']."</td>";
				  echo "<td>" .$row['genre']."</td>";
				  echo "<td>" .$row['dop']."</td>";
				  echo "<td>" .$row['agegroup']."</td>";
          echo "<td>  <form>
                      <button type = 'submit' onclick='uploadFile()'>Upload</button>
                      </form>
              </td>  ";
				  echo "<td>
                    <form action = 'deleteb.php' method = 'POST'>
                        <input type = 'hidden' name = 'id' value = '".$row['book_id']."'>
                        <button type='submit'>Delete</button>
            </form></td> ";
        
			}
		}
	  ?>
		 
    </table>
  </tr>
</table>
</section>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-storage.js"></script>

  <script>

  var firebaseConfig = {
    apiKey: "AIzaSyC6AR2v4N9rmj4pebCQAWbyff4rQMsZIqQ",
    authDomain: "bibliophiles-c6141.firebaseapp.com",
    databaseURL: "https://bibliophiles-c6141.firebaseio.com",
    projectId: "bibliophiles-c6141",
    storageBucket: "bibliophiles-c6141.appspot.com",
    messagingSenderId: "345288041221",
    appId: "1:345288041221:web:4c0cde0cec7ecb4f590d6c",
  };
  
  firebase.initializeApp(firebaseConfig);
  const storage = firebase.storage();
  

  /*function uploadFile() {
 event.preventDefault();
 var timestamp = Number(new Date());
 var storageRef = storage.ref(timestamp.toString());
 var $ = jQuery;
 var file_data = $('#uploadZip').prop('files')[0];
 storageRef.put(file_data);
 console.log("file uploaded.");
 alert("end of function - file uploaded.");
}
*/
  function uploadFile() {
    event.preventDefault();
    var $ = jQuery;
    var file_data = $('#uploadZip').prop('files')[0];
    var fileName=file_data.name;
    var storageRef=storage.ref(fileName);
    storageRef.put(file_data);
    console.log("file uploaded.");
    alert("end of function - file uploaded.");
}



  
  </script>
</body>
</html>
