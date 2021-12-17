<?php
include 'config.php';
include 'includes/header.php';
$headline = 'Welcome to my Contact Page';
$image = 'albumimage.jpg';

$email = '';
$age = '';
$comments = '';

$email_error = '';
$age_error = '';
$comments_error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['email'])) {
        $email_error = 'Please enter your email.';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['age'])) {
        $age_error = 'Please select your age demographic.';
    } else {
        $age = $_POST['age'];
    }
    if (empty($_POST['comments'])) {
        $comments_error = 'Please share your comments with us!';
    } else {
        $comments = $_POST['comments'];
    }

    function my_songs()
    {
        $my_return = '';
        if (!empty($_POST['song'])) {
            $my_return = implode(', ', $_POST['song']);
        }
        return $my_return;
    }
//end of function

    if (isset(
        $_POST['email'],
        $_POST['age'],
        $_POST['comments'],

    )) {
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test Email,' . date('m/d/y');
        $body = '
        Email: ' . $email . '' . PHP_EOL . '
        Age Demographic: ' . $age . '' . PHP_EOL . '
        Comments: ' . $comments . '' . PHP_EOL . '
        ';
        $headers = array(
            'From' => 'noreply@vanfloghrecords.com',
            'Reply-To' => '' . $email . '',
        );
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
    }
}
// End Server method

?>

<div id="wrapper">
    <main>
        <div>
            <h2><?php echo $headline; ?></h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, rem?
                Nihil quisquam, culpa aliquam
                officiis laudantium ad, molestias eligendi
                provident sapiente sunt at deleniti architecto repellendus vero.
                Earum, repellat? Eaque ex accusantium impedit vero facilis deleniti
                similique aut nulla explicabo!
            </p>
            <img style="width:300px; height:300px; margin:5px auto; padding:2px; border:4px solid brown;"
                src="images/<?php echo $image; ?>" alt="<?php echo $alt; ?>">
        </div>


        <div><?php include 'includes/form.php';?></div>
    </main>
    <aside>
        <h3>Aside for our Form</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Nemo, aut perferendis error aspernatur ex nobis
            consectetur facilis quae magnam natus a totam
            ullam magni accusamus placeat illo modi quisquam. Aliquam.
        </p>
    </aside>
    <?php include 'includes/footer.php';?>
</div>


</html>