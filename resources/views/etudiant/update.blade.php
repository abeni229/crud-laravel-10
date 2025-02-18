<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD IN LARAVEL </title>
  </head>
  <body>
  
     <div class="container ">
        <div class="row">
            <div class="col s12">
                <h1>MODIFIER UN ETUDIANT LARAVEL-10</h1>
                <hr>
                     @if (session('status'))
                          <div class="alert alert-success">
                              {{session('status')}}
                          </div>
                     @endif
                     <ul>
                     @foreach($errors->all() as $error)
                     <li class="alert alert-danger">{{$error}}</li>
                     @endforeach
                     </ul>
                     <form action="/update/traitement" method="POST" >
                        @csrf

                        <input type="text" name="id" style="display :none;" value="{{$etudiants->id}}">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" value="{{$etudiants->nom}}">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prenom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" value="{{$etudiants->prenom}}">
                        </div>
                        <div class="mb-3">
                            <label for="niveau" class="form-label">Niveau</label>
                            <input type="text" class="form-control" id="niveau" name="niveau" value="{{$etudiants->niveau}}">
                        </div>
                        <div class="mb-3">
                            <label for="filiere" class="form-label">Filière</label>
                            <input type="text" class="form-control" id="filiere" name="filiere" value="{{$etudiants->filiere}}">
                        </div>
                        <div class="mb-3">
                            <label for="tel" class="form-label">Telephone</label>
                            <input type="number" class="form-control" id="tel" name="tel" value="{{$etudiants->tel}}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">MODIFIER UN ETUDIANT</button>
                         <br> <br>

                         <a href="/etudiant" class="btn btn-danger">Revenir à la liste des etudiants</a>
                    </form>
        </div>    
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>