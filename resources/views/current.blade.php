<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Week '.$week.' Results') }}
        </h2>
    </x-slot>

    <div class="pb-6">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
            <div class="mt-8 xs:mx-0.5 sm:mx-6 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table id="weekly_picks" class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3 pl-3 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border sm:pl-6">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        Game 1
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        Game 2
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        Game 3
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        Game 4
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        Game 5
                                    </th>
                                    @if($week == 17)
                                        <th scope="col"
                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                            Game 6
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                            Game 7
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                            Game 8
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                            Game 9
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                            Game 10
                                        </th>
                                    @endif
                                    <th scope="col"
                                        class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        Record
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach($picks as $pick)
                                    <tr>
                                        <td class="whitespace-nowrap py-3 pl-4 pr-3 text-sm font-medium text-gray-900 border sm:pl-6">
                                            {{ $pick->user->name }}
                                        </td>

                                        @foreach(json_decode($pick->picks, true) as $key=>$value)
                                            <td class="whitespace-nowrap py-3 pl-4 pr-3 text-sm font-medium border
                                            @php
                                                $game = (new App\Models\Game)->where('id', $key)->get(['status', 'home_team_id', 'home_score', 'home_spread', 'away_team_id', 'away_score', 'away_spread']);
                                            @endphp
                                            @if($game->value('away_team_id') == $value)
                                                @if(str_starts_with($game->value('status'), "Final") and $game->value('away_score') + $game->value('away_spread') > $game->value('home_score')) bg-green-100 text-green-900
                                                @elseif(str_starts_with($game->value('status'), "Final") and $game->value('away_score') + $game->value('away_spread') < $game->value('home_score')) bg-red-100 text-red-900
                                                @elseif(str_starts_with($game->value('status'), "Not Started")) text-gray-900
                                                @elseif($game->value('away_score') + $game->value('away_spread') > $game->value('home_score')) text-green-600
                                                @else($game->value('away_score') + $game->value('away_spread') < $game->value('home_score')) text-red-600
                                                @endif
                                            @else
                                                @if(str_starts_with($game->value('status'), "Final") and $game->value('home_score') + $game->value('home_spread') > $game->value('away_score')) bg-green-100 text-green-900
                                                @elseif(str_starts_with($game->value('status'), "Final") and $game->value('home_score') + $game->value('home_spread') < $game->value('away_score')) bg-red-100 text-red-900
                                                @elseif(str_starts_with($game->value('status'), "Not Started")) text-gray-900
                                                @elseif($game->value('home_score') + $game->value('home_spread') > $game->value('away_score')) text-green-600
                                                @else($game->value('home_score') + $game->value('home_spread') < $game->value('away_score')) text-red-600
                                                @endif
                                            @endif">
                                                <div>
                                                    @if(str_starts_with($game->value('status'), "Not Started"))
                                                        <span class="font-bold">Not Started</span>
                                                    @else
                                                        <span
                                                            class="font-bold">{{ (new App\Models\Team)->where('id', $value)->value('short_name') }}</span>
                                                        <span>
                                                            @if($game->value('away_team_id') == $value)
                                                                <span>({{ $game->value('away_spread') }}) <span
                                                                        class="font-bold">[A]</span></span>
                                                            @else
                                                                <span>({{ $game->value('home_spread') }}) <span
                                                                        class="font-bold">[H]</span></span>
                                                            @endif
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="text-xs text-gray-500">
                                                    @if($game->value('status') == "Not Started")
                                                    @else
                                                        @if($game->value('away_score') == null)
                                                            0
                                                        @else
                                                            {{ $game->value('away_score') }}
                                                        @endif - @if($game->value('home_score') == null)
                                                            0
                                                        @else
                                                            {{ $game->value('home_score') }}
                                                        @endif {{ $game->value('status') }}
                                                    @endif
                                                </div>
                                            </td>
                                            @if($loop->last)
                                                @if($loop->count < $pick->pick_count)
                                                    @for($i = $loop->count; $i < $pick->pick_count; $i++)
                                                        <td class="whitespace-nowrap py-3 pl-4 pr-3 text-sm font-medium font-bold text-gray-900 border">
                                                            Not Started
                                                        </td>
                                                    @endfor
                                                @endif
                                            @endif
                                        @endforeach

                                        <td class="whitespace-nowrap py-3 pl-4 pr-3 text-sm font-medium text-gray-900 border">
                                            {{ $pick->wins }} - {{ $pick->losses }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
