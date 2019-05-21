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
                            <a title="Mark this answer is best answer" class="{{ $answer->status }} mt-2 favorited">
                                <i class="fas fa-check fa-2x"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            {!! $answer->body_html !!}
                            <div class="row">
                                <div class="col-4">
                                    <div class="ml-auto">
                                        @can('update', $answer)
                                            <a href="{{ route('questions.answers.edit', [$question->id, $answer->id]) }}" class="btn btn-sm btn-outline-info">Edit</a> 
                                        @endcan
                                        @can('delete', $answer)
                                            <form class="form-delete" method="post" action={{ route('questions.answers.destroy', [$question->id, $answer->id])}} >
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        @endcan
                                    </div>
                                </div>
                                <div class="col-4">
                                </div>
                                <div class="col-4">
                                    <span class="test-muted"> Answered {{ $answer->answers_count }}</span>
                                    <div class="media mt-2">
                                        <a href="{{ $answer->user->url }}" class="pr-3">
                                            <img src="{{ $answer->user->avatar }}" >
                                        </a>
                                        <div class="media-body mt-1">
                                            <a href="{{ $answer->user->url}}" >{{ $answer->user->name }}</a>
                                        </div>
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
