<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Overall Standings through Week '.$week) }}
        </h2>
    </x-slot>

    <div class="pb-6 xl:mx-72 lg:mx-60 md:mx-24 sm:mx-16 xs:mx-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
            <div class="mt-8 xs:mx-0.5 sm:mx-6 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table id="weekly_picks" class="min-w-full  divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="pl-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border sm:pl-6">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="pl-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        Wins
                                    </th>
                                    <th scope="col"
                                        class="pl-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        Losses
                                    </th>
                                    <th scope="col"
                                        class="py-3 pr-8 text-right text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        Win %
                                    </th>
                                    <th scope="col"
                                        class="py-3 pr-8 text-right text-xs font-medium uppercase tracking-wide text-gray-500 border">
                                        Winnings
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach($total_wins_losses as $player)
                                        <tr>
                                            <td class="whitespace-nowrap py-2 pl-4 text-sm font-medium text-gray-900 border sm:pl-6">{{ $player->name }}</td>
                                            <td class="whitespace-nowrap py-2 pl-3 text-sm font-medium text-gray-900 border">{{ $player->total_wins }}</td>
                                            <td class="whitespace-nowrap py-2 pl-3 text-sm font-medium text-gray-900 border">{{ $player->total_losses }}</td>
                                            <td class="whitespace-nowrap py-2 pr-3 text-right text-sm font-medium text-gray-900 border">{{ number_format($player->total_wins == 0 ? 0 : ($player->total_wins / ($player->total_wins + $player->total_losses)) * 100, 2) }}%</td>
                                            <td class="whitespace-nowrap py-2 pr-8 text-sm text-right font-medium text-gray-900 border">${{ number_format($player->winnings / 100, 2) }}</td>
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
