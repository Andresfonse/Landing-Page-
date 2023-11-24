<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-200 active:bg-gray-200 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150']) }} style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
    {{ $slot }}
</button>
