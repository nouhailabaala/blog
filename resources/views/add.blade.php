@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter un post</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <form action="{{ route('store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Titre</label>
                            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="titre de post...">
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Contenu</label>
                            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Success</button>
                        </div>
                    </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
