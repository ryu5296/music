<h1>音楽の追加</h1>
<form method="post" action={{ route('add') }}">
    @csrf
    <p>
        <h3>アーティスト名</h3>
        <textarea name="body" placeholder="enter body"></textarea>
    </p>
    <p>
        <h3>曲名</h3>
        <textarea name="body" placeholder="enter body"></textarea>
    </p>
    <p>
        <input type="submit" value="Add">
    </p>
</form>