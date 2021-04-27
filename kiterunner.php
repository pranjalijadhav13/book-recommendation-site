<!DOCTYPE HTML>
<html>
<head>

<title> Bibliophile | Books </title>
 <meta charset = "utf-8">
 <meta name="viewport" content="width=device-width">
 <meta name="description" content="A social cataloguing site">
 <meta name="keywords" content="Books, user-to-user recommendations">
 <meta name="Author" content="Anonymous">
 <link rel="stylesheet" href="./css/book.css">
 <link rel="stylesheet" href="./css/style.css">
 <link rel="stylesheet" href="./css/style1.css">


 
 </head>
 
 <body>
 <header>
        <img src="img/logo.png">
			<nav>
      		<ul>
      			<li class="current"><a href="Main.php">Home </a></li>
      			<li><a href="about.php">About Us </a></li> 
      			<li><a href="Profile.php">My Profile</a></li>
      			<li class="current"><a href="logout.php">Sign Out</a></li>    
      		</ul>
      	   </nav>
</header>

<section id="bookshowcase">
	<div class="box">
		<div class="container">
			<h1>Kite Runner</h1>
			<br>
				<img src="img/kiterunner.jpg">
					<div class="booksummary">
						<p>A gripping and emotional story of betrayal and redemption, The Kite Runner had me thrilled and moved, both at the same time. It tells the story of Amir and Hassan, the closest of friends, as good as brothers, and also experts in the art of kite flying.</p>
					</div>
						<div class="otherbookdetails">
							<nav>
								<ul>
									<li>Author: Khaled Hosseini</li><br>
									<li>Genre: Drama, Classic, Historical Fiction</li><br>
									<li><a href="https://www.amazon.in/Kite-Runner-Khaled-Hosseini/dp/1408850257/ref=sr_1_1?crid=10I9C4W1JOKQ7&dchild=1&keywords=kite+runner&qid=1612280951&s=books&sprefix=kite%2Cstripbooks%2C276&sr=1-1" target="_blank"><button type="submit" class="button_1">Buy on Amazon</button></a></li>
									<li><a href="ViewCart.php"><button type="submit" class="button_2">Add to Shelf</button></a></li>
									<li><button type="submit" class="button_1" onclick='downloadFile()'>Download PDF</button></li>
								</ul>
							</nav> 	
						</div>

					</div>
			</div>
</section>
<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-storage.js"></script>
<script src="firebaseConfig.js"></script>
<script>
	function downloadFile(){
        var gsReference = storage.refFromURL('gs://bibliophiles-c6141.appspot.com/The_Kite_Runner.pdf');
// Get the download URL
        gsReference.getDownloadURL().then(function(url) {
  // Insert url into an <img> tag to "download"
            console.log(url);
            window.open(url, "_blank");
        }).catch(function(error) {

  // A full list of error codes is available at
  // https://firebase.google.com/docs/storage/web/handle-errors
});

}
	</script>
</body>
</html>


