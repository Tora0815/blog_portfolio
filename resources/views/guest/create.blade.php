<x-guest-layout>
    <x-slot name="title">ブログ新規作成</x-slot>
    <x-slot name="slot">

        <div class="container mt-5">
            <h1>ブログ新規作成</h1>
            <form method="post" action="/create">
                @csrf
                <div class="mb-3">
                    <label for="titleInput" class="form-label">タイトル</label>
                    <input type="text" name="title" id="titleInput" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="bodyInput" class="form-label">内容</label>
                    <textarea name="body" id="bodyInput" class="form-control" rows="6" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">新規追加</button>
                <a href="/" class="btn btn-secondary">キャンセル</a>
            </form>
        </div>

    </x-slot>
</x-guest-layout>
