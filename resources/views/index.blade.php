<x-layout>
    <x-slot name="title">Welcome to {{ config('app.name')  }}</x-slot>

    <x-slot name="main">
        <!-- <x-nav /> -->
        <index></index>
    </x-slot>

    <x-slot name="footer">
        <div class="footer max-w-screen-lg mx-auto">
            <p class="text-gray-400 text-center">{{ now()->year }} &copy; Copyright All Rights Reserved<br class="lg:hidden"/><span class="hidden lg:contents" style="font-family:exolight;"> &bull; </span><span class="cursor-default text-white" style="font-family:exolight;">803.553.2043</span> &bull; <span class="cursor-pointer text-white hover:text-blue-400 ease-in-out transition-all duration-150" onclick="livewire.emit('openModal', 'contact')" style="font-family:exolight;">info@robert-herring.com</span></p>
        </div>
    </x-slot>

</x-layout>
