<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</div>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artpiece Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Artpiece Details</h3>
                    <x-artpiece-details 
                        :title="$artpiece->title" 
                        :image="$artpiece->img_url" 
                        :type="$artpiece->type"
                        :description="$artpiece->description" 
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>