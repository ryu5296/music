<h1>音楽の追加</h1>
<form method="post" action={{ route('add') }}">
    @csrf
    <p>
      <input type="text" name="title" placeholder="enter title">
    </p>
    <p>
      <textarea name="body" placeholder="enter body"></textarea>
    </p>
    <p>
      <input type="submit" value="Add">
    </p>
</form>