@props(['tagsCsv'])


@php
$tags = explode(',', $tagsCsv);
@endphp

{{-- A component for showing tags --}}
<div class="col mb-2">
    @foreach ($tags as $tag)
        <a href="/jobs?tag={{ $tag }}" class="me-2 badge bg-dark text-decoration-none">{{ $tag }}</a>
    @endforeach
</div>
