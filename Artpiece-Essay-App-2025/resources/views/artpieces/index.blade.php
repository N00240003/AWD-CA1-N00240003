<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
</div>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Artpieces') }}
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
                    <h3 class="font-semibold text-lg mb-4">All Art Pieces:</h3>
                    <nav class="navbar bg-body-tertiary">
                        <div class="container-fluid">

                            <form class="d-flex" action="{{ route('artpieces.search') }}" method="GET">
                                <input class="form-control me-2" type="search" placeholder="Search"
                                    aria-label="Search" name="search"/>
                                <button
                                    class="btn text-white hover:bg-indigo-700 bg-indigo-500 shadow-lg inset-ring-2 shadow-indigo-500/50"
                                    type="submit">Search
                                </button>
                            </form>

                            <input checked type="radio" id="sort-none" name="sorting" />
                            <label for="sort-none">None</label>

                            <input type="radio" id="sort-type-painting" name="sorting" />
                            <label for="sort-type-painting">Painting</label>

                            <input type="radio" id="sort-type-statue" name="sorting" />
                            <label for="sort-type-statue">Statue</label>

                        </div>
                    </nav>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                        

                            @foreach ($artpieces as $artpiece)
                                <div
                                    class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transistion duration-300">
                                    <a href="{{ route('artpieces.show', $artpiece) }}">
                                        <x-artpiece-card :id="$artpiece->id" :title="$artpiece->title" :image="$artpiece->img_url"
                                            :description="$artpiece->description" :type="$artpiece->type" :year="$artpiece->year" :artpiece="$artpiece"
                                            :created_at="$artpiece->created_at" />
                                    </a>
                                    <a href="{{ route('artpieces.edit', $artpiece) }}"
                                        class="text-gray-600 bg-violet-300 hover:bg-blue-300 font-bold py-2 px-4 rounded">
                                        Edit
                                    </a>

                                    <form action="{{ route('artpieces.destroy', $artpiece) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this artpiece?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500
                                    hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
