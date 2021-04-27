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
			<h1>Assassin's Creed</h1>
			<br>
				<img src="img/assassins_creed.jpg">
					<div class="booksummary">
						<p>Cal Lynch travels back in time to 15th-century Spain through a revolutionary technology that unlocks the genetic memories contained in his DNA. There, he lives out the experiences of Aguilar de Nerha, a distant relative who's also a member of the Assassins, a secret society that fights to protect free will from the power-hungry Templar Order. Transformed by the past, Cal begins to gain the knowledge and physical skills necessary to battle the oppressive organization in the present.</p>
					</div>
						<div class="otherbookdetails">
							<nav>
								<ul>
									<li>Author: Oliver Bowden</li><br>
									<li>Genre: Fantasy, Adventure</li><br>
									<li><a href="https://www.amazon.in/Assassins-Creed-Renaissance-Codex-Book/dp/0141046309/ref=sr_1_1?crid=235P1GDTIAIZP&dchild=1&keywords=assassins+creed+renaissance&qid=1612281015&s=books&sprefix=assassin+creed+renai%2Cstripbooks%2C258&sr=1-1" target="_blank"><button type="submit" class="button_1">Buy on Amazon</button></a></li>
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
        var gsReference = storage.refFromURL('gs://bibliophiles-c6141.appspot.com/Assassin_Creed_Renaissance.pdf');
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


