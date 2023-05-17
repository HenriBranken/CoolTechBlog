<x-layout>
    <div class="meat">
        <h1>{{$theArticle->title}}</h1>
        <div>
            {!! $theArticle->body !!}
        </div>
        <div>
            <strong>Category:</strong> {{$theArticle->category}}
        </div>
        <div class="tags">
            @foreach ($theArticle->tags as $tag)
                <span class="tag"><a href="/tag/{{Str::slug($tag)}}">&#35;{{$tag}}&nbsp;</a></span>
            @endforeach
        </div>
        <div>
            <small>Created At:&nbsp;&nbsp;&nbsp;<strong>{{$theArticle->creation_date}}</strong></small>
        </div>
    </div>
</x-layout>