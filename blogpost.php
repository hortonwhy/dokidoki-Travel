<?php
session_start();
if (!isset($_SESSION["loggedIn"])) { 
	setcookie("prevPage", "./blogpost.php", time() + 1500, "/");
	Header("Location: ./login.php");
}

$author = $_SESSION['loggedIn'];

if (count($_POST) != 0) {
    $posted = true;
    $author = $_SESSION['loggedIn'];
    $title = $_POST['title'];
    $body = $_POST['body'];


    $server = "spring-2021.cs.utexas.edu";
    $user = "cs329e_bulko_cchen99";
    $pwd = "Fire_almond_jazz";
    $dbName = "cs329e_bulko_cchen99";

    $mysqli = new mysqli($server,$user,$pwd,$dbName);
    $author = $mysqli->real_escape_string($author);
	$title = $mysqli->real_escape_string($title);
    $body = $mysqli->real_escape_string($body);
    $mysqli->query("INSERT INTO blogs (title, author, body) VALUES (\"$title\", \"$author\", \"$body\")");   
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dokidoki Travel</title>
    <meta charset="UTF-8">
    <meta name="description" content="ENTER DESCRIPTION HERE">
    <meta name="author" content="ENTER NAME HERE">
  <link rel="stylesheet" href="main.css">
  <script src="script.js" defer></script>
</head> 

<body>

<!-- <img src="assets/images/logo.png" alt="logo pic"> -->
<a href="index.html"><img id="logo" src="assets/images/logo.png" alt="logo pic" width="125px"></a>
    <div id="navBar">
        <table>
            <tr>
                <!--<th><img src="assets/images/logo.png" alt="logo pic" width="75px"></th>-->
                <th><a href="index.html">ドキドキ Travel</a></th>
                <th><a href="anime.html">Anime</a></th>
                <th><a href="prefectures.html">Prefectures</a></th>
		<th><a href="blogpost.php">Blog</a></th>
                <th><a href="aboutUs.html">About Us</a></th>
                <th><a href="contactUs.html">Contact Us</a></th>
		<th><a href="logout.php">Logout</a></th>
            </tr>
        </table>
    </div>
        <form action="blogpost.php" method="POST">
            <table id="blogTable" class="default">
                <th colspan="2">
                    <h3>Create Your Post Below!</h3>
                </th>
                <tr>
                    <td class="blogLabels" class="blogInputs">
                        Posting as:
		    </td>
		    <td id="bloggerName">
			<strong><?php echo($author) ?></strong>
	 	    </td>
                </tr>
                <tr>
                    <td class="blogLabels" class="blogInputs">
                        Title
                    </td>
                    <td id="blogTitleLabel" class="blogInputs">
                        <input type="text" id="blogTitle" name="title" maxlength="30" required>
                    </td>
                </tr>
                <tr>
                    <td class="blogLabels" class="blogInputs">
                        Message
                    </td>
                    <td class="blogInputs">
                        <textarea id="blogBody" name="body" rows="7" cols="50" maxlength="200" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="blogInputs">
			<button class="blogSubmit" type="clear" value="Reset">Clear Text</button>
                        <button class="blogSubmit" type="submit" value="Submit">Submit Post</button>
                    </td>
                </tr>
                        <?php 
                            if ($posted == true){
				echo "<tr><td colspan='2'>";
                                echo("Blog post has been posted successfully.<br>");
                                echo("See your blog post <a href='index.php'>here</a>");
				echo "</td></tr>";
                            }
                            ?>
            </table>
        </form>
</body>

</html>
