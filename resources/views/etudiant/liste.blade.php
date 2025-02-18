<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD IN LARAVEL </title>
  </head>
  <body>
  
     <div class="container text-center">
        <div class="row">
            <div class="col s12">
                        <h1>CRUD IN LARAVEL </h1>
             <hr>
                <a href="/ajouter" class="btn btn-primary"> Ajouter un etudiant</a>
             <hr>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <table class="table">
                   <thead>
               
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Tel</th>
                        <th>Niveau</th>
                        <th>Filière</th>
                        <th>Ations</th>
                    </tr>
                   </thead>
                   <tbody>
                  @php
                      $ide=1;
                  @endphp

                 @foreach($etudiants as $etudiant)
                    <tr>
                        <td>{{$ide }}</td>
                        <td>{{$etudiant->nom}}</td>
                        <td>{{$etudiant->prenom}}</td>
                        <td>{{$etudiant->tel}}</td>
                        <td>{{$etudiant->niveau}}</td>
                        <td>{{$etudiant->filiere}}</td>
                        <td>
                            <a href="/update-etudiant/{{$etudiant->id}}" class="btn btn-info">Modifier</a>
                            <a href="/delete-etudiant/{{$etudiant->id}}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                    @php
                      $ide +=1;
                  @endphp 
                @endforeach    
                   </tbody>
                </table>
                {{$etudiants->links()}}
            </div>

        </div>

     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>