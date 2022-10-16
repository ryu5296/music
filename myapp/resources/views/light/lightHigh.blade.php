<x-layout>
    <h1>歌詞あり? 歌詞なし?</h1>
    <button type="button" onclick="location.href=' {{ route('lightHighLiricsResult') }}' ">歌詞あり</button>
    <button type="button" onclick="location.href=' {{ route('lightHighNoLiricsResult') }}' ">歌詞なし</button>
</x-layout>