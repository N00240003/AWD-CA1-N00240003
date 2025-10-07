<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
</div>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Artpiece') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 <div class="p-6 text-gray-900">
                     <h3 class="semibold text-lg mb-4">Add a new Artpiece</h3>
                        <x-artpiece-form 
                        :action="route('artpieces.store')" 
                        :method="'POST'"
                        />
                </div>
         </div>
        </div>
    </div>
</x-app-layout>