<main>
    <div class="container-fluid border border-2 rounded col-10 mx-auto p-2 m-2">
        <div class="row m-2">
            <h1 class="text-center">Liste des projets</h1>
            <div class="col-8">
                <div class="input-group mb-2 mx-auto col-2">
                    <input type="text" class="form-control" placeholder="mots-clefs, sujet, nom du projet,..." aria-label="Username" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1"><button type="button" class="btn">Rechercher</button></span>
                </div>
                <div class="border border-2 rounded mb-2">
                    <!--foreach pour chaque élément  -->
                    <div>
                        <div>
                            <img class="rounded img-thumbnail" src="" alt="">
                            <p>Author</p>
                        </div>
                        <div class="justify-content-end">
                            <h2>Titre du projet</h2>
                            <p>truncated text</p>
                        </div>
                        <a href="#"><button type="button" class="btn btn-light">Accèder au projet</button></a>
                    </div>
                </div>
                <div class="input-group mb-2 mx-auto">
                    <span class="input-group-text" id="basic-addon1"><a href="#"><button type="button" class="btn btn-light">Créer son projet</button></a></span>
                </div>
            </div>
        </div>
    </div>
</main>