<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Artpiece') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Edit Artpiece:</h3>
                    <!-- Use the artpiece-form component for the form -->
                    <x-artpiece-form 
                        :artpiece="$artpiece" 
                        :action="route('artpieces.update', $artpiece)" 
                        method="PUT" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>