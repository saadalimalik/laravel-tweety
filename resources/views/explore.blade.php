<x-app-layout>
    <section class="p-4 flex flex-col gap-3">
        @foreach($users as $user)
            <div class="flex justify-between items-center">
                <a href="{{ $user->path() }}" class="flex gap-6 items-center">
                    <img
                        src="{{ $user->avatar }}"
                        alt="{{ $user->name }}'s avatar"
                        width="80"
                    >

                    <div>
                        <p class="font-bold">{{ $user->name }}</p>
                        <span class="text-sm text-gray-500">{{ $user->username }}</span>
                    </div>
                </a>

                <x-follow-button :$user />
            </div>
        @endforeach

        <div>
            {{ $users->links() }}
        </div>
    </section>
</x-app-layout>
