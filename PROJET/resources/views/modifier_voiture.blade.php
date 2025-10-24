<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

</html>

<body>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route("welcome") }}">
                <button type="button" class="btn btn-outline-warning">Accueil</button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route("accueil") }}">
                <button type="button" class="btn btn-primary">Ajouter une voiture</button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route("Reparateur") }}">
                <button type="button" class="btn btn-outline-info">Ajouter un réparateur</button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>

        <div class="container-fluid">
            <div class="row">
                <form action="{{ route("save_voiture", ['id' => $atelier->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="immatriculation" class="form-label">L'immatriculation de votre voiture</label>
                        <input type="text" value="{{ $atelier->immatriculation }}" class="form-control w-25"
                            id="immatriculation" name="immatriculation">
                    </div>
                    <div class="mb-3">
                        <label for="marque" class="form-label">La marque de votre voiture</label>
                        <input type="text" value="{{ $atelier->marque }}" class="form-control w-25" id="marque"
                            name="marque">
                    </div>
                    <div class="mb-3">
                        <label for="modele" class="form-label">Le modèle de voiture</label>
                        <input type="text" value="{{ $atelier->modele }}" class="form-control w-25" id="modele"
                            name="modele">
                    </div>
                    <div class="mb-3">
                        <label for="couleur" class="form-label">La couleur de voiture</label>
                        <input type="text" value="{{ $atelier->couleur }}" class="form-control w-25" id="couleur"
                            name="couleur">
                    </div>
                    <div class="mb-3">
                        <label for="annee" class="form-label">L'Année de votre voiture</label>
                        <input type="text" value="{{ $atelier->annee }}" class="form-control w-25" id="annee"
                            name="annee">
                    </div>
                    <div class="mb-3">
                        <label for="kilometrage" class="form-label">Le kilometrage de votre voiture</label>
                        <input type="text" value="{{ $atelier->kilometrage }}" class="form-control w-25"
                            id="kilometrage" name="kilometrage" placeholder="La vitesse">
                    </div>
                    <div class="mb-3">
                        <label for="carrosserie" class="form-label">La carrosserie de votre voiture</label>
                        <input type="text" value="{{ $atelier->carrosserie }}" class="form-control w-25"
                            id="carrosserie" name="carrosserie">
                    </div>
                    <div class="mb-3">
                        <label for="energie" class="form-label">L'énergie de votre voiture</label>
                        <input type="text" value="{{ $atelier->energie }}" class="form-control w-25" id="energie"
                            name="energie" placeholder="Essence, Diesel, Hydride, Électrique">
                    </div>
                    <div class="mb-3">
                        <label for="boite" class="form-label">La boîte de votre voiture</label>
                        <input type="text" value="{{ $atelier->boite }}" class="form-control w-25" id="boite"
                            name="boite">
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>


                </form>
                <script src={{ asset("assets/js/bootstrap.min.js") }}></script>

            </div>
        </div>
</body>

</html>