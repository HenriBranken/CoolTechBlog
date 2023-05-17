<x-layout>
<body>
    <div class="searchmeat">
        <div class="row">
            <h1 class="searchheading">Search Page</h1>
            <div class="searches">                
                <div class="search-bar">
                    <form action="{{ route('web.search') }}" method="GET">
                        <div class="form-group">
                            <label for="query1">Enter Article ID</label>
                            <input class="inputsearch" type="text" name="query1" placeholder="Article ID?">
                        </div>
                        <div class="form-group">
                            <button class="forsearch" type="submit">Search Article ID</button>
                        </div>
                    </form>
                </div>

                <div class="search-bar">
                    <form action="{{ route('web.search') }}" method="GET">
                        <div class="form-group">
                            <label for="query2">Enter Category ID</label>
                            <input class="inputsearch" type="text" name="query2" placeholder="Category ID?">
                        </div>
                        <div class="form-group">
                            <button class="forsearch" type="submit">Search Category ID</button>
                        </div>
                    </form>
                </div>

                <div class="search-bar">
                    <form action="{{ route('web.search') }}" method="GET">
                        <div class="form-group">
                            <label for="query3">Enter Tag ID</label>
                            <input class="inputsearch" type="text" name="query3" placeholder="Tag ID?">
                        </div>
                        <div class="form-group">
                            <button class="forsearch" type="submit">Search Tag ID</button>
                        </div>
                    </form>
                </div>
                <br>
                <br>
            </div>

            @if(isset($article))
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Article Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($article) > 0)
                            <tr>
                                <td>{{ $article[0]->id }}</td>
                                <td><a href="/article/{{ $article[0]->id }}">{{ $article[0]->title }}</a></td>
                            </tr>
                        @else
                            <tr>
                                <td colspan=2>No Results Found!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            @endif

            @if(isset($articles))
                <table>
                    <thead>
                        <tr>
                            <th>Category ID</th>
                            <th>Category</th>
                            <th>Articles</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($articles) > 0)
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->category_id }}</td>
                                <td>{{ $article->category }}</td>
                                <td><a href="/article/{{ $article->id }}">{{ $article->title }}</a></td>
                            </tr>
                        @endforeach
                            
                        @else
                            <tr>
                                <td colspan=3>No Results Found!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            @endif

            @if(isset($tagArticles))
                <table>
                    <thead>
                        <tr>
                            <th>Tag ID</th>
                            <th>Tag Name</th>
                            <th>Articles</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($tagArticles) > 0)
                        @foreach ($tagArticles as $tagArticle)
                            <tr>
                                <td>{{ $tagArticle->tag_id }}</td>
                                <td>{{ $tagArticle->tag }}</td>
                                <td><a href="/article/{{ $tagArticle->id }}">{{ $tagArticle->title }}</a></td>
                            </tr>
                        @endforeach
                            
                        @else
                            <tr>
                                <td colspan=3>No Results Found!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</x-layout>
    