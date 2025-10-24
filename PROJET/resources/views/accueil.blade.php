<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <title>Document</title>
</head>

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
            <a class="nav-link" href="{{ route("Reparateur") }}">
                <button type="button" class="btn btn-outline-primary">Réparations</button>
            </a>
        </li>
    </ul><br>

    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="button">Ajouter une voiture !</button>
    </div>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="w-50 p-5 bg-white rounded-4 border" style="box-shadow: 0 8px 30px rgba(0,0,0,0.15);">
            <form action="{{ route("enregistrer") }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="immatriculation" class="form-label">L'immatriculation de votre voiture</label>
                    <input type="text" class="form-control w-100" id="immatriculation" name="immatriculation">
                </div>
                <div class="mb-3">
                    <label for="marque" class="form-label">La marque de votre voiture</label>
                    <input type="text" class="form-control w-100" id="marque" name="marque">
                </div>
                <div class="mb-3">
                    <label for="modele" class="form-label">Le modèle de voiture</label>
                    <input type="text" class="form-control w-100" id="modele" name="modele">
                </div>
                <div class="mb-3">
                    <label for="couleur" class="form-label">La couleur de voiture</label>
                    <input type="text" class="form-control w-100" id="couleur" name="couleur">
                </div>
                <div class="mb-3">
                    <label for="annee" class="form-label">L'Année de votre voiture</label>
                    <input type="text" class="form-control w-100" id="annee" name="annee">
                </div>
                <div class="mb-3">
                    <label for="kilometrage" class="form-label">Le kilometrage de votre voiture</label>
                    <input type="text" class="form-control w-100" id="kilometrage" name="kilometrage"
                        placeholder="La vitesse">
                </div>
                <div class="mb-3">
                    <label for="carrosserie" class="form-label">La carrosserie de votre voiture</label>
                    <input type="text" class="form-control w-100" id="carrosserie" name="carrosserie">
                </div>
                <div class="mb-3">
                    <label for="energie" class="form-label">L'énergie de votre voiture</label>
                    <input type="text" class="form-control w-100" id="energie" name="energie"
                        placeholder="Essence, Diesel, Hydride, Électrique">
                </div>
                <div class="mb-3">
                    <label for="boite" class="form-label">La boîte de votre voiture</label>
                    <input type="text" class="form-control w-100" id="boite" name="boite">
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>


    <script src={{ asset("assets/js/bootstrap.min.js") }}></script>
</body>

</html>