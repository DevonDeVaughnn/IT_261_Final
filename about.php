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
        <div class="about-div">
            <h2>Who am I?</h2>
        </div>
        <div class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quibusdam maiores
            perspiciatis beatae ipsam, eligendi aspernatur quos, consequuntur id neque tempora tenetur veritatis.
            Officiis,
            aliquid voluptate? Corrupti necessitatibus alias maxime consectetur harum omnis facere quasi id, sequi
            possimus
            quos vero odio quod. Ipsam dignissimos ipsa, animi distinctio quas, ratione rerum, tempora neque fugiat
            maiores
            tempore ducimus laboriosam architecto quibusdam qui aperiam nisi perspiciatis optio explicabo veritatis.
            Voluptatum sed dolorum rem ipsum excepturi, distinctio eveniet, perferendis alias quibusdam consequuntur est
            dolorem magnam doloribus hic harum iste minima vero quas. Quam quasi rerum, labore reiciendis animi ab,
            distinctio aliquid praesentium non quia illo dolor perferendis ratione eligendi accusamus? Sapiente
            voluptatem
            aut dolore eveniet, repellat eligendi sunt porro ut maxime, quos modi odio et. Veniam error quae maiores
            inventore impedit maxime natus ex? Labore tempora dignissimos eaque minus. Voluptas temporibus ipsa error
            harum
            delectus beatae cum? Ipsam commodi veritatis deserunt voluptatibus consectetur est quasi possimus quam fugit
            rerum mollitia laboriosam perferendis eveniet nesciunt delectus cumque, alias quidem voluptas repellendus
            sunt
            amet, vero quisquam. Eligendi dolorum molestias dicta! Quis odio consectetur recusandae, fugiat assumenda
            aliquam magnam, qui repellendus ratione perferendis, tenetur ducimus ullam! Vel voluptatum aut
            exercitationem
            laudantium maxime illum necessitatibus rerum ex alias facilis assumenda esse placeat magnam reiciendis,
            doloremque quidem maiores officia soluta architecto quas. Voluptates itaque sequi placeat laboriosam ad
            similique perspiciatis accusamus! Aliquam unde vel at quo praesentium minima voluptatibus ab, quas, facilis
            sapiente repellat. Harum sit praesentium hic est blanditiis, minima voluptates eaque, quae, accusamus ut
            possimus officiis ab totam. Ea ipsam ducimus est enim itaque dicta quibusdam! Doloribus nobis consequuntur
            in
            ?</div>
        <div class="pictures">
            <div>
                <h2>Inspirations</h2>
            </div>
            <ul>
                <a href="#">
                    <li class="pic"><?php echo $selected_album_1 ?> </li>

                </a>
                <a href="#">
                    <li class="pic"><?php echo $selected_album_2 ?> </li>
                </a>
                <a href="#">
                    <li class="pic"><?php echo $selected_album_3 ?> </li>
                </a>

            </ul>

        </div>
        <div>
            <?php include 'includes/footer.php';?>
        </div>
    </div>

</main>