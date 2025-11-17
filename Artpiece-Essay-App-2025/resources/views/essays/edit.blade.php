<!-- Simplicity is an acquired taste. - Katharine Gerould -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Essay') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Edit Essay:</h3>
                    <!-- Use the essay-form component for the form -->
                    <x-essay-form 
                        :action="route('essays.update', $essay)" 
                        :method="'PUT'"
                        :essay="$essay"
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
