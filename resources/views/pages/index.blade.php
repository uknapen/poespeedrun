<x-layout>
    @include('partials._hero')
    <div class="relative flex w-full max-w-full flex-col flex-nowrap gap-4 lg:flex-row lg:justify-between">
        @include('partials._mainmenu')
        @include('partials._leftmenu')
    </div>
</x-layout>
