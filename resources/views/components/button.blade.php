<a {{ $attributes->class($defaultClasses)->merge(['class' => implode(' ', $type), 'href' => $url, 'title' => $title]) }}>
    {{ $title }}
    @slot('icon')
    @endslot
</a>
