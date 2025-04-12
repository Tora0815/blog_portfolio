<x-guest-layout>
    <x-slot name="title">ブログ一覧</x-slot>
    <x-slot name="slot">
        <div class="container mt-5">
            <h1>ブログ一覧</h1>
            <p><a href="/new" class="btn btn-primary">新規追加</a></p>

            @foreach ($articles as $article)
                <div class="card mb-2">
                    <div class="card-body">
                        <h4 class="card-title">{{ $article->title }}</h4>
                        <p class="card-subtitle text-muted">{{ $article->updated_at }}</p>
                        <p class="card-text">{{ $article->body }}</p>

                        <form method="post" action="/edit" style="display:inline;">
                            @csrf
                            <input type="hidden" name="edit_id" value="{{ $article->id }}">
                            <button class="btn btn-sm btn-outline-secondary" type="submit">編集</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </x-slot>
</x-guest-layout>
