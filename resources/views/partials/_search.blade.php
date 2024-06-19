<div class="bg-secondmenubg">
    <!-- First line option -->
    <form action="">
        @csrf
        {{-- <div class="relative flex flex-row flex-wrap gap-2 p-2">
        <!-- Version -->
        <div class="relative flex flex-col gap-1">
            <!-- Texte -->
            <div class="text-xs font-medium text-secondmenutxt">
            Version
            </div>

            <!-- Select -->
            <div>
            <select
                class="cursor-pointer whitespace-nowrap rounded-md border border-gray-700 bg-black p-2 text-white hover:bg-mainhoverbutton h-25"
                name="version"
                >
                  <option value="3.23">3.23</option>
                  <option value="3.22">3.22</option>
                  <option value="3.21">3.21</option>
                  <option value="3.20">3.20</option>
                </select>
            </div>
        </div>
        <!-- classes -->
        <div class="relative flex flex-col gap-1">
            <!-- Texte -->
            <div class="text-xs font-medium text-secondmenutxt">
            Class
            </div>

            <!-- Select -->
            <div>
            <select
                class="cursor-pointer whitespace-nowrap rounded-md border border-gray-700 bg-black p-2 text-white hover:bg-mainhoverbutton h-25"
                name="class"
                >
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
        </div> --}}

        <!-- Second line option -->

        <div class="relative flex flex-row flex-wrap items-center justify-between gap-5 p-2 sm:justify-start">
            {{-- <div>
            <div class="text-xs font-medium text-secondmenutxt">
              Deathless
            </div>
            <select
              class="cursor-pointer rounded-md border border-gray-700 bg-black p-1 text-white hover:bg-mainhoverbutton h-15"
              name="deathless"
              >
                <option value="">Any</option>
                <option value="No">No</option>
                <option value="Yes">Yes</option>
              </select>
          </div>
          <div>
            <div class="text-xs font-medium text-secondmenutxt">
              Archetype
            </div>
            <select
              class="cursor-pointer rounded-md border border-gray-700 bg-black p-1 text-white hover:bg-mainhoverbutton h-15"
              name="archetype"
              >
                <option value="">Any</option>
                <option value="Caster">Caster</option>
                <option value="Ranged">Ranged</option>
                <option value="Melee">Melee</option>
                <option value="Minion">Minion</option>
                <option value="Unknown">Unknown</option>
              </select>
          </div> --}}

            <div class="contents grow flex-row flex-wrap items-center justify-end gap-2 sm:flex">
                {{-- <div>
        <button
            type="submit"
            tabindex="0"
            class="flex h-10 items-center justify-center rounded-md px-2 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-black text-foreground hover:bg-mainhoverbutton"
          >
            <i
              class="fa-solid fa-search text-foreground w-5 pr-1"
            ></i
            >Search
          </button>
      </div> --}}
                {{-- <a href=""
          ><button
            type="button"
            tabindex="0"
            class="flex h-10 items-center justify-center rounded-md px-2 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-black text-foreground hover:bg-mainhoverbutton"
          >
            <i
              class="fa-solid fa-book-open text-foreground w-5 pr-1"
            ></i
            >Show Rule
          </button></a
        > --}}
                @auth
                    <a href="/create"><button type="button" tabindex="0"
                            class="flex h-10 items-center justify-center rounded-md px-2 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-navbar_button text-black hover:bg-navbar_button_hover">
                            <i class="fa fa-circle-plus text-black w-5 pr-1"></i>
                            Submit run
                        </button></a>
                @else
                    <a href="/create" class="tooltip"><button type="button" tabindex="0"
                            class="flex h-10 items-center justify-center rounded-md px-2 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-gray-200 text-black hover:cursor-not-allowed"
                            disabled>
                            <i class="fa fa-circle-plus text-black w-5 pr-1"></i>
                            Submit run
                        </button>
                        <span class="tooltiptext">You have to be connected in order to submit a run</span>
                    </a>

                @endauth
            </div>

    </form>
</div>

</div>
