<!-- CONTENT -->
<!-- BLOC 1 -->
    <div class="creation_concours container">
        <h1 style="font-size: 31px; font-weight: 700;">Créez un concours</h1>

        <!-- <form method="post" action="" enctype="multipart/form-data"> -->

        <?php 
            echo $error;
            echo form_open_multipart('Admin/createConcours'); 
            echo validation_errors(); 
        ?>


        <div class="row">

            <div class="col-xs-12 col-sm-12">


                <div class="form-group">
                    <label for="name_competition">Nom du concours : </label>
                    <input type="text" class="form-control" placeholder="Nom" name="name_competition"/>
                </div>


                <div class="form-group">
                    <label for="date_START">Date de début : </label>
                    <input type="text" class="form-control" id="date_START"
                           placeholder="YYYY-MM-DD" name="date_START" />
                </div>

                <div class="form-group">
                    <label for="heure_START">Heure de début : </label>
                    <input type="text" name="heure_START" id="heure_START" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="date_END">Date de fin : </label>
                    <input type="text" class="form-control" id="date_END"
                           placeholder="YYYY-MM-DD" name="date_END" />
                </div>

                <div class="form-group">
                    <label for="heure_END">Heure de fin : </label>
                    <input type="text" class="form-control" id="heure_END" name="heure_END" />
                </div>

            </div>

        </div>

        <div class="row">

            <h1 style="font-size: 31px; font-weight: 700; text-align: center">Création des
                pages</h1>

            <div class="col-xs-12 col-sm-12">
                <div class="form-group">
                    <label for="create_accueil">Page d'accueil du concours : <br /></label>
                    <textarea name="create_accueil" id="create_accueil" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="name_lot">Nom du lot à gagner : </label><br />
                    <input type="text" class="form-control" name="name_lot" /><br />

                    <label for="img_lot">Image du lot : </label></br>
                    <input type="file" name="img_lot" /><br />

                    <label for="create_lot">Description du lot : <br /></label>
                    <textarea name="create_lot" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="create_rules">Réglement : <br /></label>
                    <textarea name="create_rules" id="create_rules" cols="30" rows="10"></textarea>
                </div>
                <div class="choix_template">
                    <label for="template">Choisir une template </label><br />
                    <select name="template">
                      <option value="theme1">Thème 1</option>
                      <option value="theme2">Thème 2</option>
                      <option value="theme3">Thème 3</option>
                    </select>
                </div>
                <div class="validation_concours">
                    <input type="submit" name="validation_concours" class="button btn" value="Valider" />
                </div>
            </div>


        </div>
        </form>
    </div>
