<x-app-layout>
    <div class="contianer">
        <div class="max-w-screen-md mx-auto">
            <div class="text-center text-5xl font-extrabold leading-none tracking-tight">
                <span
                    class="decoration-clone hover:decoration-slice bg-clip-text text-transparent bg-gradient-to-b from-yellow-400 to-red-500">
                    Hello<br>
                    World
                </span>
            </div>

            <div class="flex items-center justify-center mt-4 overflow-hidden bg-gray-300 border md:rounded-lg dark:border-gray-600 dark:bg-gray-600">
                <div dir="ltr" class="relative w-full">
                    <div class="flex justify-end px-3 pt-6 pb-56 sm:justify-center">

                        <div class="dropdown relative">
                            <!-- Dropdown toggle button -->
                            <button class="relative z-10 block p-2 bg-white rounded-md dark:bg-gray-800 focus:outline-none">
                                <svg class="w-5 h-5 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div class="dropdown-menu hidden absolute right-0 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                                    your profile
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                                    Your projects
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                                    Help
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                                    Settings
                                </a>
                                <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                                    Sign In
                                </a>
                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
