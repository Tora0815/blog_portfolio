<x-base-layout>
    <x-slot name="title">編集</x-slot>
    <x-slot name="slot">

        <div class="container mt-5">
            <h1>編集</h1>
            <form method="post" action="/change">
                @csrf
                <input type="hidden" name="change_id" value="{{ $article->id }}">

                <div class="mb-3">
                    <label for="title" class="form-label">タイトル</label>
                    <input type="text" name="title" value="{{ $article->title }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">本文</label>
                    <textarea name="body" class="form-control" rows="5" required>{{ $article->body }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">更新</button>
                <a href="/" class="btn btn-secondary">キャンセル</a>
            </form>
        </div>

    </x-slot>
</x-base-layout>
