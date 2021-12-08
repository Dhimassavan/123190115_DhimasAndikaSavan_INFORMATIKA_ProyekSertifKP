<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catatanku :)') }}
        </h2>
    </x-slot>
<div class= "py-12">
    <div class="max-w-7xL mx-auto sm:px-6 lg:px8">
        <div class="p-4  overflow-hidden shadow-xl sm:rounded-lg">
            <livewire:create-post /> 
            <livewire:list-post /> 
        </div>
    </div> 

</div>
  {{-- livewire:create-post berguna untuk memanggil create-post.blade.php
  livewire:list-post berguna untuk memanggil list-post.blade.php--}}    
</x-app-layout>
