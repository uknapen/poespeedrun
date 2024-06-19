<section>
    <div class="rounded-lg bg-panel">
        <!-- Poe/year/link/img -->
        <div class="space-y-2 rounded-lg p-4 lg:px-6">
            <div class="flex flex-auto flex-row flex-nowrap items-start justify-start gap-4">
                <!-- Img -->
                <div class="flex-none self-center">
                    <a href="">
                        <img src="images/Path_of_Exile_Logo.png" class="w-50 h-40 object-cover" alt="Path of Exile logo" />
                    </a>
                </div>
                <!-- Content -->
                <div class="relative top">
                    <!-- Title -->
                    <div class="font-title text-xl font-bold tracking-wide text-foreground">
                        <a href="/" class="text-panel_link">Path of Exile</a>
                        <span class="ml-1 text-lg font-normal text-foreground">(2013)</span>
                    </div>
                    <div class="flex w-full flex-col space-y-3">
                        <div class="text-foreground">PC</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of Poe/year/link/img -->

        <!-- navbar -->
        <div class="flex flex-row items-center justify-between rounded-b-lg bg-black/20">
            <div class="relative w-full text-sm h-12">
                <nav class="absolute bottom-0 left-0">
                    <div class="flex flex-row flex-nowrap items-stretch justify-start px-2" style="column-gap: 6px">
                        <a href="/">
                            <button type="button"
                                class="flex h-full cursor-pointer flex-row items-center justify-between border-b-2 px-2 py-3 
                    <?php
                    $currentPath = request()->path();
                    if ($currentPath == 'all' || $currentPath == 'stats') {
                        echo 'border-panel_link text-panel_link hover:text-foreground hover:border-foreground';
                    } else {
                        echo 'border-foreground text-foreground';
                    }
                    ?> ">
                                <div
                                    class="flex min-w-max flex-row flex-nowrap items-center justify-start gap-x-1.5 whitespace-nowrap">
                                    <div class="text-sm font-medium">Leaderboards</div>
                                </div>
                            </button>
                        </a>
                        <a href="/all">
                            <button type="button"
                                class="x-focus-inner-4 flex h-full cursor-pointer flex-row items-center justify-between border-b-2 px-2 py-3 
                    <?php
                    use Illuminate\Http\Request;
                    $currentPath = request()->path();
                    if ($currentPath == 'all') {
                        echo 'border-foreground text-foreground';
                    } else {
                        echo 'border-panel_link text-panel_link hover:text-foreground hover:border-foreground';
                    }
                    ?> ">
                                <div
                                    class="flex min-w-max flex-row flex-nowrap items-center justify-start gap-x-1.5 whitespace-nowrap">
                                    <div class="text-sm font-medium">All runs</div>
                                </div>
                            </button>
                        </a>
                        {{-- <a href="/stats">
                  <button
                    type="button"
                    class="x-focus-inner-4 flex h-full cursor-pointer flex-row items-center justify-between border-b-2 px-2 py-3 
                    <?php
                    $currentPath = request()->path();
                    if ($currentPath == 'stats') {
                        echo 'border-foreground text-foreground';
                    } else {
                        echo 'border-panel_link text-panel_link hover:text-foreground hover:border-foreground';
                    }
                    ?> "
                  >
                    <div
                      class="flex min-w-max flex-row flex-nowrap items-center justify-start gap-x-1.5 whitespace-nowrap"
                    >
                      <div class="text-sm font-medium text-lg">Stats</div>
                    </div>
                  </button>
                </a> --}}
                    </div>
                </nav>
            </div>
        </div>
        <!-- end of navbar -->
    </div>


</section>
