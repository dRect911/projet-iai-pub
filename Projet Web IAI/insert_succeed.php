<div class="titre-section-formation" id="formations">
        <h2 class="heading-separator">Merci beaucoup!</h2>
        <p class="subheading-text">
            <?php
            if (isset($_POST['formsend'])) {
                if ($sexe == 'M') {
                    echo 'Monsieur ' . $nom . ' ' . $prenom . ' votre candidaure a été soumise avec succès!';
                } else {
                    echo 'Mademoiselle ' . $nom . ' ' . $prenom . ' votre candidaure a été soumise avec succès!';
                }
            }

            ?>

            <?php
            if (isset($_POST['formsend'])) {
                echo '<script>
                alert("Votre candidature a été envoyée avec succès!");
                </script>';
            }
            ?>

        </p>
    </div>