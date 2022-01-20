<!DOCTYPE html>
<html lang="fr">

<?php 
include('head-header.php');
include('banner.php'); 
banner('Connexion à l\'interface Administrateur', 'small-banner');
?>

<body>

    <main class="site-main" id="sub-form">
        <div class="row mt-50">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center heading-separator"></h2>
                <form action="admin.php" method="post">
                    <div class="row">
                        <div class="col-sm-12 mt-20">
                            <div class="form-group">
                                <label for="admin-username">Nom d'utilisateur:</label>
                                <input type="text" name="admin-username" class="form-control" id="admin-username" required>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20">
                            <div class="form-group">
                                <label for="admin-pass">Mot de passe:</label>
                                <input type="password" name="admin-pass" class="form-control" id="admin-pass" required>
                            </div>
                        </div>

                    </div>
                    <div class="text-center mt-20 mb-20">
                        <button class="btn btn-border" type="submit" name="admin-formsend">Se connecter</button>
                    </div>
                </form>
            </div>
        </div><!-- /.form -->













    </main>






    <?php include('footer.php') ?>
</body>

</html>