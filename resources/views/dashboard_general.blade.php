<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>

    {{-- STICKY TABLE DEMO --}}
{{--    <flux:table container:class="max-h-svh max-w-[1020px]">--}}
{{--        <flux:table.columns sticky class="bg-white dark:bg-zinc-900 ">--}}
{{--            <flux:table.column sticky>Name</flux:table.column>--}}
{{--            <flux:table.column>Age</flux:table.column>--}}
{{--            <flux:table.column>Grade</flux:table.column>--}}
{{--            <flux:table.column title="years studying">Total<br/>Years</flux:table.column>--}}
{{--            <flux:table.column title="years with User name">Current<br/>Teacher</flux:table.column>--}}
{{--            <flux:table.column>Sibs</flux:table.column>--}}
{{--            <flux:table.column>Awards</flux:table.column>--}}
{{--            <flux:table.column>Rep</flux:table.column>--}}
{{--            <flux:table.column class="sr-only">Edit</flux:table.column>--}}
{{--            <flux:table.column class="sr-only">Remove</flux:table.column>--}}
{{--        </flux:table.columns>--}}

{{--        <flux:table.rows>--}}

{{--            <flux:table.row key="row01"--}}
{{--                class="bg-white hover:bg-green-100 dark:bg-zinc-900 dark:hover:bg-zinc-700">--}}

{{--                 --}}{{-- NAME --}}
{{--                 <flux:table.cell sticky class="bg-white   hover:bg-green-100 dark:bg-zinc-900 dark:hover:bg-zinc-700">--}}
{{--                        <div class="flex flex-col">--}}
{{--                            <flux:label>Last name, First name</flux:label>--}}
{{--                            <flux:label class="ml-4 italic text-sm">student@example.com</flux:label>--}}

{{--                            <flux:label class="ml-4 italic text-sm">--}}
{{--                                (###) ###-#### (c)--}}
{{--                            </flux:label>--}}
{{--                        </div>--}}
{{--                 </flux:table.cell>--}}

{{--                --}}{{-- AGE --}}
{{--                <flux:table.cell align="center">--}}
{{--                    27--}}
{{--                </flux:table.cell>--}}

{{--                --}}{{-- GRADE --}}
{{--                <flux:table.cell align="center">--}}
{{--                    adult--}}
{{--                </flux:table.cell>--}}

{{--                --}}{{-- TOTAL YEARS OF STUDY --}}
{{--                <flux:table.cell class="text-center">--}}
{{--                    12--}}
{{--                </flux:table.cell>--}}

{{--                --}}{{-- YEARS WITH CURRENT TEACHER --}}
{{--                <flux:table.cell class="text-center cursor-help">--}}
{{--                    <flux:badge size="sm" color="green"--}}
{{--                                title="Firstname Lastname has studied with you 7 than six months">--}}
{{--                        7--}}
{{--                    </flux:badge>--}}
{{--                </flux:table.cell>--}}

{{--                --}}{{-- SIBLINGS --}}
{{--                <flux:table.cell class="text-center cursor-help" title="3 sibling names">--}}
{{--                    3--}}
{{--                </flux:table.cell>--}}

{{--                --}}{{-- PREVIOUS AWARDS --}}
{{--                <flux:table.cell class="text-center">--}}
{{--                    4--}}
{{--                </flux:table.cell>--}}

{{--                --}}{{-- REPERTOIRE --}}
{{--                <flux:table.cell class="text-center">--}}
{{--                    <flux:button class="bg-zinc-300 cursor-help"--}}
{{--                                 x-data--}}
{{--                                 @click="$dispatch('openRepertoireModal', { studentId: 1234 })">--}}
{{--                        Rep--}}
{{--                        <flux:badge>5</flux:badge>--}}
{{--                    </flux:button>--}}
{{--                </flux:table.cell>--}}

{{--                --}}{{-- EDIT BUTTON --}}
{{--                <flux:table.cell class="text-center dark:opacity-75">--}}
{{--                    <flux:button--}}
{{--                        size="sm"--}}
{{--                        variant="primary"--}}
{{--                        color="indigo"--}}
{{--                        class="text-xs"--}}
{{--                        x-data--}}
{{--                        @click="$dispatch('openEditStudentModal', { studentId: 1234 })">--}}
{{--                        Edit--}}
{{--                    </flux:button>--}}
{{--                </flux:table.cell>--}}

{{--                --}}{{-- REMOVE BUTTON --}}
{{--                <flux:table.cell class="text-center">--}}
{{--                    <flux:table.cell class="text-center dark:opacity-75">--}}
{{--                        <flux:button--}}
{{--                            size="sm"--}}
{{--                            variant="primary"--}}
{{--                            color="red"--}}
{{--                            class="text-xs"--}}
{{--                            x-data--}}
{{--                            @click="$dispatch('openEditStudentModal', { studentId: 1234 })">--}}
{{--                            Remove--}}
{{--                        </flux:button>--}}
{{--                    </flux:table.cell>--}}
{{--                </flux:table.cell>--}}

{{--                </flux:table.row>--}}


{{--        </flux:table.rows>--}}

{{--    </flux:table>--}}

</x-layouts.app>
