<div class="relative flex w-full max-w-full flex-col flex-nowrap gap-4 lg:flex-row lg:justify-between">
    <div class="relative flex w-full min-w-0 flex-none flex-col flex-nowrap gap-y-4 lg:w-auto lg:flex-auto lg:shrink">
        <!-- top main -->
        <div class="rounded-lg bg-panel pr-6">
            <div>
                <div
                    class="flex min-h-[2.75rem] flex-row flex-nowrap items-center justify-between gap-1 overflow-hidden rounded-t-lg py-2 pl-4 pr-2">
                    <div
                        class="min-w-0 flex-auto break-words font-title text-base font-bold uppercase leading-none tracking-wide text-foreground">
                        Submit Run
                    </div>
                </div>
            </div>
            <form class="relative" method="POST" action="/runs" enctype="multipart/form-data">
                @csrf
                {{ csrf_field() }}
                <div>
                    <div class="x-group-divide">
                        <!-- Start Categorization -->
                        <div class="space-y-6 p-4 border-b border-[#2c2d2f]">
                            <div class="flex flex-col justify-between gap-2">
                                <div class="mb-4">
                                    <div class="text-base font-semibold leading-6 text-foreground">
                                        Categorization
                                    </div>
                                    <div class="mt-1 text-sm text-secondmenutxt">
                                        These values determine which leaderboards the run
                                        will be ranked on.
                                    </div>
                                </div>
                                <div class="flex h-full ml-3 mr-3 flex-col gap-2 w-full">
                                    <div class="text-base font-semibold leading-5 text-foreground">
                                        <i class="fa-solid fa-list"></i> Category<span class="text-yellow-400">
                                            *</span>
                                    </div>
                                    <select
                                        class="cursor-pointer whitespace-nowrap rounded-md border border-gray-700 bg-black p-2 text-white hover:bg-mainhoverbutton h-11 mb-4 hover:border-panel_link"
                                        name="category">
                                        <option value="A10 Pts+Lab">A10 Pts+Lab</option>
                                        <option value="A5 Pts+Lab">A5 Pts+Lab</option>
                                    </select>
                                </div>
                                <div class="flex h-full ml-3 mr-3 flex-col gap-2 w-full">
                                    <div class="text-base font-semibold leading-5 text-foreground">
                                        <i class="fa-solid fa-filter"></i> Version<span class="text-yellow-400">
                                            *</span>
                                    </div>
                                    <select
                                        class="cursor-pointer whitespace-nowrap rounded-md border border-gray-700 bg-black p-2 text-white hover:bg-mainhoverbutton h-11 mb-4 hover:border-panel_link"
                                        name="version">
                                        <option value="3.23">3.23</option>
                                        <option value="3.22">3.22</option>
                                        <option value="3.21">3.21</option>
                                        <option value="3.20">3.20</option>
                                    </select>
                                </div>
                                <div class="flex h-full ml-3 mr-3 flex-col gap-2 w-full">
                                    <div class="text-base font-semibold leading-5 text-foreground">
                                        <i class="fa-solid fa-filter"></i> Class<span class="text-yellow-400">
                                            *</span>
                                    </div>
                                    <select
                                        class="cursor-pointer whitespace-nowrap rounded-md border border-gray-700 bg-black p-2 text-white hover:bg-mainhoverbutton h-11 mb-10 hover:border-panel_link"
                                        name="class">
                                        <option value="Templar">Templar</option>
                                        <option value="Witch">Witch</option>
                                        <option value="Shadow">Shadow</option>
                                        <option value="Ranger">Ranger</option>
                                        <option value="Duellist">Duellist</option>
                                        <option value="Marauder">Marauder</option>
                                        <option value="Scion">Scion</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End Categorization -->
                        <!-- Start Run time -->
                        <div class="space-y-6 p-4 border-b border-[#2c2d2f]">
                            <div class="flex flex-row items-center justify-between gap-2">
                                <div class="mb-4">
                                    <div class="text-base font-semibold leading-6 text-foreground">
                                        Run time
                                    </div>
                                    <div class="mt-1 text-sm text-secondmenutxt">
                                        <div class="leading-6">
                                            <p>
                                                This time determines the placement of the run on
                                                the leaderboards.
                                            </p>
                                            <p>
                                                For the selected category, shorter times are
                                                considered better.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="relative flex ml-3 mr-3 flex-col items-start justify-start gap-2">
                                <div class="text-base font-semibold leading-5 text-foreground">
                                    <i class="fa-solid fa-business-time"></i> Time<span class="text-yellow-400">
                                        *</span>
                                </div>
                                <div
                                    class="flex h-10 items-center rounded-md px-2 text-sm font-semibold shadow-sm border border-gray-700 bg-black text-white hover:border-panel_link">
                                    <input type="number" maxlength="3"
                                        class="h-9 w-14 pr-2 text-right text-xl leading-6 focus:outline-none focus:border-none focus:none bg-black text-foreground"
                                        name="timeH" value="{{ old('timeH') }}" />
                                    <div class="mt-1 text-sm text-secondmenutxt">h</div>
                                    <input type="number" maxlength="2"
                                        class="h-9 w-14 pr-2 text-right text-xl leading-6 focus:outline-none focus:border-none focus:none bg-black text-foreground"
                                        name="timeM" value="{{ old('timeM') }}" />
                                    <div class="mt-1 text-sm text-secondmenutxt">m</div>
                                    <input type="number" maxlength="2"
                                        class="h-9 w-14 pr-2 text-right text-xl leading-6 focus:outline-none focus:border-none focus:none bg-black text-foreground"
                                        name="timeS" value="{{ old('timeS') }}" />
                                    <div class="mt-1 text-sm text-secondmenutxt">s</div>
                                </div>
                            </div>
                        </div>
                        <!-- End Run time -->
                        <!-- Start Video -->
                        <div class="space-y-6 p-4 border-b border-[#2c2d2f]">
                            <div class="flex flex-col justify-between gap-2">
                                <div class="mb-4">
                                    <div class="text-base font-semibold leading-6 text-foreground">
                                        Video
                                    </div>
                                    <div class="mt-1 text-sm text-secondmenutxt">
                                        The moderators for this game require video proof in
                                        order to verify this run.
                                    </div>
                                </div>
                                <div class="flex h-full ml-3 mr-3 flex-col gap-2 w-full">
                                    <div class="text-base font-semibold leading-5 text-foreground">
                                        <i class="fa-solid fa-video"></i> Video URL<span class="text-yellow-400">
                                            *</span>
                                    </div>
                                    <input type="url"
                                        class="whitespace-nowrap rounded-md border border-gray-700 bg-black p-2 text-sm text-secondmenutxt hover:bg-mainhoverbutton h-11 mb-4 hover:border-panel_link"
                                        name="url" value="{{ old('url') }}" />
                                </div>
                            </div>
                        </div>
                        <!-- End Video -->
                        <!-- Start Comment -->
                        <div class="space-y-6 p-4 border-b border-[#2c2d2f]">
                            <div class="flex flex-col justify-between gap-2">
                                <div class="mb-4">
                                    <div class="text-base font-semibold leading-6 text-foreground">
                                        Comment
                                    </div>
                                    <div class="mt-1 text-sm text-secondmenutxt">
                                    </div>
                                </div>
                                <div class="flex h-full ml-3 mr-3 flex-col gap-2 w-full">
                                    <div class="text-base font-semibold leading-5 text-foreground">
                                        <i class="fa-solid fa-comment"></i> Comment
                                    </div>
                                    <textarea type="text"
                                        class="whitespace-nowrap rounded-md border border-gray-700 bg-black p-2 text-sm text-secondmenutxt hover:bg-mainhoverbutton mb-4 hover:border-panel_link"
                                        name="comment" value="{{ old('comment') }}" rows="4" style="resize: none;"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- End Comment -->
                        <!-- Start other Details -->
                        <div class="space-y-6 p-4 border-b border-[#2c2d2f]">
                            <div class="flex flex-col justify-between gap-2">
                                <div class="mb-4">
                                    <div class="text-base font-semibold leading-6 text-foreground">
                                        Other details
                                    </div>
                                    <div class="mt-1 text-sm text-secondmenutxt">
                                        These values provide useful information about the
                                        run, but do not affect its placement on the
                                        leaderboards.
                                    </div>
                                </div>
                                <div class="flex h-full ml-3 mr-3 flex-col gap-2 w-full">
                                    <div class="text-base font-semibold leading-5 text-foreground">
                                        <i class="fa-solid fa-tag"></i> Archetype<span class="text-yellow-400">
                                            *</span>
                                    </div>
                                    <select
                                        class="cursor-pointer whitespace-nowrap rounded-md border border-gray-700 bg-black p-2 text-secondmenutxt hover:bg-mainhoverbutton h-11 mb-4 hover:border-panel_link"
                                        name="archetype">
                                        <option value="Caster">Caster</option>
                                        <option value="Ranged">Ranged</option>
                                        <option value="Melee">Melee</option>
                                        <option value="Minion">Minion</option>
                                        <option value="Unknown">Unknown</option>
                                    </select>
                                </div>
                                <div class="flex h-full ml-3 mr-3 flex-col gap-2 w-full">
                                    <div class="text-base font-semibold leading-5 text-foreground">
                                        <i class="fa-solid fa-tag"></i> Deathless<span class="text-yellow-400">
                                            *</span>
                                    </div>
                                    <select
                                        class="cursor-pointer whitespace-nowrap rounded-md border border-gray-700 bg-black p-2 text-secondmenutxt hover:bg-mainhoverbutton h-11 mb-4 hover:border-panel_link"
                                        name="deathless">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End other Details -->
                        <div class="space-y-6 p-4">
                            <button type="submit" tabindex="0"
                                class="flex h-10 items-center justify-center rounded-md px-2 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-navbar_button text-black hover:bg-navbar_button_hover">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
                <!--  -->
            </form>
        </div>
    </div>
</div>
