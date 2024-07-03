<aside class="p-6 w-1/6">
    <ul class="flex flex-col gap-3 text-lg font-medium">
        <li>
            <a href="/tweets">Home</a>
        </li>
        <li>
            <a href="/explore">Explore</a>
        </li>
        <li>
            <a href="{{ auth()->user()->path() }}">Profile</a>
        </li>
        <li>
            <form action="/logout" method="POST">
                <x-button>Logout</x-button>
            </form>
        </li>
    </ul>
</aside>
