@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mes postes</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif






                    <div class="accordion" id="accordionExample">

                        <!--@foreach( $posts ?? '' as $key => $post )
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#{{ ++$key }}" aria-expanded="false" aria-controls="collapseThree">
                                        {{ $post->title }}
                                    </button>
                                </h2>
                            </div>
                            <div id="{{ ++$key }}" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    {{ $post->content }}
                                </div>
                            </div>
                        </div>
                        @endforeach-->


                        <div class="accordion" id="accordionExample">
                            @if ( count($posts) )
                            @foreach( $posts as $key => $post )
                            <div class="card">
                                <div class="card-header" id="heading{{$key}}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                                            {{ $post->title }}
                                        </button>
                                        <form action="{{ route('destroy', $post->id)}}"  method="post">
                                            <input type="hidden" name="_method" value="delete">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs btn-primary float-lg-right">(x)</button>
                                        </form>
                                    </h2>
                                </div>

                                <div id="collapse{{$key}}" class="collapse show" aria-labelledby="heading{{$key}}" data-parent="#accordionExample">
                                    <div class="card-body">
                                        {{$post->content }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <p class="danger"> there's no posts available.</p>
                            @endif
                        </div>



                    </div>












                </div>
            </div>
        </div>
    </div>
</div>
@endsection
