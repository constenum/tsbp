<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teams') }}
        </h2>
    </x-slot>

    <div class="pb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 xs:mx-0.5 sm:mx-6 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <x-link href="{{ route('teams.create') }}" class="mb-4">{{ __('Create New Team') }}</x-link>


                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">ID</th>
                                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">Name</th>
                                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">Short Name</th>
                                    <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">League</th>
                                    <th scope="col" class="relative py-3 pl-3 pr-4 sm:pr-6">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                @forelse($teams as $team)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">
                                            {{ $team->id }}
                                        </td>
                                        <td class="whitespace-nowrap py-4 pl-3 pr-3 text-sm font-medium text-gray-900">
                                            {{ $team->name }}
                                        </td>
                                        <td class="whitespace-nowrap py-4 pl-3 pr-3 text-sm font-medium text-gray-900">
                                            {{ $team->short_name }}
                                        </td>
                                        <td class="whitespace-nowrap py-4 pl-3 pr-3 text-sm font-medium text-gray-900">
                                            {{ $team->league }}
                                        </td>
                                        <td class="relative whitespace-nowrap pr-4 text-right text-sm font-medium sm:pr-6">
                                            <x-link-edit href="{{ route('teams.edit', $team) }}">Edit</x-link-edit>

                                            <form method="POST" action="{{ route('teams.destroy', $team) }}" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <x-button-danger type="submit" onclick="return confirm('Are you sure?')">
                                                    Delete
                                                </x-button-danger>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td colspan="5" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{ __('No teams found') }}
                                        </td>

                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
