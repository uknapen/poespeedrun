<x-layout>
    <div class="flex flex-col gap-4 md:m-auto md:w-1/3">
        <div class="rounded-lg bg-secondmenubg">
            <!-- header -->
            <div
                class="flex min-h-[2.75rem] flex-row flex-nowrap items-center justify-between gap-1 overflow-hidden rounded-t-lg py-2 pl-4 pr-2">
                <div
                    class="min-w-0 flex-auto break-words font-title text-base font-bold uppercase leading-none tracking-wide text-foreground">
                    Sign up to PoE Speedrun
                </div>
            </div>
            <!-- Content -->
            <form class="relative" action="/users" method="POST">
                @csrf
                <div class="divide-y divide-divider">
                    <div class="space-y-6 p-4 border-b border-[#2c2d2f]">
                        <div class="relative flex w-full flex-col gap-2">
                            <div class="text-foreground">
                                Username<span class="text-green-400"> *</span>
                            </div>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="min-h-[2.5rem] scroll-margin-top-[7rem] rounded-[0.375rem] border border-opacity-100 text-xs leading-[1.25rem] bg-mainhoverbutton text-foreground pl-[5]" />
                        </div>
                        <div class="relative flex w-full flex-col gap-2">
                            <div class="text-foreground">
                                Email<span class="text-green-400"> *</span>
                            </div>
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="min-h-[2.5rem] scroll-margin-top-[7rem] rounded-[0.375rem] border border-opacity-100 text-xs leading-[1.25rem] bg-mainhoverbutton text-foreground pl-[5]" />
                        </div>
                        <div class="relative flex w-full flex-col gap-2">
                            <div class="text-foreground">
                                Password<span class="text-green-400"> *</span>
                            </div>
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <input type="password" name="password" value="{{ old('password') }}"
                                class="min-h-[2.5rem] scroll-margin-top-[7rem] rounded-[0.375rem] border border-opacity-100 text-xs leading-[1.25rem] bg-mainhoverbutton text-foreground pl-[5]" />
                        </div>
                        <div class="relative flex w-full flex-col gap-2">
                            <div class="text-foreground">
                                Confirm Password<span class="text-green-400"> *</span>
                            </div>
                            @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <input type="password" name="password_confirmation"
                                value="{{ old('password_confirmation') }}"
                                class="min-h-[2.5rem] scroll-margin-top-[7rem] rounded-[0.375rem] border border-opacity-100 text-xs leading-[1.25rem] bg-mainhoverbutton text-foreground pl-[5]" />
                        </div>
                        {{-- <div class="relative flex w-full flex-col gap-2">
              <div class="text-foreground">Location</div>
              <input
                type="text"
                name="location"
                class="min-h-[2.5rem] scroll-margin-top-[7rem] rounded-[0.375rem] border border-opacity-100 text-xs leading-[1.25rem] bg-mainhoverbutton text-foreground pl-[5]"
              />
            </div> --}}
                    </div>
                    <div class="space-y-6 p-4 border-b border-[#2c2d2f]">
                        <div class="flex flex-row flex-wrap items-center justify-between gap-2">
                            <button type="submit" tabindex="0"
                                class="flex h-10 items-center justify-center rounded-md px-2 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-navbar_button text-black hover:bg-navbar_button_hover">
                                Sign Up
                            </button>
                            <a href="/login"
                                class="flex h-10 items-center justify-center rounded-md px-2 text-sm font-semibold no-underline shadow-sm border border-white/5 bg-black text-foreground hover:bg-mainhoverbutton">Already
                                have an account ?</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
