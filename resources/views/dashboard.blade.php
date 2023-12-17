<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between">

                    <a href="#"
                        class="w-[250px] h-[130px] block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Today</h5>
                        <p class="font-normal text-3xl text-gray-700 dark:text-gray-400">500$
                            </p>
                    </a>
                    <a href="#"
                        class="w-[250px] h-[130px] block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Yesterday</h5>
                        <p class="font-normal text-3xl text-gray-700 dark:text-gray-400">500$
                            </p>
                    </a>
                    <a href="#"
                        class="w-[250px] h-[130px] block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">This Month</h5>
                        <p class="font-normal text-3xl text-gray-700 dark:text-gray-400">500$
                            </p>
                    </a>
                    <a href="#"
                        class="w-[250px] h-[130px] block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Last Month </h5>
                        <p class="font-normal text-3xl text-gray-700 dark:text-gray-400">500$
                            </p>
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
