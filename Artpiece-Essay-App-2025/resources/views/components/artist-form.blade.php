<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf

    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <!-- Artist Name -->
    <div class="mb-4">
        <label class="block text-sm font-medium">Name</label>
        <input type="text" name="name"
               value="{{ old('name', $artist->name ?? '') }}"
               required
               class="mt-1 w-full border-gray-300 rounded">
    </div>

    <!-- Portrait -->
    <div class="mb-4">
        <label class="block text-sm font-medium">Image</label>
        <input type="file" name="portrait_url"
               {{ isset($artist) ? '' : 'required' }}
               class="mt-1 w-full border-gray-300 rounded">
    </div>

    @isset($artist->portrait_url)
        <img src="{{ asset($artist->portrait_url) }}" class="h-32 mb-4 object-cover">
    @endisset

    <!-- Nationality -->
    <div class="mb-4">
        <label class="block text-sm font-medium">Nationality</label>
        <input type="text" name="nationality"
               value="{{ old('nationality', $artist->nationality ?? '') }}"
               required
               class="mt-1 w-full border-gray-300 rounded">
    </div>

    <!-- Biography -->
    <div class="mb-4">
        <label class="block text-sm font-medium">Biography</label>
        <textarea name="bio"
                  required
                  class="mt-1 w-full border-gray-300 rounded">{{ old('bio', $artist->bio ?? '') }}</textarea>
    </div>

    <!-- Movement -->
    <div class="mb-4">
        <label class="block text-sm font-medium">Movement</label>
        <input type="text" name="movement"
               value="{{ old('movement', $artist->movement ?? '') }}"
               required
               class="mt-1 w-full border-gray-300 rounded">
    </div>

    <!-- Birth Date -->
    <div class="mb-4">
        <label class="block text-sm font-medium">Birth Date</label>
        <input type="date" name="birth_date"
               value="{{ old('birth_date', $artist->birth_date ?? '') }}"
               required
               class="mt-1 w-full border-gray-300 rounded">
    </div>

    <!-- Death Date -->
    <div class="mb-4">
        <label class="block text-sm font-medium">Death Date</label>
        <input type="date" name="death_date"
               value="{{ old('death_date', $artist->death_date ?? '') }}"
               class="mt-1 w-full border-gray-300 rounded">
    </div>

    <!-- Artpieces Multi Select -->
    <div class="mb-4">
        <label class="block text-sm font-medium">Select Artpieces</label>

        <select name="artpieces[]" multiple class="mt-1 w-full border-gray-300 rounded h-40">
            @foreach ($artpieces as $piece)
                <option value="{{ $piece->id }}"
                    @if(isset($artist) && $artist->artpieces->contains($piece->id)) selected @endif>
                    {{ $piece->title }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Buttons -->
    <div class="flex gap-2 mt-4">
        <button type="submit"
                class="px-4 py-2 bg-indigo-600 text-white rounded">
            {{ $artist ? 'Update Artist' : 'Create Artist' }}
        </button>

        <a href="{{ route('artists.index') }}"
           class="px-4 py-2 bg-gray-300 rounded">
            Cancel
        </a>
    </div>
</form>
