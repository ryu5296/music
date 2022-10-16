<x-layout>
    <h1>歌詞あり? 歌詞なし?</h1>
    <button type="button" onclick="location.href=' {{ route('darkSlowLiricsResult') }}' ">歌詞あり</button>
    <button type="button" onclick="location.href=' {{ route('darkSlowNoLiricsResult') }}' ">歌詞なし</button>
</x-layout>