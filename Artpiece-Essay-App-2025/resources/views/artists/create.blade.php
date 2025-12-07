<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Add New Artist</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">

            {{-- DEBUG --}}
            {{-- @dd($artpieces) --}}

            <x-artist-form
                :action="route('artists.store')"
                method="POST"
                :artpieces="$artpieces"
            />
        </div>
    </div>
</x-app-layout>
