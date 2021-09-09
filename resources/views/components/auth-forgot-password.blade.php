<div class="flex items-stretch min-h-screen bg-gray-200">
    <div class="self-center w-full max-w-sm p-6 m-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h1 class="text-3xl font-semibold text-center text-gray-700 dark:text-white">Brand</h1>

        <div class="mt-4 mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <label for="email" class="block text-sm text-gray-800 dark:text-gray-200">{{ __('Email') }}</label>
                <input type="email" name="email" value="{{ old('email') }}" required autocomplete="off" class="block w-full px-4 py-2 mt-1 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div class="flex items-center justify-end mt-4">
                <button
                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>

        </form>
    </div>
</div>
