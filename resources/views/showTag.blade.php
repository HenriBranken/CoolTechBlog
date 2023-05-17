<x-layout>
    <div class="meat">
        <h1>Tag: &#35;{{ $tag }}</h1>
        <div>
            <ul>
                @foreach ($articles as $article)
                    <li><a class="underline" href="/article/{{$article->id}}">{{$article->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>