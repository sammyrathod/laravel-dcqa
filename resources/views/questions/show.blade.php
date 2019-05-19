@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._messages')
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="d-flex align-item-center">
                            <h1>{{ $question->title }}</h1>
                            <div class="ml-auto">
                                <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary"> Back to All Questions </a>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="media">
                        <div class="d-flex flex-column vote-control">
                            <a title="This questgion is useful" class="vote-up">
                               <i class="fas fa-caret-up fa-3x"></i>
                            </a>
                            <span class="votes-count">1233</span>
                            <a title="This questgion is not useful" class="vote-down off">
                                    <i class="fas fa-caret-down fa-3x"></i>
                            </a>
                            <a title="Click to mark as favorite question (Click again to undo)" class="favorite mt-2 favorited">
                                    <i class="fas fa-star fa-2x"></i>
                                <span class="favorite-count">123</span>
                            </a>

                        </div>
                        <div class="media-body">
                            {!! $question->body_html !!}
                            <div class="float-right">
                                <span class="test-muted"> Answered {{ $question->answers_count }}</span>
                                <div class="media mt-2">
                                    <a href="{{ $question->user->url }}" class="pr-3">
                                        <img src="{{ $question->user->avatar }}" > </a>
                                        <div class="media-body mt-1">
                                            <a href="{{ $question->user->url}}" >{{ $question->user->name }}</a>
                                        </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('answers._index',[
        'answers_count'=>$question->answers_count,
        'answers' =>$question->answers,
    ])
    @include('answers._create')
</div>
@endsection