<h1>音楽の追加</h1>
<form method="post" action={{ route('add') }}">
    @csrf
    <p>
        <h3>アーティスト名</h3>
        <textarea name="name" placeholder="enter body">アーティスト名</textarea>
    </p>
    <p>
        <h3>曲名</h3>
        <textarea name="title" placeholder="enter body">曲名</textarea>
    </p>
    <p>
        <input type="submit" value="Add">
    </p>
</form>