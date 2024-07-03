<x-app-layout>
    <header class="mb-4">
        <section class="w-full relative mb-4">
            <img
                src="{{ asset('images/default-profile-banner.jpg') }}"
                alt=""
                class="w-full rounded-2xl"
            >
            <img
                src="{{ $user->avatar }}"
                alt="{{ $user->name }}'s avatar"
                class="rounded-full border-4 border-white absolute top-full left-1/2 -translate-x-1/2 -translate-y-1/2"
                width="130"
            >
        </section>

        <section class="px-4">
            <div class="mb-4 flex justify-between items-center">
                <div class="max-w-48 truncate">
                    <h1 class="text-2xl font-bold">{{ $user->name }}</h1>
                    <p class="text-gray-400">{{ '@' . $user->username }}</p>
                    <span>Joined {{ $user->created_at->diffForHumans() }}</span>
                </div>

                <div class="flex items-center gap-3">
                    <x-button>Follow</x-button>
                    <button class="px-4 py-2 border rounded-full">Edit Profile</button>
                </div>
            </div>

            <div class="text-sm">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem doloribus, explicabo? Ab asperiores deserunt, dicta eos esse et hic obcaecati provident quaerat quibusdam. Accusamus autem culpa, delectus eveniet iste quibusdam!
                </p>
            </div>
        </section>
    </header>

    <hr>

    <x-timeline :tweets="$user->tweets" />
</x-app-layout>
