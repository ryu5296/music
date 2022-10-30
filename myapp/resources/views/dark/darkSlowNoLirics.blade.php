<x-layout>
    <h1>あなたにおすすめの曲です</h1>
    <h3>アーティスト名</h3>
    <h3>{{ $repo->artist_name }}</h3>
    <h3>曲名</h3>
    <h3>{{ $repo->music_title }}</h3>
    <button type="button" onclick="location.href=' {{ route('start') }}' ">ホーム画面</button>

</x-layout>