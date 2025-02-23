<div class="border rounded-xl p-3">
    <div class="flex items-center gap-3 mb-3">
        <x-avatar size="40" :user="$tweet->user" />
        <div class="flex flex-col">
            <a href="{{ $tweet->user->path() }}">
                <span class="font-semibold">{{ $tweet->user->name }}</span>
            </a>

            <a href="{{ $tweet->user->path() }}">
                <span class="text-muted text-sm">{{ '@' . $tweet->user->username }}</span>
            </a>
        </div>

        @unless(url()->current() === $tweet->user->path())
        <div class="ms-auto">
            <x-follow-button :user="$tweet->user" />
        </div>
        @endunless
    </div>

    <div class="px-3">
        <p class="mb-3">
            {{ $tweet->body }}
        </p>
        <x-like-buttons :$tweet ></x-like-buttons>
    </div>
</div>
