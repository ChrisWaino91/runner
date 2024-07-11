<div class="mt-6">
    <span class="text-gray-800 font-semibold text-xl">
    {{ $plan->sale_price }}
    </span>
    <span class="text-gray-600 ml-2">
        <del>
            {{ $plan->price }}
        </del>
    </span>
    <div class="text-green-500 my-2">
        {{ $plan->savings }}
    </div>
</div>
