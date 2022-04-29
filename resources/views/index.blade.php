<x-layout>
    <x-slot name="title">Welcome to {{ config('app.name')  }}</x-slot>

    <x-slot name="main">
        <!-- <x-nav /> -->
        <index-page></index-page>
    </x-slot>

    <x-slot name="footer">
        <footer-div></footer-div>
    </x-slot>

</x-layout>
