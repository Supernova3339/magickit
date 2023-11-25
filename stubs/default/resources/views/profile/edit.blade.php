<x-layouts.app>
    <x-slot name="header">
        <h2 class="text-lg font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            {{--tabs--}}
            <div x-data="{ tab: 'my-account' }">
                <!-- Hidden for small screens -->
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select a tab</label>
                    <select id="tabs" name="tabs" x-model="tab" class="block w-full dark:text-gray-100 dark:bg-gray-900/50 dark:border dark:border-gray-200/10 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="my-account">My Account</option>
                        <option value="security">Security</option>
                    </select>
                </div>

                <!-- Displayed for small screens -->
                <div class="hidden sm:block">
                    <nav class="isolate flex divide-x divide-gray-200 dark:divide-gray-600 rounded-lg shadow dark:bg-gray-800" aria-label="Tabs">
                        <a href="#" x-on:click="tab = 'my-account'" x-bind:class="{ 'text-gray-900 dark:text-gray-100': tab === 'my-account', 'text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-500': tab !== 'my-account' }" class="rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white dark:bg-gray-700 py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-600 focus:z-10" aria-current="page">
                            <span>My Account</span>
                            <span aria-hidden="true" x-show="tab === 'my-account'" class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"></span>
                        </a>

                        <a href="#" x-on:click="tab = 'security'" x-bind:class="{ 'text-gray-900 dark:text-gray-100': tab === 'security', 'text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-500': tab !== 'security' }" class="rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white dark:bg-gray-700 py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-600 focus:z-10" aria-current="page">
                            <span>Security</span>
                            <span aria-hidden="true" x-show="tab === 'security'" class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"></span>
                        </a>

                        {{--
                        <a href="#" x-on:click="tab = 'test'" x-bind:class="{ 'text-gray-900 dark:text-gray-100': tab === 'test', 'text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-500': tab !== 'test' }" class="group relative min-w-0 flex-1 overflow-hidden bg-white dark:bg-gray-700 py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-600 focus:z-10" aria-current="page">
                            <span>Test</span>
                            <span aria-hidden="true" x-show="tab === 'test'" class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"></span>
                        </a>

                        <a href="#" x-on:click="tab = 'billing'" x-bind:class="{ 'text-gray-900 dark:text-gray-100': tab === 'billing', 'text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-500': tab !== 'billing' }" class="rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white dark:bg-gray-700 py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-600 focus:z-10">
                            <span>Billing</span>
                            <span aria-hidden="true" x-show="tab === 'billing'" class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"></span>
                        </a>
                        --}}
                    </nav>
                </div>
                <br/>

                <!-- Content for each tab -->
                <div x-show="tab === 'my-account'">
                    <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg dark:bg-gray-900/50 dark:border dark:border-gray-200/10">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>

                <div x-show="tab === 'security'">
                    <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg dark:bg-gray-900/50 dark:border dark:border-gray-200/10">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                    <br/>
                </div>

                <div x-show="tab === 'test'">
                    <p class="text-gray-900 dark:text-gray-100">Test Tab</p>
                </div>

                <div x-show="tab === 'billing'">
                    <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg dark:bg-gray-900/50 dark:border dark:border-gray-200/10">
                        <div class="max-w-xl">
                            <p class="text-gray-900 dark:text-gray-100">Billing Tab</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- /tabs--}}

            <!-- Other content in your view -->

        </div>
    </div>
</x-layouts.app>
