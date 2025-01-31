@props(['active', 'href'])

<a @if ($href) href="{{ $href }} " @endif {{ $attributes }} wire:navigate
    class="{{ $active
        ? 'bg-DDE4DC-bg text-1C4816-text rounded-radius-77 font-weight-750 scale-110 shadow-md w-auto font-arimo'
        : (Request::is('none')
            ? 'text-black hover:underline'
            : 'text-[#1C4816] hover:underline font-arimo font-bold text-base') }} rounded-md px-[0.8vw] py-[0.4vw] text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
