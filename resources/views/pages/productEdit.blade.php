<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="max-w-sm mx-auto" method="POST" action="{{ route('pages.update', $products->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-5">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                            <input type="text" id="name" name="name" value="{{ $products->product_name }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <div class="mb-5">
                            <label for="price"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                Price</label>
                            <input type="number" id="price" name="price" value="{{ $products->price }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <div class="mb-5">
                            <label for="quantity"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                Quantity</label>
                            <input type="number" id="quantity" name="quantity" value="{{ $products->quantity }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
