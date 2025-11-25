<!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->


@props(['artist', 'action', 'method' ])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf {{-- security thing  --}}
    @if(isset($method) && ($method === 'PUT' || $method === 'PATCH'))
    @method($method)
    @endif

    <!-- Artist Name -->
    <div class="mb-4">
        <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
        <input 
        type="text" 
        name="name"
        id="name" 
        value="{{ old('name', $artist->name ?? '') }}" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('name')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <!-- Portrait -->
    <div class="mb-4">
        <label for="portrait_url" class="block font-medium text-sm text-gray-700">Image of Artist</label>
        <input 
        type="file" 
        name="portrait_url"
        id="portrait_url" 
        {{ isset($artist) ? '' : 'required'}}
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"/>
        @error('portrait_url')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
    @isset($artist->portrait_url)
        <div class="mb-4">
            <img src="{{ asset($artist->portrait_url) }}" alt="Current Artist Image" class="max-24 h-32 object-cover">
        </div>
    @endisset

    <!-- Nationality -->
    <div class="mb-4">
        <label for="nationality" class="block font-medium text-sm text-gray-700">Nationality</label>
        <input 
        type="text" 
        name="nationality"
        id="nationality" 
        value="{{ old('nationality', $artist->nationality ?? '') }}" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('type')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <!-- Biography -->
    <div class="mb-4">
        <label for="bio" class="block font-medium text-sm text-gray-700">Biography</label>
        <input 
        type="text" 
        name="bio"
        id="bio" 
        value="{{ old('bio', $artist->bio ?? '') }}" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('bio')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <!-- Movement -->
    <div class="mb-4">
        <label for="movement" class="block font-medium text-sm text-gray-700">Movement</label>
        <input 
        type="text" 
        name="movement"
        id="movement" 
        value="{{ old('movement', $artist->movement ?? '') }}" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('movement')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <!-- Birth Date -->
    <div class="mb-4">
        <label for="year" class="block font-medium text-sm text-gray-700">Birth Date</label>
        <input 
        type="text" 
        name="birth_date"
        id="birth_date" 
        value="{{ old('birth_date', $artist->birth_date ?? '') }}" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('birth_date')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <!-- Death Date -->
    <div class="mb-4">
        <label for="year" class="block font-medium text-sm text-gray-700">Death Date</label>
        <input 
        type="text" 
        name="death_date"
        id="death_date" 
        value="{{ old('death_date', $artist->death_date ?? '') }}" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('death_date')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <x-primary-button> <!--If it exist-> Update   else-> Create -->
            {{ isset($artist) ? 'Update Artist' : 'Create Artist' }}
        </x-primary-button>
    </div>
    <div>
        <a href="{{ route('artists.index') }}"
        class="inline-flex items-center px-4 py-2 bg-gray-300 text-black rounded hover:bg-gray-400">
         Cancel
        </a>
    </div>
</form>