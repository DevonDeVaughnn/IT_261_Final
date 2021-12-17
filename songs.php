<?php
include 'config.php';
include 'includes/header.php';
?>


<main>
    <h1>Welcome to my Favorite Songs</h1>
    <?php
$sql = 'SELECT * FROM songs';
// connect to db using mysqli_connect() function
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or
die(myError(__FILE__, __LINE__, mysqli_connect_error()));
//create variable $result
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));
//if statement --- if rows > 0 ... yippy skippy

if (mysqli_num_rows($result) > 0) {
    // while loop --- while loop will return array
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div id="wrapper">';
        echo '<h2>' . $row['artist'] . '</h2>';
        echo '<h4>' . $row['title'] . '</h4>';
        echo '<p>' . $row['genre'] . '</p>';
        echo '<a href="song-view.php?id=' . $row['song_id'] . '"> More </a>!</h3>';
        echo '<hr>';
        echo '</div>';
    }
} else {
    echo 'Houston, we have a problem!!!';
}
?>
</main>
<aside>
    <h3><a href="index.php">Back Home</a></h3>
</aside>


<!--end wrapper-->
<?php
mysqli_free_result($result);
mysqli_close($iConn);