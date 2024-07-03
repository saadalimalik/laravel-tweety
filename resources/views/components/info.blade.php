<div class="border bg-gray-100 rounded-2xl px-6 py-4 w-1/6">
    <h2 class="text-xl font-bold mb-4">Following</h2>
    <ul class="flex flex-col gap-3">
        @foreach(auth()->user()->follows as $user)
            <li class="flex gap-2 items-center">
                <x-avatar size="50" :$user />
                <a href="{{ $user->path() }}">
                    <span>{{ $user->name }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>
