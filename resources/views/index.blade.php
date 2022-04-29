<x-layout>
    <x-slot name="title">Welcome to {{ config('app.name')  }}</x-slot>

    <x-slot name="main">
        <index-page></index-page>
        <nav-menu></nav-menu>
    </x-slot>

    <x-slot name="footer">
        <footer-div></footer-div>
    </x-slot>

</x-layout>
