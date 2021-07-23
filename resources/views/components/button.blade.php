<form action="{{ route('instant-login') }}" method="post">
    @csrf

    <button type="submit" class="mt-4 w-full px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Dev Login
    </button>
</form>
