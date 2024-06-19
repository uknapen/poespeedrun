<span></span>
<x-layout>

    @include('partials._hero')
    <div class="relative flex w-full max-w-full flex-col flex-nowrap gap-4 lg:flex-row lg:justify-between">
        <div class="relative flex w-full min-w-0 flex-none flex-col flex-nowrap gap-y-4 lg:w-[63%] bg-panel">
            <div class="rounded-lg text-foreground">
                <div class="flex flex-row flex-wrap items-start justify-start px-4 py-2">
                    <div class="flex w-full min-w-0 flex-auto flex-col items-stretch justify-between gap-1 pb-2 pr-2">
                        <div class="line-clamp-2 text-sm font-semibold text-panel_link">
                            {{ $run->category }}
                        </div>
                        <div
                            class="flex min-w-0 flex-row flex-wrap items-baseline justify-start gap-1 text-xs text-foreground">
                            <div class="line-clamp-2 break-words">{{ $run->version }}, {{ $run->class }}</div>
                            <div class="truncate text-xs">({{ $run->archetype }}, {{ $run->deathless }})</div>
                        </div>
                    </div>
                    <div class="flex min-w-0 max-w-full flex-none flex-row flex-nowrap items-stretch justify-start">
                        <div class="truncate text-sm font-semibold text-foreground w-28 min-w-0">
                            {{ $run->time }}
                        </div>
                        <div class="truncate text-sm font-semibold text-foreground min-w-0 pr-[35px]">
                            {{ $run->player }}
                        </div>
                        <div class="truncate text-sm font-semibold text-foreground">
                            {{ $run->date }}
                        </div>
                    </div>
                </div>
                <div>
                    <iframe class="w-full h-[480]" src="{{ $run->url }}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="mt-2 p-2">
                    <div class="">
                        <div class="flex w-full flex-col gap-6 mb-6">
                            <div class="flex w-full flex-col gap-2">
                                <div class="flex w-full flex-col gap-1 rounded p-2 text-sm bg-black/20">
                                    <div class="flex flex-row items-center justify-start gap-1">
                                        <div class="flex-none">
                                            <i class="fa-solid fa-comment"></i>
                                        </div>
                                        <div class="flex-auto truncate font-bold">Description</div>
                                    </div>
                                    <div class="space-y-1 text-secondmenutxt">
                                        <p>
                                            {{ $run->comment }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-2 sm:grid-cols-3">
                            <div class="flex w-full flex-col gap-6">
                                <div class="flex w-full flex-col gap-2">
                                    <div class="flex flex-row items-center justify-between">
                                        <div
                                            class="pl-2 text-xs font-medium uppercase tracking-wide text-secondmenutxt">
                                            Leaderboard
                                        </div>
                                    </div>
                                    <div class="flex w-full flex-col gap-1 rounded p-2 text-sm bg-black/20">
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <div class="flex-none">
                                                <i class="fa-solid fa-list"></i>
                                            </div>
                                            <div class="flex-auto truncate font-bold">Category</div>
                                        </div>
                                        <div class="space-y-1 text-secondmenutxt">
                                            <span><span>{{ $run->category }}</span></span>
                                        </div>
                                    </div>
                                    <div class="flex w-full flex-col gap-1 rounded p-2 text-sm bg-black/20">
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <div class="flex-none">
                                                <i class="fa-solid fa-filter"></i>
                                            </div>
                                            <div class="flex-auto truncate font-bold">Class</div>
                                        </div>
                                        <div class="space-y-1 text-secondmenutxt">{{ $run->class }}</div>
                                    </div>
                                    <div class="flex w-full flex-col gap-1 rounded p-2 text-sm bg-black/20">
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <div class="flex-none">
                                                <i class="fa-solid fa-filter"></i>
                                            </div>
                                            <div class="flex-auto truncate font-bold">Version</div>
                                        </div>
                                        <div class="space-y-1 text-secondmenutxt">{{ $run->version }}</div>
                                    </div>
                                    <div class="flex w-full flex-col gap-1 rounded p-2 text-sm bg-black/20">
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <div class="flex-none">
                                                <i class="fa-solid fa-tag"></i>
                                            </div>
                                            <div class="flex-auto truncate font-bold">Archetype</div>
                                        </div>
                                        <div class="space-y-1 text-secondmenutxt">{{ $run->archetype }}</div>
                                    </div>
                                    <div class="flex w-full flex-col gap-1 rounded p-2 text-sm bg-black/20">
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <div class="flex-none">
                                                <i class="fa-solid fa-tag"></i>
                                            </div>
                                            <div class="flex-auto truncate font-bold">Deathless</div>
                                        </div>
                                        <div class="space-y-1 text-secondmenutxt">{{ $run->deathless }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex w-full flex-col gap-6">
                                <div class="flex w-full flex-col gap-2">
                                    <div class="flex flex-row items-center justify-between">
                                        <div
                                            class="pl-2 text-xs font-medium uppercase tracking-wide text-secondmenutxt">
                                            Run
                                        </div>
                                    </div>
                                    <div class="flex w-full flex-col gap-1 rounded p-2 text-sm bg-black/20">
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <div class="flex-none">
                                                <i class="fa-solid fa-business-time"></i>
                                            </div>
                                            <div class="flex-auto truncate font-bold">Time</div>
                                        </div>
                                        <div class="space-y-1 text-secondmenutxt">
                                            {{ $run->time }}
                                        </div>
                                    </div>
                                    <div class="flex w-full flex-col gap-1 rounded p-2 text-sm bg-black/20">
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <div class="flex-none">
                                                <i class="fa-solid fa-calendar"></i>
                                            </div>
                                            <div class="flex-auto truncate font-bold">Date</div>
                                        </div>
                                        <div class="space-y-1 text-secondmenutxt">
                                            <span class="x-timestamp" data-state="closed">{{ $run->date }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex w-full flex-col gap-6">
                                <div class="flex w-full flex-col gap-2">
                                    <div class="flex flex-row items-center justify-between">
                                        <div
                                            class="pl-2 text-xs font-medium uppercase tracking-wide text-secondmenutxt">
                                            Details
                                        </div>
                                    </div>
                                    <div class="flex w-full flex-col gap-1 rounded p-2 text-sm bg-black/20">
                                        <div class="flex flex-row items-center justify-start gap-1">
                                            <div class="flex-none">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <div class="flex-auto truncate font-bold">Player</div>
                                        </div>
                                        <div class="space-y-1 text-secondmenutxt">
                                            <div class="flex flex-row flex-wrap gap-4">
                                                <div
                                                    class="flex min-w-0 flex-row flex-nowrap items-center justify-start gap-2">
                                                    <a {{-- href="/users/{{$run->user_id}}" --}}
                                                        class="color: rgb(9, 184, 118); --gradient-from: #09b876; --gradient-to: #8ac951;">
                                                        <span>
                                                            {{ $run->player }}
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials._leftmenu')
    </div>
</x-layout>
