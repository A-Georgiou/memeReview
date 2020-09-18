<?php
try {
	$db = new PDO('mysql:host=localhost;dbname=dbname', 'username', 'password');
} catch (PDOException $e) {
	die($e->getMessage());
}
?>

<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <script>
            function hide(num){
                generateVideo();
            }

            function generateVideo(){
                document.getElementById('youtube-content').src = "none";
            }
        </script>
    </head>
    <body onload="generateVideo()">
        <div class="review-text">
            The Ultimate Meme
        </div>
        <div class="meme-cent-1">
            <iframe id="youtube-content" width="1920" height="1080" src="" frameborder="0"  allowfullscreen></iframe>
        </div>
        <div class="review-form"">
            <div class="rating">
                <span onclick="hide(5);" id="5-star">☆</span>
                <span onclick="hide(4);" id="4-star">☆</span>
                <span onclick="hide(3);" id="3-star">☆</span>
                <span onclick="hide(2);" id="2-star">☆</span>
                <span onclick="hide(1);" id="1-star">☆</span>
            </div>
        </div>
    </body>
</html>
