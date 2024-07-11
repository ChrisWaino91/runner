<section id="my-plans" class="w-3/4 mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
    @foreach ($plans as $plan)
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="{{ $plan->url }}">
                @livewire('plans.image', ['plan' => $plan], key($plan->id))
                <div class="px-4 py-3 w-72">
                    @livewire('plans.level', ['plan' => $plan], key($plan->id))
                    @livewire('plans.title', ['plan' => $plan], key($plan->id))
                    @livewire('plans.pricing', ['plan' => $plan], key($plan->id))
                </div>
            </a>
        </div>
    @endforeach
</section>
