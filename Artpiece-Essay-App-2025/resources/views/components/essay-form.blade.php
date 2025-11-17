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
        name="essay_title"
        id="essay_title" 
        value="{{ old('essay_title', $essay->essay_title ?? '') }}" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('title')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <!-- Text -->
    <div class="mb-4">
        <label for="essay_text" class="block font-medium text-sm text-gray-700">Your text</label>
        <input 
        type="text" 
        name="essay_text"
        id="essay_text" 
        value="{{ old('essay_text', $essay->essay_text ?? '') }}" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('type')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <!-- Tags -->
    <div class="mb-4">
        <label for="tags" class="block font-medium text-sm text-gray-700">Tags</label>
        <input 
        type="text" 
        name="tags"
        id="tags" 
        value="{{ old('tags', $essay->tags ?? '') }}" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        @error('tags')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <x-primary-button> <!--If it exist-> Update   else-> Create -->
            {{ isset($essay) ? 'Update Essay' : 'Create Essay' }}
        </x-primary-button>
    </div>

    {{-- The history.back() method loads the previous URL (page) in the history list.
     The history.back() method only works if a previous page exists. --}}
    <button type="button" onclick="window.history.back()" class="inline-flex items-center px-4 py-2 bg-gray-300 text-black rounded hover:bg-gray-400">
        Cancel
    </button>

    {{-- <div>
        <a href="{{ route('essays.index') }}"
        class="inline-flex items-center px-4 py-2 bg-gray-300 text-black rounded hover:bg-gray-400">
         Cancel
        </a>
    </div> --}}
</form>