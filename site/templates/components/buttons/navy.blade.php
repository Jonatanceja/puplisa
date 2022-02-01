<button {!! $attributes->merge(['class' => 'group transition duration-500 ease-in-out bg-navy hover:orange-light transform hover:-translate-y-1 hover:scale-110 py-5 px-10 rounded-sm text-white uppercase text-sm']) !!}>
    {{ $slot }}
</button>