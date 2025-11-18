@props(['id', 'essay_title', 'essay_text', 'essay']) 
{{-- @props defines the properties that may be passed into the component --}}

{{-- Essay Card Component --}}
{{-- <h4 class="font-bold text-lg">{{ $essay->$essay_title }}</h4> --}}
<h4 class="font-bold text-lg">{{ $essay_title }}</h4>
<p class="mt-2 text-gray-600">{{ Str::limit($essay->essay_text, 100) }}</p>
