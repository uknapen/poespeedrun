    <div class="relative flex w-full min-w-0 flex-none flex-col flex-nowrap gap-y-4 lg:w-[63%]">
        <div class="rounded-lg">
            <!-- top main -->
            <div class="flex w-full flex-col">
                <!-- type of race -->
                <div class="bg-mainbgtype shadow-sm rounded-t-lg">
                    <!-- generic type -->
                    <div class="flex flex-row flex-nowrap items-end justify-start p-2">
                        <div class="flex max-w-full flex-1 flex-row flex-wrap gap-2">
                            <a href="/?category=a5">
                                <button type="button"
                                    class="flex h-10 items-center justify-center rounded-md px-2.5 text-sm font-semibold no-underline shadow-sm border border-white/5 
                        <?php
                        if (isset($_GET['category'])) {
                            if ($_GET['category'] === 'a5') {
                                echo 'bg-navbar_button text-black hover:bg-navbar_button_hover';
                            } else {
                                echo 'bg-black text-foreground hover:bg-mainhoverbutton';
                            }
                        } else {
                            echo 'bg-black text-foreground hover:bg-mainhoverbutton';
                        }
                        ?>">
                                    A5 Pts+Lab
                                </button>
                            </a>
                            <a href="/?category=a10">
                                <button type="button" tabindex="0"
                                    class="flex h-10 items-center justify-center rounded-md px-2.5 text-sm font-semibold no-underline shadow-sm border border-white/5 
                        <?php
                        if (isset($_GET['category'])) {
                            if ($_GET['category'] === 'a10') {
                                echo 'bg-navbar_button text-black hover:bg-navbar_button_hover';
                            } else {
                                echo 'bg-black text-foreground hover:bg-mainhoverbutton';
                            }
                        } else {
                            echo 'bg-navbar_button text-black hover:bg-navbar_button_hover';
                        }
                        
                        ?>">
                                    A10 Pts+Lab
                                </button>
                            </a>
                        </div>
                        {{-- <button
                    type="button"
                    class="flex flex-none cursor-pointer flex-nowrap items-center justify-center rounded-full bg-white/10 p-2 hover:bg-white/20"
                    data-state="closed"
                    tabindex="0"
                  >
                    <span class="">Show more</span>
                  </button> --}}
                    </div>
                    <!-- others type -->
                    {{-- <div>
                  <div
                    class="flex flex-row flex-nowrap items-end justify-start p-2"
                  >
                    <div
                      class="flex max-w-full flex-1 flex-row flex-wrap gap-2"
                    >
                      <a href="/a10"
                        ><button
                          type="button"
                          tabindex="0"
                          class="flex h-7 items-center justify-center rounded-md px-2.5 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-black text-foreground hover:bg-mainhoverbutton"
                        >
                          A5 Any %
                        </button></a
                      >
                      <a href="/a10"
                        ><button
                          type="button"
                          tabindex="0"
                          class="flex h-7 items-center justify-center rounded-md px-2.5 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-black text-foreground hover:bg-mainhoverbutton"
                        >
                          A1 Any %
                        </button></a
                      >
                      <a href="/a10"
                        ><button
                          type="button"
                          tabindex="0"
                          class="flex h-7 items-center justify-center rounded-md px-2.5 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-black text-foreground hover:bg-mainhoverbutton"
                        >
                          A2 Any %
                        </button></a
                      >
                      <a href="/a10"
                        ><button
                          type="button"
                          tabindex="0"
                          class="flex h-7 items-center justify-center rounded-md px-2.5 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-black text-foreground hover:bg-mainhoverbutton"
                        >
                          A3 Any %
                        </button></a
                      >
                      <a href="/a10"
                        ><button
                          type="button"
                          tabindex="0"
                          class="flex h-7 items-center justify-center rounded-md px-2.5 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-black text-foreground hover:bg-mainhoverbutton"
                        >
                          A10 Any %
                        </button></a
                      >
                      <a href="/a10"
                        ><button
                          type="button"
                          tabindex="0"
                          class="flex h-7 items-center justify-center rounded-md px-2.5 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-black text-foreground hover:bg-mainhoverbutton"
                        >
                          Brutus Any %
                        </button></a
                      >
                      <a href="/a10"
                        ><button
                          type="button"
                          tabindex="0"
                          class="flex h-7 items-center justify-center rounded-md px-2.5 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-black text-foreground hover:bg-mainhoverbutton"
                        >
                          Level 80 Any %
                        </button></a
                      >
                      <a href="/a10"
                        ><button
                          type="button"
                          tabindex="0"
                          class="flex h-7 items-center justify-center rounded-md px-2.5 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-black text-foreground hover:bg-mainhoverbutton"
                        >
                          Twink A10 Any $
                        </button></a
                      >
                      <a href="/a10"
                        ><button
                          type="button"
                          tabindex="0"
                          class="flex h-7 items-center justify-center rounded-md px-2.5 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-black text-foreground hover:bg-mainhoverbutton"
                        >
                          Coop A10 Any %
                        </button></a
                      >
                    </div>
                  </div>
                </div> --}}
                </div>
                <!-- other category -->
                @include('partials._search')
            </div>
            <div class="bg-mainbg text-foreground">
                <!-- Table -->

                <x-leaderboard :runs="$runs" />
            </div>
            <!-- bot main -->
        </div>
        <!-- end of main menu -->
    </div>
