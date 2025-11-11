<!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Essay') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 <div class="p-6 text-gray-900">
                     <h3 class="semibold text-lg mb-4">Add a new Essay</h3>
                        <x-essay-form 
                        :action="route('essay.store')" 
                        :method="'POST'"
                        />
                </div>
         </div>
        </div>
    </div>
</x-app-layout>
