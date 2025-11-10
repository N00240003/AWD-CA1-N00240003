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
                        :year="$artpiece->year"
                        :description="$artpiece->description" 
                    />
                </div>

                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Essays on this Artpiece</h3>
                    @if($artpiece->essays->isEmpty())
                        <p class="text-gray-600">No essays have been written for this artpiece yet.</p>
                    @else
                        <ul class="space-y-4">
                            @foreach($artpiece->essays as $essay)
                                <li class="border rounded-lg p-4 bg-gray-50">
                                    <h4 class="font-bold text-lg">{{ $essay->essay_title }}</h4>
                                    <p class="text-gray-700 mt-2">{{ Str::limit($essay->essay_text, 200) }}</p>
                                    <p class="text-sm text-gray-500 mt-2">By: {{ $essay->user->name }}</p>
                                </li>
                            @endforeach
                        </ul>
                    @endif
            </div>
        </div>
    </div>
</x-app-layout>