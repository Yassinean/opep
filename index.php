<?php
include("php/connexion.php");

include("php/header.php");
?>
<section class="home">
    <div class="secthome">
        <h2>PLANT'S IS THE REAL BEAUTY OF EARTH</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio at quo neque ipsa autem error corporis veniam
            ipsum provident dicta iusto id, quis animi facilis delectus numquam voluptate doloribus consectetur
            inventore quidem? Recusandae doloremque ratione esse natus atque porro voluptatibus magni explicabo.
            Dolores, asperiores. Quidem perferendis tempora voluptatem dolorem amet.</p>
    </div>
</section>

<div class="text">
    <h2>Plantes categories</h2>
    <p></p>
    <?php
    $req = "SELECT * FROM plantes";
    $sql = mysqli_query($conn, $req);
    while ($row = mysqli_fetch_array($sql)) {
        ?>
    <div class="card-list">
        <a href="#" class="card-item">
            <img src="<?php echo $row['images'] ?>" alt="Card Image">
            <h3><?php echo $row['nom'] ?></h3>
            <span class="developer"><?php echo $row['prix']?>DH</span>
            <p><?= $row['description'];  ?></p>
                <div class="arrow">
                    <i class="fas fa-arrow-right card-icon"></i>
                </div>
            </a>
        </div>
    <?php } ?>
    <br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima libero consequatur necessitatibus
        voluptatibus vel, ut asperiores magnam velit, eum veritatis natus, dolorum sit ipsum quidem laborum!
        Facilis officia itaque, explicabo harum illum, repellat nihil corporis! Dolor, libero vero, consequuntur
        sed necessitatibus corporis. Facilis autem natus animi pariatur quaerat rerum nemo quibusdam veritatis
        provident error nostrum ratione dolore officiis non amet, quidem dolores eaque sint blanditiis odio
        porro ut, quam soluta. Necessitatibus, aperiam eum doloremque voluptate qui aliquid consequatur
        aspernatur debitis expedita unde vitae quia officiis, delectus, possimus ratione ex rerum dignissimos
        maxime molestiae asperiores. Tempora recusandae debitis exercitationem quo facere reprehenderit tenetur,
        dolore laboriosam repellat modi. Magnam ratione iste quo perspiciatis explicabo deserunt temporibus
        quaerat inventore quod accusantium atque, dolores commodi nobis distinctio, fugit illum, soluta quisquam
        est in omnis! Recusandae incidunt voluptatem, consequuntur doloremque! Nisi incidunt, iure quidem
        dolores odit sint, ut quam. Ipsum, maiores doloremque velit numquam quisquam.</p>
</div>

</body>

</html>