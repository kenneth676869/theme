@extends('base')
@section('content')



<div class="wasap">
    <div class="children">
        <h1 id="top" style="color:white" class="text-center">Recent Posts</h1>
        <div class="d-flex justify-content-center">
            @foreach ($recentPost as $post)
                <div id="post-box" class="align-self-stretch m-1 bg" style="width: 31%">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 id="post-title" class="text-center">{{ $post->title }}</h4><br>
                        created at {{ $post->created_at->format('F d, Y g:i A') }}</p><br>
                            <p>{{ $post->content }}</p><br>
                            <p class="timestamp"><b>by: </b> {{ $post->user->lname }}, {{ $post->user->fname }}

                        </div>
                    </div>
                    <div class="card-footer">
                        @if($post->isEditable())
                            <a href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash"></i></a>
                            @else 
                        @endif
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

<style scoped>
    
    #top{
        margin-top: 30px;
        margin-bottom: 30px;
        font-weight: bold;
        font-size: 50px;
    }

    
    #post-title{
        font-family: 'Raleway', sans-serif;
        font-weight: bold;
        background-color: #790252;
        padding: 20px;
        border-radius: 2em;
    }
    .wasap {
        height: 100%vh;
        margin: 50px;
    }
    
    p{
        font-family: 'Raleway', sans-serif;
        font-weight: bold;
    }
    .timestamp{
        font-size: 12px;
    }


    .card-body{
        background-color: #AF0171;
        border-top-left-radius: 2em;
        border-top-right-radius: 2em;
        color:white;
    }
    
    .card-footer{
        height: 50px;
        display: flex;
        justify-content: flex-end;
        background-color: #790252;
    }
    i{
        color: white;
    }
    i:hover{
        color: black;
    }

    #post-box{
        border-radius: 2em;
        background-color: #F6FBF4;
    }

    a{
        color: #ffa31a;
        margin-right: 8px;
    }

    ::-webkit-scrollbar {
        display: none;
    }
</style>
@endsection
