<div class="flex gap-3">
    <form method="POST" action="{{ route('likes.store', $tweet) }}">
        @csrf
        <button type="submit">
            <div
                class="flex gap-2 {{ $tweet->isLikedBy(current_user()) ? 'text-blue-400' : 'text-gray-400' }} bg-gray-100 px-2 py-0.5 rounded-full">
                <i class="fa-solid fa-thumbs-up"></i>
                <span>{{ $tweet->likes }}</span>
            </div>
        </button>
    </form>

    <form method="POST" action="{{ route('likes.destroy', $tweet) }}">
        @csrf
        @method('DELETE')
        <button type="submit">
            <div
                class="flex gap-2 {{ $tweet->isDislikedBy(current_user()) ? 'text-blue-400' : 'text-gray-400' }}  bg-gray-100 px-2 py-0.5 rounded-full">
                <i class="fa-solid fa-thumbs-down"></i>
                <span>{{ $tweet->dislikes }}</span>
            </div>
        </button>
    </form>
</div>
