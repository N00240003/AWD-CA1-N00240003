 <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->

@props(['id', 'name', 'nationality', 'birth_date', 'death_date', 'bio', 'movement', 'portrait_url', 'artist'  ]) 
{{-- @props defines the properties that may be passed into the component --}}

{{-- Artist Card Component --}}

<h4 class="font-bold text-lg">{{ $name }}</h4>
<img class="width:auto object-cover" src="{{ asset( 'images/artists/' .$portrait_url) }}" alt="{{ $name }}">
<p class="mt-2 text-gray-600">{{ Str::limit($bio, 100) }}</p> 
