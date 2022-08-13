<button {{ $attributes->merge(['type' => 'reset', 'class' => 'inline-flex items-center px-4 py-2 border border-transparent text-xs font-semibold rounded-md text-yellow-700 uppercase tracking-widest bg-yellow-100 hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
