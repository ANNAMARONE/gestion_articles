<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" id='titre'class="mt-5">Gestion des Articles</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-18">

            <div class="form-area">
                <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nom de l'article</label>
                            <input type="text" class="form-control" name="nom">
                        </div>
                        <div class="col-md-6">
                            <label>type</label>
                            <input type="text" class="form-control" name="type">

                        </div>
                        <div class="col-md-12">
                            <label>Description</label>
                            <textarea type="text" class="form-control" name="description" ></textarea>

                        </div>
                        
                        <div class="col-md-4">
                            <label for="">ajouter un image(url)</label>
                            <br>
                            <input type="text"class="form-control" name="image" /><br />

                        </div>
                        <div class="row1">
                        <div class="col-md-12 mt-5">
                            <input type="submit" class="btn btn-primary" value="envoyer">
                        </div>
                    </div>
          
                    </div>
                    

                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <div class="carte">
            @foreach ($Article as $key => $article )
            
            <div class="card" style="width:30rem;">
  <img src="{{$article->image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$article->nom}}</h5>
     <p class="card-date">créer le:{{$article->created_at}}</p>
     <a href="{{route('articles.show',$article->id)}}"> details</a>
   
    <div class="bg-info clearfix">
        <a href="{{ route('articles.edit',$article->id)}}">
        <button type="button" class="btn btn-primary float-start">modifier</button>
    </a>
 
  <form action="{{ route('articles.destroy',$article->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger float-end">suprimer </button>
                            </form>
</div>
  </div>
  </div>

  @endforeach  
  </div> 
         

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
        .button{
            display:flex;
            margin: 10%;
            padding-top: 10%;

        }
      textarea{
        height: 10rem;
      }
        .carte{
         margin-top: 5%;
            display: flex; 
         margin-left: 5%;
         margin-right: 5%;
            justify-content: space-between;
            flex-wrap: wrap;
            padding-bottom: 10rem;
           margin-bottom: 10px;
        
        }
        #titre{
            font-size: 30px;
            font-weight:bolder;
            font-family:'Courier New', Courier, monospace ;
        }
       
    </style>
@endpush
</body>
</html>