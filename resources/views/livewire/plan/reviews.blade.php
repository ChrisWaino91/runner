@php
    $averageRating = round($plan->averageRating() * 2) / 2;
    $fullStars = floor($averageRating);
    $halfStar = $averageRating - $fullStars >= 0.5;
@endphp

<div class="my-6">
    <div class="flex items-center">
        @for ($i = 1; $i <= 5; $i++)
            @if ($i <= $fullStars)
                <!-- Full Star -->
                <svg class="w-4 h-4 text-yellow-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.123-6.54L.491 7.41l6.564-.955L10 1l2.945 5.455 6.564.955-4.754 4.14 1.123 6.54z"/>
                </svg>
            @elseif ($i == $fullStars + 1 && $halfStar)
                <!-- Half Star -->
                <svg class="w-4 h-4 text-yellow-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <defs>
                        <linearGradient id="half">
                            <stop offset="50%" stop-color="currentColor"/>
                            <stop offset="50%" stop-color="transparent"/>
                        </linearGradient>
                    </defs>
                    <path fill="url(#half)" d="M10 15l-5.878 3.09 1.123-6.54L.491 7.41l6.564-.955L10 1l2.945 5.455 6.564.955-4.754 4.14 1.123 6.54z"/>
                </svg>
            @else
                <!-- Empty Star -->
                <svg class="w-4 h-4 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.123-6.54L.491 7.41l6.564-.955L10 1l2.945 5.455 6.564.955-4.754 4.14 1.123 6.54z"/>
                </svg>
            @endif
        @endfor
        <span class="text-gray-600 ml-4">{{ $plan->reviews->count() }} Reviews</span>
    </div>
</div>
