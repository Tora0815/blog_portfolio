<x-base-layout>
    <x-slot name="title">削除確認</x-slot>
    <x-slot name="slot">

        <div class="container mt-5">
            <h1>削除確認</h1>
            <div class="alert alert-danger" role="alert">
                本当に削除してよろしいですか？
            </div>

            <form method="post" action="/del_data">
                @csrf
                <input type="hidden" name="delete_id" value="{{ $article->id }}">

                <button type="submit" class="btn btn-danger">削除</button>
                <a href="/" class="btn btn-secondary">キャンセル</a>
            </form>

        </div>

    </x-slot>
</x-base-layout>
