<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <form method="POST" action="{{ route('articles.update',$articles->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nom de l'article</label>
                            <input type="text" class="form-control" name="nom" value="{{ $articles->nom}}">
                        </div>
                        <div class="col-md-6">
                            <label>type</label>
                            <input type="text" class="form-control" name="type" value="{{ $articles->type}}">

                        </div>
                        <div class="col-md-12">
                            <label>Description</label>
                            <input  type="text" class="form-control" name="description" value="{{ $articles->description}}">

                        </div>
                        
                        <div class="col-md-6">
                            <label for="">ajouter un image</label>
                            <input type="file" name="image" /><br />

                        </div>
                    </div>
          
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="update">
                        </div>

                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
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
         
            justify-content: space-between;
        }
     
    </style>
@endpush  
</body>
</html>


