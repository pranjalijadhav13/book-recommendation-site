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
			<h1>Lord Of The Rings</h1>
			<br>
				<img src="img/lotr.jpg">
					<div class="booksummary">
						<p>The future of civilization rests in the fate of the One Ring, which has been lost for centuries. Powerful forces are unrelenting in their search for it. But fate has placed it in the hands of a young Hobbit named Frodo Baggins (Elijah Wood), who inherits the Ring and steps into legend. A daunting task lies ahead for Frodo when he becomes the Ringbearer - to destroy the One Ring in the fires of Mount Doom where it was forged.</p>
					</div>
						<div class="otherbookdetails">
							<nav>
								<ul>
									<li>Author: J.R.R Tolkein</li><br>
									<li>Genre: Fantasy</li><br>
									<li><a href="https://www.amazon.in/Lord-Rings-J-R-Tolkien/dp/0261103253/ref=sr_1_4?crid=1LNK191J0CVNK&dchild=1&keywords=lord+of+the+rings&qid=1612281052&s=books&sprefix=lord+of+%2Cstripbooks%2C272&sr=1-4" target="_blank"><button type="submit" class="button_1">Buy on Amazon</button></a></li>
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
        var gsReference = storage.refFromURL('gs://bibliophiles-c6141.appspot.com/The_Lord_of_the_Rings.pdf');
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


