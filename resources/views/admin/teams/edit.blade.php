<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Team') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                    <x-auth-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('teams.update', $team) }}">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-label for="name" value="{{ __('Name') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$team->name" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="short_name" value="{{ __('Short Name') }}" />
                            <x-input id="short_name" class="block mt-1 w-full" type="text" name="short_name" :value="$team->short_name" required />
                        </div>

                        <div class="flex mt-4">
                            <x-button>
                                {{ __('Update Team') }}
                            </x-button>
                            <x-link-back href="{{ url()->previous() }}">Back</x-link-back>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
