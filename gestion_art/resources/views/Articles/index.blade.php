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

        <h3 align="center" class="mt-5">Gestion des Articles</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

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
                            <textarea type="text" class="form-control" name="description"></textarea>

                        </div>
                        
                        <div class="col-md-6">
                            <label for="">ajouter un image</label>
                            <input type="file" name="image" /><br />

                        </div>
                    </div>
          
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="envoyer">
                        </div>

                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <div class="carte">
            @foreach ($Article as $key => $article )
            
            <div class="card" style="width: 18rem;">
  <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA1eSGWZ.img?w=1920&h=1080&q=60&m=2&f=jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$article->nom}}</h5>
    <p class="card-text"> {{$article->description}}</p>
   
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
      
        .carte{
         
            display: flex; 
         margin-left: 5%;
         margin-right: 5%;
            justify-content: space-between;
        }
    </style>
@endpush
</body>
</html>