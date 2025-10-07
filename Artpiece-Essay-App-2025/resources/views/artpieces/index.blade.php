<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
</div>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('All Artpieces')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List Of Books:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($artpieces as $artpiece)
                    <a href="{{ route('artpieces.show', $artpiece)}}">
                      <x-artpiece-card
                       :title="$artpiece->title"
                       :image="$artpiece->img_url"
                       :description="$artpiece->description"
                       :type="$artpiece->type"
                       :year="$artpiece->year"
                       :created_at="$artpiece->created_at"
                     />
                  </a>
                   @endforeach
               </div>
             </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- Component to display success message that may sent from controller eg when artpiece is created successfully --}}
<x-alert-success>
    {{ session('success') }}
</x-alert-success>
