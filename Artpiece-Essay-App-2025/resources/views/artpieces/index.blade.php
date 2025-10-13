<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
</div>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('All Artpieces')}}
        </h2>
    </x-slot>
    
    {{-- Component to display success message that may sent from controller eg when artpiece is created successfully --}}
    <x-alert-success>
    {{ session('success') }}
    </x-alert-success>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List Of Books:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($artpieces as $artpiece)
                    <a href="{{ route('artpieces.show', $artpiece)}}">
                      <x-artpiece-card
                       :id="$artpiece->id"
                       :title="$artpiece->title"
                       :image="$artpiece->img_url"
                       :description="$artpiece->description"
                       :type="$artpiece->type"
                       :year="$artpiece->year"
                       :created_at="$artpiece->created_at"
                     />
                  </a>

                  {{-- <!--Edit and Delete buttons -->
                    <!--Edit button route to artpieces.edit, receives $artpiece for editing -->
                    <a href="{{ route('artpieces.edit', $artpiece) }}" 
                     class="text-gray-600 bg-violet-300 hover:bg-blue-300 font-bold py-2 px-4 rounded">
                     Edit
                    </a>

                    <form action="{{ route('artpieces.destroy', $artpiece) }}" method="POST"
                     onsubmit="return confirm('Are you sure you want to delete this artpiece?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500
                         hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                         Delete
                        </button>
                    </form> --}}
                  
                   @endforeach
               </div>
             </div>
            </div>
        </div>
    </div>
</x-app-layout>

