<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Week '.$week.' Picks') }}
        </h2>
    </x-slot>

    <div class="pb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 xs:mx-0.5 sm:mx-6 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                        <!-- Success Message -->
                        @if(session()->has('success'))
                            <div x-data="{ show: true }"
                                 x-init="setTimeout(() => show = false, 4000)"
                                 x-show="show"
                                 class="rounded-md bg-green-50 p-4"
                            >
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <!-- Heroicon name: solid/check-circle -->
                                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div class="ml-3 mb-2">
                                        <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- Picks Form -->
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <form method="POST" action="{{ route('picks.store') }}">
                                @csrf
                                <div>
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="py-3 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">
                                                Game
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                Start Date/Time
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                Home Team
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                Away Team
                                            </th>
                                            <th scope="col" class="relative py-3 pl-3 pr-4 sm:pr-6" colspan="2">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">
                                        <input name="week_id" type="number" value="{{ $week }}" hidden>
                                        <input name="user_id" type="number" value="{{Auth::user()->id}}" hidden>
                                        @foreach($games as $game)
                                            <tr>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                    {{ $game->id }}
                                                </td>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                    {{ $game->start_at->format('D, M d, Y g:i A') }}
                                                </td>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                    <div class="flex items-center">
                                                        <input id="favorite" name="game{{ $game->id }}" type="radio"
                                                               class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                               value="{{ $game->home_team_id }}"
                                                               @if($game->start_at < \Carbon\Carbon::now()) disabled
                                                               @endif @if(in_array($game->home_team_id, $picks)) checked @endif>
                                                        <label for="favorite"
                                                               class="ml-3 block text-sm font-medium @if($game->home_spread < 0) uppercase font-bold @endif @if($game->start_at < \Carbon\Carbon::now()) text-gray-400 @endif">{{ $game->home_team->name }}
                                                            [{{ $game->home_spread }}]</label>
                                                    </div>
                                                </td>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                    <div class="flex items-center">
                                                        <input id="dog" name="game{{ $game->id }}" type="radio"
                                                               class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                               value="{{ $game->away_team_id }}"
                                                               @if($game->start_at < \Carbon\Carbon::now()) disabled
                                                               @endif @if(in_array($game->away_team_id, $picks)) checked @endif>
                                                        <label for="dog"
                                                               class="ml-3 block text-sm font-medium @if($game->away_spread < 0) uppercase font-bold @endif @if($game->start_at < \Carbon\Carbon::now()) text-gray-400 @endif">{{ $game->away_team->name }}
                                                            [{{ $game->away_spread }}]</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" id="radioReset"
                                                            class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150"
                                                            onclick="radioButtonReset({{ $game->id }})"
                                                            @if($game->start_at < \Carbon\Carbon::now()) disabled @endif>
                                                        {{ __('Clear') }}
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach

                                        <input id="pick_count" name="pick_count" type="number" value="0" hidden>
                                        </tbody>

                                        <tfoot>
                                        <tr>
                                            <th class="bg-white pt-1" colspan="6"></th>
                                        </tr>
                                        <tr>
                                            <th class="py-3 pl-4 pr-3 col-span-6 text-left text-xs font-medium tracking-wide text-gray-700 sm:pl-6"
                                                colspan="5">
                                                Favorite is Bold and UPPERCASE
                                            </th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="flex justify-end bg-white py-3 pr-6">
                                    <x-button-danger>
                                        {{ __('Reset') }}
                                    </x-button-danger>
                                    <x-button class="ml-4">
                                        {{ __('Submit') }}
                                    </x-button>
                                </div>
                                <div class="flex justify-end bg-white px-4 py-3 pr-8">
                                    <p class="block text-gray-500 italic">Picks: <span id="picks"></span> of {{ $max_picks }}</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript">
            resetPickCount();

            $('input[type=radio]').change(function () {
                resetPickCount();
            });

            function radioButtonReset(id) {
                let elem = "game" + id;
                let ele = document.getElementsByName(elem);
                for (let i = 0; i < ele.length; i++)
                    ele[i].checked = false;
                resetPickCount();
            }

            function resetPickCount() {
                $('#pick_count').val($(':radio:checked').length);
                $('#picks').text($(':radio:checked').length);

            }
        </script>
    @endpush
</x-app-layout>
