<x-layout>
    <h1>早いテンポ? 遅いテンポ?</h1>
    <button type="button" onclick="location.href=' {{ route('darkHigh') }}' ">ハイテンポ</button>
    <button type="button" onclick="location.href=' {{ route('darkSlow') }}' ">ローテンポ</button>
</x-layout>