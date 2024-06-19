<div class="relative flex w-full min-w-0 flex-none flex-col flex-nowrap gap-y-4 lg:w-[35%]">
    <!-- Recap Stat -->
    <div class="rounded-lg bg-panel overflow-hidden">
        <div
            class="flex min-h-[2.75rem] flex-row flex-nowrap items-center justify-between gap-1 overflow-hidden rounded-t-lg py-2 pl-4 pr-2">
            <div
                class="min-w-0 flex-auto break-words font-title text-base font-bold uppercase leading-none tracking-wide text-foreground">
                Game stats
            </div>
            <div c#class="flex-none">
                <a class="block p-2 rounded-full text-foreground hover:bg-primary-600 hover:text-on-primary-600 x-focus-outline-offset"
                    href="/stats"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
        </div>
        <div>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 flex-auto px-4 pb-4 pt-2">
                <div class="flex flex-col items-start justify-start">
                    <div class="max-w-full">
                        <div class="text-sm font-medium text-foreground">Runs</div>
                        <div class="mt-0.5 truncate text-base font-semibold text-foreground">
                            {{ $totalRun }}
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start justify-start">
                    <div class="max-w-full">
                        <div class="text-sm font-medium text-foreground">
                            Players
                        </div>
                        <div class="mt-0.5 truncate text-base font-semibold text-foreground">
                            {{ $totalUser }}
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start justify-start">
                    <div class="max-w-full">
                        <div class="text-sm font-medium text-foreground">
                            Total runs
                        </div>
                        <div class="mt-0.5 truncate text-base font-semibold text-foreground">
                            {{ $totalTimes }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of Recap Stat -->

    <!-- Recent run -->
    @include('partials._recent')
</div>
