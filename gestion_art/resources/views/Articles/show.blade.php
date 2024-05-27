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
<div class="carte">
            
            <div class="card" style="width:50rem;">
  <img src="{{$article->image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$article->nom}}</h5>
    <p class="card-text"> {{$article->description}}</p>
    <p class="card-text"> {{$article->type}}</p>
     <p class="card-date">créer le:{{$article->created_at}}</p>
  
   
    
</div>
  </div>
  </div>

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
         margin-top: 5%;
            display: flex; 
         margin-left: 20%;
         margin-right: 5%;
        flex-wrap: wrap;
            justify-content: space-between;
        }
        .card-title{
            font-size: 30px;
            margin: 10px;
            font-weight: bolder;
        }
        .card-date{
            color: blue;
        }
    </style>
@endpush
</body>
</html>