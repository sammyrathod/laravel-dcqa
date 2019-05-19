<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                        <h2>{{  $answers_count . " " . str_plural( 'Answer', $answers_count )  }}</h2>
                </div>
                <hr/>
                @foreach ($answers as $answer)
                    <div class="media"> 
                        <div class="d-flex flex-column vote-control">
                            <a title="This answer is useful" class="vote-up">
                                    <i class="fas fa-caret-up fa-3x"></i>
                            </a>
                            <span class="votes-count">1233</span>
                            <a title="This answer is not useful" class="vote-down off">
                                    <i class="fas fa-caret-down fa-3x"></i>
                            </a>
                            <a title="Mark this answer is best answer" class="vote-accepted mt-2 favorited">
                                <i class="fas fa-check fa-2x"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            {!! $answer->body_html !!}
                            <div class="float-right">
                                <span class="test-muted"> Answered {{ $answer->answers_count }}</span>
                                    <div class="media mt-2">
                                        <a href="{{ $answer->user->url }}" class="pr-3">
                                        <img src="{{ $answer->user->avatar }}" > </a>
                                        <div class="media-body mt-1">
                                            <a href="{{ $answer->user->url}}" >{{ $answer->user->name }}</a>
                                        </div>
                                    </div> 
                            </div>
                        </div>
                    </div>
                    <hr/>
                @endforeach
            </div>
        </div>
    </div>
</div>
