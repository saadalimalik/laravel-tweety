@unless(auth()->user()->is($user))
    <form action="{{ $user->path() . '/follow' }}" method="POST">
        @csrf
        <x-button>
            {{ auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}
        </x-button>
    </form>
@endunless
