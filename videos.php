<?php
include 'config.php';
include 'includes/header.php';

?>

<main>
    <div id="wrapper">
        <div id="hero">
            <h1>Devvy Van Flogh. Maybe motivational quotes, idk</h1>
            <h4><?php echo $headline; ?></h4>
        </div>

        <div class="songs">
            <div>
                <h2>Videos</h2>
            </div>
            <ul>
                <?php echo my_videos($video) ?>
            </ul>

        </div>
        <div>
            <?php include 'includes/footer.php';?>
        </div>
    </div>

</main>