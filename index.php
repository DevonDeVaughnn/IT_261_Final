<?php
session_start();
include 'config.php';
include 'includes/header.php';
$headline = 'Enigma 2/22/22';
$welcome = 'Welcome to Devvy Van Flogh\'s Official Page';
$thanks = 'Thanks for showing your support.';

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first!';
    header('Location:login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include 'includes/header.php';

if (isset($_SESSION['success'])): ?>

<div class="success">
    <h3><?php echo $_SESSION['success'];
unset($_SESSION['success']) ?></h3>
</div>
<?php endif;
if (isset($_SESSION['username'])): ?>
<header>
    <div class="welcome-logout">
        <h3>Hello <?php echo $_SESSION['username']; ?>!</h3>
        <p><a href="index.php?logout='1'">Logout</a></p>
    </div>
    <!-- end welcome-logout div -->
    <?php endif;?>
</header>

<div id="wrapper">
    <div>
        <h4 id="headline"><?php echo $headline; ?></h4>
    </div>
    <main id="home-main">
        <div class="center">
            <h3><?php echo $welcome; ?></h3>
        </div>
        <div class="bottom">
            <h2><?php echo $thanks; ?></h2>
        </div>

    </main>

    <aside>
        <h2><a style="color:cornflowerblue;" href="https://github.com/DevonDeVaughnn/IT_261_Final">GitHub
                Link</a></h2>
    </aside>
    <?php include 'includes/footer.php';?>

</div>