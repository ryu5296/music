<x-layout>
    <h1>歌詞あり? 歌詞なし?</h1>
    <button type="button" onclick="location.href=' {{ route('lightSlowLiricsResult') }}' ">歌詞あり</button>
    <button type="button" onclick="location.href=' {{ route('lightSlowNoLiricsResult') }}' ">歌詞なし</button>
</x-layout>