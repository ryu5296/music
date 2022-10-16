<x-layout>
    <h1>早いテンポ? 遅いテンポ?</h1>
    <button type="button" onclick="location.href=' {{ route('lightHigh') }}' ">ハイテンポ</button>
    <button type="button" onclick="location.href=' {{ route('lightSlow') }}' ">ローテンポ</button>
</x-layout>