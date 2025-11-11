<!-- Be present above all else. - Naval Ravikant -->


@props(['essay', 'action', 'method' ])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf {{-- security thing  --}}
    @if(isset($method) && ($method === 'PUT' || $method === 'PATCH'))
    @method($method)
@endif

    <!-- Title -->
    <div class="mb-4">
        <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
        <input 
        type="text" 
        name="title"
        id="title" 
        value="{{ old('title', $artpiece->title ?? '') }}" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('title')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
    <!-- Image -->
    <div class="mb-4">
        <label for="img_url" class="block font-medium text-sm text-gray-700">Image of Artpiece</label>
        <input 
        type="file" 
        name="img_url"
        id="img_url" 
        {{ isset($artpiece) ? '' : 'required'}}
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"/>
        @error('img_url')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
    @isset($artpiece->img_url)
        <div class="mb-4">
            <img src="{{ asset($artpiece->img_url) }}" alt="Current Artpiece Image" class="max-24 h-32 object-cover">
        </div>
    @endisset

    <!-- Type -->
    <div class="mb-4">
        <label for="type" class="block font-medium text-sm text-gray-700">Type</label>
        <input 
        type="text" 
        name="type"
        id="type" 
        value="{{ old('type', $artpiece->type ?? '') }}" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('type')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <!-- Description -->
    <div class="mb-4">
        <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
        <input 
        type="text" 
        name="description"
        id="description" 
        value="{{ old('description', $artpiece->description ?? '') }}" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('description')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <!-- Year -->
    <div class="mb-4">
        <label for="year" class="block font-medium text-sm text-gray-700">Year</label>
        <input 
        type="text" 
        name="year"
        id="year" 
        value="{{ old('year', $artpiece->year ?? '') }}" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('year')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <x-primary-button> <!--If it exist-> Update   else-> Create -->
            {{ isset($artpiece) ? 'Update Artpiece' : 'Create Artpiece' }}
        </x-primary-button>
    </div>
    <div>
        <a href="{{ route('artpieces.index') }}"
        class="inline-flex items-center px-4 py-2 bg-gray-300 text-black rounded hover:bg-gray-400">
         Cancel
        </a>
    </div>
</form>