<?php
include 'config.php';

// if isset $GET['today']

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
} else {
    header('Location: songs.php');
}

$sql = 'SELECT * FROM songs WHERE song_id = ' . $id . '';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or
die(myError(__FILE__, __LINE__, mysqli_connect_error()));

//create variable $result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    // while loop --- while loop will return array
    while ($row = mysqli_fetch_assoc($result)) {
        //do not echo here, assign row to new variable
        $title = stripslashes($row['title']);
        $artist = stripslashes($row['artist']);
        $genre = stripslashes($row['genre']);
        $blurb = stripslashes($row['blurb']);
        $feedback = '';
    } //ending while
} else {
    $feedback = 'Something is not working!!!!!';
} //ending if
// for the big assignment, call out the header include here
include 'includes/header.php';
?>
<main class="song-main">
    <h1>Welcome to <?php echo $title;
?>'s page!</h1>
    <?php
if ($feedback == '') {
    echo '<ul>';
    echo '<li><b>Artist: </b>' . $artist . '</li>';
    echo '<li><b>Song: </b>' . $title . '</li>';
    echo '<li><b>Genre: </b>' . $genre . '</li>';
    echo '</ul>';

    echo 'Return back to the <a href="songs.php">Song page</a>';
}

?>
</main>
<aside>
    <?php
if ($feedback == '') {
    echo '<img class="image" src="images/songs/song' . $id . '.jpg" alt="' . $title . ' ">';
    echo '<p class="blurb">' . $blurb . '</p>';
}
?>
</aside>

</div>
<!--end wrapper-->

<?php
mysqli_free_result($result);
mysqli_close($iConn);
include 'includes/footer.php';