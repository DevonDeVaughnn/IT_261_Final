<?php
include 'credentials.php';
ob_start();
define('DEBUG', 'TRUE');
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// NAV FUNCTIONS
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['songs.php'] = 'Favorite Songs (database)';
$nav['music.php'] = 'Music';
$nav['videos.php'] = 'Videos';
$nav['contact.php'] = 'Contact';
$nav['shop.php'] = 'Shop (COMING SOON)';

function my_nav($nav)
{
    $my_return = '';
    foreach ($nav as $key => $value) {
        if (THIS_PAGE == $key) {
            $my_return .= '<li><a class="active" href="' . $key . '">' . $value . '</a></li>';
        } else {
            $my_return .= '<li> <a href="' . $key . '">' . $value . '</a></li>';
        } //end else
    } //end foreach
    return $my_return;
} //end function

// Random Album Function

$i = rand(0, 2);
$j = rand(3, 5);
$k = rand(6, 10);
$album[0] = 'Maxwell - Ascension';
$album[1] = 'Musiq Soulchild - Love';
$album[2] = 'Valee - Vlone';
$album[3] = 'Three Days Grace - Home';
$album[4] = 'Raheem DeVaughn - Until';
$album[5] = 'Erykah Badu - On & On';
$album[6] = 'Sevendust - Broken Down';
$album[7] = 'Disturbed - Stricken';
$album[8] = 'Z-Ro - Mind on Paper';
$album[9] = 'Scarface - Untouchable';
$album[10] = 'Isley Brothers - Voyage To Atlantis';
$selected_album_1 = '' . $album[$i] . '';
$selected_album_2 = '' . $album[$j] . '';
$selected_album_3 = '' . $album[$k] . '';
// END ALBUM FUNCTION

$songs[0] = 'Time';
$songs[1] = 'You';
$songs[2] = 'Secret';
$songs[3] = 'Psychedelic';
$songs[4] = 'Atmosphere';
$songs[5] = 'Sober';
$songs[6] = 'Lullaby';

function my_songs($songs)
{
    $song_return = "";
    foreach ($songs as $value) {
        $song_return .= '<li><a href="#"><h3>' . $value . ' (links to each service)<br></h3>
        <p>Lorem ipsum dolor
        sit, amet consectetur adipisicing elit.
        Autem, eum deleniti quia iste animi, molestias distinctio officia officiis
        natus fugiat molestiae assumenda nobis. Libero, laboriosam.</p>
        </a></li>';
    }
    return $song_return;
}

$video[0] = 'Time';
$video[1] = 'You';
$video[2] = 'Secret';
$video[3] = 'Psychedelic';
$video[4] = 'Atmosphere';
$video[5] = 'Sober';
$video[6] = 'Lullaby';

function my_videos($video)
{
    $video_return = "";
    foreach ($video as $value) {
        $video_return .= '<li><a href="#"><h3>' . $value . ' (Official Video)<br></h3>
        <p>Lorem ipsum dolor
        sit, amet consectetur adipisicing elit.
        Autem, eum deleniti quia iste animi, molestias distinctio officia officiis
        natus fugiat molestiae assumenda nobis. Libero, laboriosam.</p>
        </a></li>';
    }
    return $video_return;
}

switch (THIS_PAGE) {
    case 'index.php':
        $title = 'Home Page';
        $body = 'home';
        $headline = 'Welcome to my Home Page!';
        break;
    case 'about.php':
        $title = 'About';
        $body = 'about inner';
        $headline = 'More about me!';
        break;
    case 'contact.php':
        $title = 'Contact Page';
        $body = 'contact inner';
        $headline = 'Contact Me';
        break;
    case 'music.php':
        $title = 'The Music';
        $body = 'music inner';
        $headline = 'Music Page';
        break;
    case 'video.php':
        $title = 'My Videos';
        $body = 'video inner';
        $headline = 'Welcome to my videos!';
        break;
    case 'store.php':
        $title = 'My Store';
        $body = 'store inner';
        $headline = 'Welcome to my Store!';
        break;
    case 'songs.php':
        $title = 'My Songss';
        $body = 'songs inner';
        $headline = 'Welcome to my Favorite Songs!';
        break;
}

$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password = '';
$success = 'You have successfully logged on!';
$errors = array();

function myError($myFile, $myLine, $errorMsg)
{
    if (defined('DEBUG') && DEBUG) {
        echo 'Error in file: <b> ' . $myFile . ' </b> on line: <b> ' . $myLine . ' </b>';
        echo 'Error message: <b> ' . $errorMsg . '</b>';
        die();
    } else {
        echo ' Houston, we have a problem!';
        die();
    }

}