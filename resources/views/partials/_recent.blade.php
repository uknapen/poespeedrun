<div class="rounded-lg bg-panel">
    <!-- Header -->
    <div>
        <div
            class="flex min-h-[2.75rem] flex-row flex-nowrap items-center justify-between gap-1 overflow-hidden rounded-t-lg py-2 pl-4 pr-2">
            <div
                class="min-w-0 flex-auto break-words font-title text-base font-bold uppercase leading-none tracking-wide text-foreground">
                Recent Runs
            </div>
        </div>
    </div>

    <!-- Content -->
    @unless (count($recent_runs) == 0)

        @foreach ($recent_runs as $run)
            <div class="divide-y divide-divider">
                <div class="odd:bg-[rgb(0 0 0 / 9%)] even:bg-[rgb(0 0 0 / 20%)] border-[#2c2d2f]"
                    title="Unrestricted A5 Pts+Lab run using Viper Strike on Assassin for Team OSRS">
                    <div class="flex flex-row flex-wrap items-start justify-start px-4 py-2">
                        <a href="/{{ $run->id }}"
                            class="flex w-full min-w-0 flex-auto flex-col items-stretch justify-between gap-1 pb-2 pr-2">
                            <div class="line-clamp-2 text-sm font-semibold text-panel_link">
                                {{ $run['category'] }}
                            </div>
                            <div
                                class="flex min-w-0 flex-row flex-wrap items-baseline justify-start gap-1 text-xs text-foreground">
                                <div class="line-clamp-2 break-words">{{ $run['version'] }}, {{ $run['class'] }}</div>
                                <div class="truncate text-xs">({{ $run['archetype'] }}, {{ $run['deathless'] }})</div>
                            </div>
                        </a>
                        <div class="flex min-w-0 max-w-full flex-none flex-row flex-nowrap items-stretch justify-start">
                            <a href="/{{ $run->id }}"
                                class="truncate text-sm font-semibold text-foreground w-28 min-w-0">
                                {{ $run['time'] }}
                            </a>
                            <a href="/{{ $run->id }}"
                                class="truncate text-sm font-semibold text-foreground min-w-0 pr-[35px]">{{ $run['player'] }}
                            </a>
                            <div class="truncate text-sm font-semibold text-foreground">
                                {{ $run['date'] }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    @else
        <p>No runs</p>

    @endunless
</div>
