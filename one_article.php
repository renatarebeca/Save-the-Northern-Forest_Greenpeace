<?php

$db_connection = new PDO("","", "");

//if comment in $_POST...
//has the comment form been submited? then the $_POST ['comment'] will exist/be set.
if(isset($_POST['comment'])){
    $comment = $_POST['comment']; //comment in $post is the name from the form
    $ThirdID = $_POST['article_id'];
    $username = $_POST['username'];
    $sql = "INSERT INTO comments (article_id, username, comment, time) VALUES($ThirdID, '$username', '$comment', NOW())";
    $result = $db_connection->query($sql);
}


//if there is article id in $_GET
if(isset($_GET['myID'])){

    $SecondID = $_GET['myID']; //myID - is var name//

    //if likes..goes here...
    if(isset($_GET['like'])){
        $sql = "UPDATE news SET likes = likes + 1 WHERE article_id = $SecondID";
        $db_connection->query($sql);
    }



    $sql = "select * from news WHERE article_id = $SecondID";
    $result = $db_connection->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/news-style.css" type="text/css">
        <link rel="stylesheet" href="css/nav-style.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Kanit:600" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NEWS</title>
    </head>

    <body>
        
        <header>
            <div class="row">
                <a href="mappage.html"><img class="imgg" src="images/logo.png" alt="logo"></a>

                <nav id="nav">
                    <a href="petition.php">PETITION</a>
                    <a href="index.html"><nobr>WORLD MAP</nobr></a>
                    <a href="video.html">VIDEO</a>
                    <a id="active" style="color:#fae6cd;" href="news.php">NEWS</a>
                    <a href="contact.html">CONTACT</a>
                </nav>
            </div>
        </header>
        
        <section>
            <?php 
            $row = $result->fetchObject();
            echo "<article style='margin-left: 20px; margin-right:20px'>";
            echo "<h1>$row->title</h1>";
            echo "<h3>By:$row->author</h3>";
            echo "<img src='images/$row->image' alt='image'> ";
            echo "<p>$row->article</p>";
            echo "<p class='date'>$row->date</p>";
            echo "</article>";
            echo "<div class='body'>";
            echo "<a class='btn read back' href='news.php'> < Back </a>";
            echo "<p style='padding-top: 10px'> <a class='likenumber' href='?like&myID=$row->article_id'> <img src='images/likeicon.png' alt='likeicon'> $row->likes </a></p>";
            ?>
            <div class="comments">
                <h3 class="usercom"> User comments</h3>
                <?php 
                $sql="SELECT * FROM comments WHERE article_id=$SecondID";
                $result = $db_connection->query($sql);

                //is it true that there are more comments?
                //give me the next row in the comment table 
                while ($row=$result->fetchObject()){
                    echo "<h2 class='comuser'>$row->username <p class='comtime'>$row->time</p></h2>";
                    echo "<p class='comm'>$row->comment</p>";
                }

                ?>
            </div>
            <!-- inc form -->
            <!-- empty action will reload page -->
            <!-- the post method sends data in an invisible way..in memory -->
            <form class="form" action="" method="post">
                <h3 class="formhead">Write a comment</h3>
                <label class="formlabel"> User name </label>
                <br>
                <input class="usernamelabel" size="34" type="text" name="username" placeholder="Enter your name here" required>
                <br><br>
                <label class="formlabel"> Comment </label>
                <br>
                <textarea class="textarea" type="text" rows="10" cols="36" name="comment" required> </textarea>
                <input type="hidden" name="article_id" value="<?php echo $SecondID; ?>">
                <!-- input type hidden are not displayed on the page -->
                <br><br>
                <input class="btn read submitbutton" type="submit" value="Submit comment">

            </form>
            <?php echo "</div>";?>
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
                    <a href="http://www.greenpeace.org/international/en/"> <img class="footer_img" src="images/logo.png" alt="Footer logo"></a>
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
    </body>
</html>
