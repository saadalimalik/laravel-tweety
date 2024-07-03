<section class="border-b pb-4">
    <form action="/tweets" method="POST">
        @csrf
        <textarea
            name="body"
            id="body"
            class="w-full duration-300 ease-in outline-none border-gray-300 focus:border-blue-400 rounded-2xl resize-none"
            placeholder="Type your tweet here..."
            autofocus
            required
        ></textarea>

        @error('body')
            <p class="text-sm text-red-500 ms-3 mb-2">{{ $message }}</p>
        @enderror

        <div class="flex items-center justify-between">
            <x-avatar size="50" :user="auth()->user()" />
            <x-button>Tweet</x-button>
        </div>
    </form>
</section>
