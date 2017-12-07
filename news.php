<?php
$db_connection = new PDO("","", "");
$sql = "SELECT `article_id`, `title`, `author`,`date`, `image`, SUBSTR(`article`, 1, 100) as short FROM `news`";
$result = $db_connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Kanit:600" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/news-style.css">
        <link rel="stylesheet" href="css/nav-style.css">
        <title>NEWS</title>
    </head>
    <body>
        <header>
            <div class="row">
                <a href="mappage.html"> <img class="imgg" src="images/logo.png" alt="logo"></a>

                <nav id="nav">
                    <a href="petition.php">PETITION</a>
                    <a href="index.html"><nobr>WORLD MAP</nobr></a>
                    <a href="video.html">VIDEO</a>
                    <a id="active" style="color:#fae6cd;" href="news.php">NEWS</a>
                    <a href="contact.html">CONTACT</a>
                </nav>
            </div>
        </header>

        <!--NEWS LIST-->
        <section>
            <h1 class="news">News</h1>
            <?php 
            while($row = $result->fetchObject()) {
                echo "<div class='col-xs-12 col-sm-12 col-md-4'>";
                echo "<article>";
                echo "<img class='article-img' src='images/$row->image' alt='image'> ";
                echo "<h1>$row->title</h1>";
                echo "<p>$row->short</p>";
                echo"<a class='btn read' href='one_article.php?myID=$row->article_id'>Read more</a>";
                echo "</article>";
                echo "</div>";
            }
            ?>
        </section>

        <!--FOOTER-->
        <div style="bottom: 0;" class="row footer">
            <div class="footer_wrap">
                <div class="col-sm-4 about_footer">
                    <h3 class="contacth3"> Address </h3>
                    <p class="prg"> Njalsgade 21 G,</p>
                    <p class="prg"> 2300 København S,</p>
                    <p class="prg"> Copenhagen,</p>
                    <p class="prg"> Denmark</p>
                </div>
                <div class="col-sm-4 logo_footer"> 
                    <a href="http://www.greenpeace.org/international/en/"><img class="footer_img" src="images/logo.png" alt="Footer logo"></a>
                </div>
                <div class="col-sm-4 about_footer">
                    <h3 class="contacth3">Thank you for your interest! </h3>
                    <p class="prg"> If you are a supporter </p>
                    <p class="prg"> you can find further info</p>
                    <p class="prg"> on freephone</p>
                    <p class="prg"> +31 (0) 20 718 20 00 </p>
                </div>
            </div>
        </div>
        <!--END FOOTER-->


        <script src="jquery/nav-jquery.js"></script>

    </body>
</html>
