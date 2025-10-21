{{-- "Style" of error message box --}}
@if(session('error'))
    <div class="mb-4 px-4 bg-red-100 border border-red-500 text-red-700 rounded">
        {{ $slot }}
    </div>
@endif