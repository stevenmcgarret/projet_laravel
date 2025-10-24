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
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
    </ul><br>
    <h1>Voci la liste des réparateurs :</h1>

    <table class="table table-dark table-striped">
        <thead>
            <td>Id</td>
            <td>Nom du réparateur</td>
            <td>Prénom du réparateur</td>
            <td>Spécialité du réparateur</td>
            <td>Actions</td>
        </thead>
        <tbody>
            @foreach ($Reparateurs as $Reparateur)
                <tr>
                    <td>{{ $Reparateur->id }}</td>
                    <td>{{ $Reparateur->nom }}</td>
                    <td>{{ $Reparateur->prenom }}</td>
                    <td>{{ $Reparateur->specialite }}</td>
                    <td>
                        
                        <a href="{{ route("supprimer_reparateur", ['id'=>$Reparateur->id]) }}">
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </a>
                        <a href="{{ route("modifier_reparateur", ['id'=>$Reparateur->id]) }}">
                            <button type="button" class="btn btn-success">Modifier</button>
                        </a>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>


    <script src={{ asset("assets/js/bootstrap.min.js") }}></script>
</body>

</html>