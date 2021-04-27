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
			<h1>Alchemist</h1>
			<br>
				<img src="img/alchemist.jpg">
					<div class="booksummary">
						<p>The Alchemist tells the story of a young shepherd named Santiago who is able to find a treasure beyond his wildest dreams. Along the way, he learns to listen to his heart and, more importantly, realizes that his dreams, or his Personal Legend, are not just his but part of the Soul of the Universe.</p>
					</div>
						<div class="otherbookdetails">
							<nav>
								<ul>
									<li>Author: Paulo Coelho</li><br>
									<li>Genre: Philosophy</li><br>
									<li><a href="https://www.amazon.in/Alchemist-Paulo-Coelho/dp/8172234988/ref=sr_1_2?adgrpid=58626008625&dchild=1&ext_vrnc=hi&gclid=Cj0KCQiAx9mABhD0ARIsAEfpavRxtAV7gexFrUzYguBJsVPCM03O0-ptSyT_HSSUrKT-uk7fyD5OAugaAqPGEALw_wcB&hvadid=356393543658&hvdev=c&hvlocphy=9300773&hvnetw=g&hvqmt=b&hvrand=11978269095829767948&hvtargid=kwd-303180706236&hydadcr=15251_1947268&keywords=alchemist+book+paulo+coelho&qid=1612101467&sr=8-2&tag=googinhydr1-21" target="_blank"><button type="submit" class="button_1">Buy on Amazon</button></a></li>
									<li><a href="ViewCart.php"><button type="submit" class="button_2">Add to Shelf</button></a></li>
									<li><button type="submit" class="button_1" 
									onclick='downloadFile()'>Download PDF</button></li>
								</ul>
							</nav> '
						</div>

					</div>
			</div>
</section>
<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-storage.js"></script>
<script src="firebaseConfig.js"></script>
<script>
	function downloadFile(){
        var gsReference = storage.refFromURL('gs://bibliophiles-c6141.appspot.com/Alchemist.pdf');
	// Get the download URL
        gsReference.getDownloadURL().then(function(url) {
  
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


