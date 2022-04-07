<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-semibold lg:py-3 lg:px-5 py-1 px-2 text-sm rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out']) }}>
    {{ $slot }}
</button>
