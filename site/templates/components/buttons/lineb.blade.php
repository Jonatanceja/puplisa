<button {!! $attributes->merge(['class' => 'transition duration-500 ease-in-out bg-transparent border border-cyan hover:bg-cyan transform hover:-translate-y-1 hover:scale-110 py-5 px-10 rounded-sm text-cyan hover:text-white uppercase text-sm']) !!}>
    {{ $slot }} 
</button>