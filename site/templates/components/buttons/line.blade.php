<button {!! $attributes->merge(['class' => 'transition duration-500 ease-in-out bg-transparent border border-white hover:bg-white transform hover:-translate-y-1 hover:scale-110 py-5 px-10 rounded-sm text-white hover:text-navy uppercase text-sm']) !!}>
    {{ $slot }}
</button>