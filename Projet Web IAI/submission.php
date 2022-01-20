<!DOCTYPE html>
<html lang="fr">

<?php include 'head-header.php';
include('banner.php');
banner('Inscrivez-vous', 'small-banner'); 
?>

<body>

    <?php
    include 'database.php';
    global $db;
    ?>

    <main class="site-main" id="sub-form">
        <div class="row mt-50">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center heading-separator">Formulaire d'inscription</h2>
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-12 mt-20">
                            <div class="form-group">
                                <label for="name">Nom:</label>
                                <input type="text" name="nom" class="form-control" id="name" required>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20">
                            <div class="form-group">
                                <label for="firstname">Prenom:</label>
                                <input type="text" name="prenom" class="form-control" id="firstname" required>
                            </div>
                        </div>

                    </div>

                    <div class="row" id="picker-radio">

                        <div class="col-6 ">
                            <label for="sex">Sexe</label>
                            <div class="radio-btn">
                                <input type="radio" value="M" name="sexe" id="radio-btn1" required>
                                <label for="radio-btn1">Masculin</label>
                            </div>
                            <div class="radio-btn">
                                <input type="radio" value="F" name="sexe" id="radio-btn2" required>
                                <label for="radio-btn2">Féminin</label>
                            </div>
                        </div>

                        <div class="col-6 justify-content-center">
                            <label for="serie">Série du baccalauréat</label>
                            <br />
                            <select class="selectpicker" name="serieBac">
                                <option value="C">Série C</option>
                                <option value="D">Série D</option>
                                <option value="E">Série E</option>
                                <option value="F1">Série F1</option>
                                <option value="F2">Série F2</option>
                            </select>
                        </div>

                        <div class="col-6 justify-content-center">
                            <label for="AnneeBac">Année d'obtention du Bac</label>
                            <br />
                            <select class="selectpicker" name="anneeBac" required id="AnneeBac" value=""></select>

                            <script>
                                (function() {
                                    let year_start = 1940;
                                    let year_end = (new Date).getFullYear(); // current year
                                    let year_selected = 2021;

                                    let option = '';
                                    option = '<option>2022</option>'; // first option

                                    for (let i = year_start; i <= year_end; i++) {
                                        let selected = (i === year_selected ? ' selected' : '');
                                        option += '<option value="' + i + '"' + selected + '>' + i + '</option>';
                                    }

                                    document.getElementById("AnneeBac").innerHTML = option;
                                })();
                            </script>
                        </div>

                        <div class="col-6 justify-content-center">
                            <label for="nationalite">Nationalité:</label><br />
                            <select class="selectpicker" name="nationalite" required id="">
                                <option value="Bénin">Bénin</option>
                                <option value="Burkina-Faso">Burkina-Faso</option>
                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                <option value="Cap-Vert">Cap-Vert</option>
                                <option value="Gambie">Gambie</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Guinée">Guinée</option>
                                <option value="Guinée-Bissau">Guinée-Bissau</option>
                                <option value="Libéria">Libéria</option>
                                <option value="Mali">Mali</option>
                                <option value="Mauritanie">Mauritanie</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Sénégal">Sénégal</option>
                                <option value="Togo">Togo</option>
                            </select>
                        </div>



                    </div>

                    <div class="date-file-section mb-20">

                        <div class="date-section col-sm-4">
                            <input type="date" required name="dateNaiss">
                        </div>

                        <div class="file-up-section col-sm-4">
                            <label for="file-upload" class="btn btn-border" id="file-up-btn">
                                <i class="fa fa-cloud-upload"></i> Choisir un document
                            </label>
                            <input name="file" id="file-upload" type="file" />
                            <p class="file-up-advice">
                                Fichier PDF uniquement!
                            </p>
                        </div>

                        <div class="text-center col-sm-4">
                            <button class="btn btn-border" type="submit" name="formsend">Soumettre</button>
                        </div>

                    </div>



                </form>
            </div>
        </div><!-- /.form -->













    </main>








    <?php include 'footer.php' ?>
</body>

</html>