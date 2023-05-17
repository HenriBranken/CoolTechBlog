<x-layout>
    <div class="meat">
        @if (session()->has('failure'))
        <div>
            {{ session('failure') }}
        </div>
        @endif
        @foreach ($articles as $article)
            <h1><a href="/article/{{$article->id}}">{{$article->title}}</a></h1>
            <p>{{$article->body}}</p>
            <div class="tags">
                @foreach ($article->tags as $tag)
                    <span class="tag"><a href="/tag/{{Str::slug($tag)}}">&#35;{{$tag}}&nbsp;</a></span>
                @endforeach<br>
            </div>
            <div class="small-created_at">
                <small>Created At:&nbsp;&nbsp;&nbsp;<strong>{{$article->creation_date}}</strong></small>
            </div>
        @endforeach
    </div>
</x-layout>