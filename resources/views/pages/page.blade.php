<x-app-layout title="">
    <div>

        {{ $page->title }}
        {{ $page->webpage_url }}
    </div>

    
  @once
  @push('scripts')
    <script>

    </script>
  @endpush
@endonce
</x-app-layout>