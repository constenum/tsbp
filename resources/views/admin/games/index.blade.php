<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Week '.$current_week.' Games') }}
        </h2>
    </x-slot>

    <div class="pb-6">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
            <div class="mt-8 xs:mx-0.5 sm:mx-6 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <div id="refresh">
                                <table id="scores" class="min-w-full divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="py-3 pl-3 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">
                                            Game
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                            Start Date
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                            Away Team
                                        </th>
                                        <th scope="col"></th>
                                        <th scope="col"
                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                            Home Team
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                            Score
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                            Status
                                        </th>
                                        @can('admin_area')
                                            <th scope="col" class="relative py-3 pl-3 pr-4 sm:pr-6">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        @endcan
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach($games as $game)
                                        <tr>
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 @if(str_starts_with($game->status, "Final")) bg-gray-100 @endif">
                                                {{ $game->id }}
                                            </td>
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 @if(str_starts_with($game->status, "Final")) bg-gray-100 @endif">
                                                {{ $game->start_at->format('D, M d, g:i A') }}
                                            </td>
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium @if($game->away_spread < 0) uppercase font-bold @endif @if($game->status <> "Not Started" and $game->away_score + $game->away_spread > $game->home_score) bg-green-100 text-green-900 font-bold @elseif($game->status <> "Not Started" and $game->away_score + $game->away_spread <= $game->home_score) bg-red-100 text-red-900 @else text-gray-900 @endif">
                                                {{ $game->away_team->name }} ({{ $game->away_spread }})
                                            </td>
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 @if(str_starts_with($game->status, "Final")) bg-gray-100 @endif">
                                                at
                                            </td>
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium @if($game->home_spread < 0) uppercase font-bold @endif @if($game->status <> "Not Started" and $game->home_score + $game->home_spread > $game->away_score) bg-green-100 text-green-900 font-bold @elseif($game->status <> "Not Started" and $game->home_score + $game->home_spread <= $game->away_score) bg-red-100 text-red-900 @else text-gray-900 @endif">
                                                {{ $game->home_team->name }} ({{ $game->home_spread }})
                                            </td>
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-bold text-gray-900 @if(str_starts_with($game->status, "Final")) bg-gray-100 @endif">
                                                {{ $game->away_score }} - {{ $game->home_score }}
                                            </td>
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 @if(str_starts_with($game->status, "Final")) bg-gray-100 @endif">
                                                {{ $game->status }}
                                            </td>
                                            <td class="relative whitespace-nowrap pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                <x-button-warning href="{{ route('games.edit', $game) }}">Edit</x-button-warning>

                                                <form method="POST" action="{{ route('games.destroy', $game) }}"
                                                      class="inline-block">
                                                    @csrf
                                                    @method('DELETE')

                                                    <x-button-danger>Delete</x-button-danger>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th class="bg-white pt-1" colspan="8"></th>
                                    </tr>
                                    <tr>
                                        <th class="py-3 pl-4 pr-3 col-span-8 text-left text-xs font-medium tracking-wide text-gray-700 sm:pl-6" colspan="5">
                                            Favorite is Bold and UPPERCASE
                                        </th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    setTimeout(function () {
                        location.reload();
                    }, 60000);
                });
        </script>
    @endpush
</x-app-layout>
