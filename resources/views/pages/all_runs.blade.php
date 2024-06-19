<x-layout>

    @include('partials._hero')
    <div class="relative flex w-full max-w-full flex-col flex-nowrap gap-4 lg:flex-row lg:justify-between">
        <div class="relative flex w-full min-w-0 flex-none flex-col flex-nowrap gap-y-4 lg:w-[63%]">
            <div class="rounded-lg">
                <div class="bg-mainbg text-foreground">
                    <!-- Table -->
                    <div class="table">
                        <div class="table-row table-heading">
                            <div class="table-cell">Player</div>
                            <div class="table-cell">@sortablelink('time', 'Time')</div>
                            <div class="table-cell">Class</div>
                            <div class="table-cell">Version</div>
                            <div class="table-cell">Date</div>
                            <div class="table-cell">Archetype</div>
                            <div class="table-cell">Deathless</div>
                        </div>
                        @unless (count($runs) == 0)
                            @foreach ($runs as $run)
                                <a href="/{{ $run->id }}" class="table-row hover:bg-secondmenubg">
                                    <div class="table-cell">{{ $run['player'] }}</div>
                                    <div class="table-cell">{{ $run['time'] }}</div>
                                    <div class="table-cell">{{ $run['class'] }}</div>
                                    <div class="table-cell">{{ $run['version'] }}</div>
                                    <div class="table-cell">{{ $run['date'] }}</div>
                                    <div class="table-cell">{{ $run['archetype'] }}</div>
                                    <div class="table-cell">{{ $run['deathless'] }}</div>
                                </a>
                            @endforeach
                        @else
                            <p>No runs</p>

                        @endunless
                    </div>
                </div>
            </div>
        </div>
        @include('partials._leftmenu')





    </div>
</x-layout>
