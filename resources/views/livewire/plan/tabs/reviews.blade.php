<div>
    <ul role="list" class="divide-y divide-gray-100">
        @foreach ($reviews as $review)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ $review->profile_photo_path }}" alt="Review User Avater">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $review->user->name ?? 'Anonymous'}} </p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $review->content }}</p>
                    </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <div class="flex items-center">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $review->rating)
                                <!-- Full Star -->
                                <svg class="w-4 h-4 text-yellow-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.54L.491 7.41l6.564-.955L10 1l2.945 5.455 6.564.955-4.754 4.14 1.123 6.54z"/>
                                </svg>
                            @else
                                <!-- Empty Star -->
                                <svg class="w-4 h-4 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.54L.491 7.41l6.564-.955L10 1l2.945 5.455 6.564.955-4.754 4.14 1.123 6.54z"/>
                                </svg>
                            @endif
                        @endfor
                    </div>
                    <p class="mt-1 text-xs leading-5 text-gray-500"><time datetime="{{ $review->created_at->format('d M Y') }}">{{ $review->created_at->format('d M Y') }}</time></p>
                </div>
            </li>
        @endforeach
    </ul>
</div>
