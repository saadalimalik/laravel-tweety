<section class="p-5 flex flex-col gap-4">
    @foreach($tweets as $tweet)
        <x-tweet :$tweet></x-tweet>
    @endforeach
</section>
