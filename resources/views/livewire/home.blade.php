<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-4">
                Livewire 3 Examples
            </h1>
            <p class="text-xl text-gray-600">
                A collection of beginner-friendly Livewire 3 examples built with Laravel 12
            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-2">
            <!-- Counter Example -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-indigo-500 rounded-md p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">Counter</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                Simple counter with increment and decrement buttons
                            </p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('counter') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            View Example
                        </a>
                    </div>
                </div>
            </div>

            <!-- Calculator Example -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">Calculator</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                Basic calculator with 5 operations (+, -, *, /, %)
                            </p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('calculator') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            View Example
                        </a>
                    </div>
                </div>
            </div>

            <!-- Todo Example -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">Todo List</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                CRUD operations for tasks with database persistence
                            </p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('todo') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            View Example
                        </a>
                    </div>
                </div>
            </div>

            <!-- Regions Example -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-red-500 rounded-md p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">Regions & Countries</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                Dependent dropdowns with loading state
                            </p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('regions') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            View Example
                        </a>
                    </div>
                </div>
            </div>

            <!-- Products Example -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-purple-500 rounded-md p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">Products</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                Paginated table with search functionality
                            </p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('products') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            View Example
                        </a>
                    </div>
                </div>
            </div>

            <!-- Registration Example -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-500 rounded-md p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">Registration Form</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                Form with validation and database persistence
                            </p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('registration') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            View Example
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">About This Project</h2>
            <div class="prose prose-indigo text-gray-600">
                <p>
                    This project demonstrates six common use cases for Livewire 3 in Laravel 12 applications, designed specifically for beginners who want to learn Livewire.
                </p>
                <p class="mt-4">
                    Each example focuses on different Livewire features:
                </p>
                <ul class="mt-2 list-disc pl-5 space-y-1">
                    <li><strong>Counter:</strong> Basic state management and event handling</li>
                    <li><strong>Calculator:</strong> Form handling and basic calculations</li>
                    <li><strong>Todo List:</strong> Full CRUD operations with database</li>
                    <li><strong>Regions & Countries:</strong> Dependent dropdowns with loading states</li>
                    <li><strong>Products:</strong> Pagination and search functionality</li>
                    <li><strong>Registration Form:</strong> Form validation and submission</li>
                </ul>
                <p class="mt-4">
                    The project uses Tailwind CSS for styling and demonstrates how Livewire components can be seamlessly integrated with modern CSS frameworks.
                </p>
            </div>
        </div>
    </div>
    <div class="mt-16 border-t border-gray-200 pt-8">
        <div class="text-center">
            <p class="text-base text-gray-500">
                Created by <a href="https://ashkanghelichkhani.ir"
                              class="font-medium text-indigo-600 hover:text-indigo-500"
                              target="_blank">
                    Ashkan GhelichKhani
                </a>
            </p>
            <p class="mt-1 text-sm text-gray-500">
                Livewire 3 Examples Project - © {{ date('Y') }}
            </p>
        </div>
    </div>
</div>
