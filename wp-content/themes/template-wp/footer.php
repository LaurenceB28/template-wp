<img src="<?php echo get_template_directory_uri(); ?>/img/Contrast 2.png" alt="">

<?php wp_footer(); ?>
<footer <?php echo get_template_directory_uri(); ?>>
    <div class="text">
        <h4 <?php echo get_template_directory_uri(); ?>>DECOUVREZ</h4>
        <h6 <?php echo get_template_directory_uri(); ?>>Articles les plus populaires</h6>
    </div>
    <div class="container" <?php echo get_template_directory_uri(); ?>>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo get_template_directory_uri(); ?>/img/tom-grimbert-661519-unsplash.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo get_template_directory_uri(); ?>/img/tom-grimbert-661519-unsplash.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo get_template_directory_uri(); ?>/img/tom-grimbert-661519-unsplash.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <!-- <div class="infos">
        <div>
            <h5>Acces rapide</h5>
            <a href="Accueil"></a>
            <a href="Catégorie 1">Catégorie 1</a></br>
            <a href="Catégorie 2">Catégorie 2</a></br>
            <a href="Catégorie 3">Catégorie 3</a></br>
        </div>
        <div>
            <h5>Contactez-nous</h5>
            <p>70 rue des jacobins</p>
            <p>80000 Amiens</p>
            <a href="mail">contactus@lamnu.fr</a>
        </div>
    </div> -->
    <form class="newsletter-form">
        <p>inscrivez vous à notre newsletter</p>
        <input type="email" name="email" placeholder="E-mail">
        <input type="submit" value="Je m'abonne">
    </form>
    <?php get_template_part('newsletter'); ?>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>