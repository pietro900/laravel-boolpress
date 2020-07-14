@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center">
                    <h1 class="mt-3 mb-3">Dettagli posts</h1>
                </div>
                <p>
                    <strong>Titolo:</strong>
                    {{ $post->title }}
                </p>
                <p>
                    <strong>Contenuto:</strong>
                    {{ $post->content }}
                </p>
                <p>
                    <strong>Slug: </strong>
                    {{ $post->slug }}
                </p>
                <p>
                    <strong>Creato il: </strong>
                    {{ $post->created_at }}
                </p>
                <p>
                    <strong>Aggiornato il: </strong>
                    {{ $post->updated_at }}
                </p>
            </div>
        </div>
    </div>
@endsection
