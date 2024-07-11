<div class="my-4">
    <h6>Features:</h6>
    <ul class="list-disc list-inside text-gray-600 mt-2">
        @foreach ($plan->features as $feature)
            <li>{{ $feature }}</li>
        @endforeach
    </ul>
</div>
