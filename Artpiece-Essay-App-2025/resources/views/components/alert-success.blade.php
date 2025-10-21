<!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->

{{-- "Style" for success message box --}}
@if(session('success'))
    <div class="mb-4 px-4 bg-green-100 border border-green-500 text-green-700 rounded">
        {{ $slot }}
    </div>
@endif