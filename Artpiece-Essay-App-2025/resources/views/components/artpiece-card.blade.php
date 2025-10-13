<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>

@props(['id','title', 'image'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transistion duration-300">
    <h4 class="font-bold text-lg">{{ $title }}</h4>
    <img src="{{ asset( 'images/artpieces/' .$image) }}" alt="{{ $title }}">
    <!--Edit and Delete buttons -->
    <!--Edit button route to artpieces.edit, receives $artpiece for editing -->
    <a href="{{ route('artpieces.edit', $id) }}" 
     class="text-gray-600 bg-violet-300 hover:bg-blue-300 font-bold py-2 px-4 rounded">
        Edit
    </a>

    <form action="{{ route('artpieces.destroy', $id) }}" method="POST"
         onsubmit="return confirm('Are you sure you want to delete this artpiece?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500
         hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
             Delete
         </button>
        </form>
</div>