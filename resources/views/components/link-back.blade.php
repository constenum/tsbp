<a {{ $attributes->merge(['class' => 'inline-flex items-center ml-2 px-4 py-2 border border-transparent text-xs font-semibold rounded-md text-red-700 uppercase tracking-widest bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
