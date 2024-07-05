<section class="p-5 flex flex-col gap-4">
    @forelse($tweets as $tweet)
        <x-tweet :$tweet></x-tweet>

    @empty
        <p class="p-4 text-center">No tweets yet.</p>
    @endforelse

    @if(method_exists($tweets, 'links'))
        <div>
            {{ $tweets->links() }}
        </div>
    @endif
</section>
