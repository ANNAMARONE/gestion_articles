@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Gestion des Articles</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nom de l'article</label>
                            <input type="text" class="form-control" name="emp_name">
                        </div>
                        <div class="col-md-6">
                            <label>Date de creation</label>
                            <input type="date" class="form-control" name="dob">

                        </div>
                        <div class="col-md-12">
                            <label>Description</label>
                            <input type="text" class="form-control" name="dob">

                        </div>
                        <div class="col-md-6">
                            <label>type</label>
                            <input type="text" class="form-control" name="dob">

                        </div>
                        <div class="col-md-6">
                            <label for="">ajouter un image</label>
                            <input type="file" name="monfichier" /><br />

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
    </style>
@endpush