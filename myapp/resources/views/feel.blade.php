<x-layout>
    <h1>あなたのテンションは?</h1>

    <button type="button" onclick="location.href=' {{ route('light') }}' ">高い</button>
    <button type="button" onclick="location.href=' {{ route('dark') }}' ">低い</button>
</x-layout>