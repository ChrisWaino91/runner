<section id="Plan" class="w-3/4 mx-auto mt-10 mb-5">

    <div class="md:flex md:space-x-8">
        <div class="md:w-1/2">
            @livewire('plan.image', ['plan' => $plan])
        </div>

        <div class="md:w-1/2 mt-4 md:mt-0">
            @livewire('plan.title', ['plan' => $plan])

            @livewire('plan.reviews', ['plan' => $plan])

            @livewire('plan.description', ['plan' => $plan])

            @livewire('plan.pricing', ['plan' => $plan])

            @if (!empty($plan->features))
                @livewire('plan.features', ['plan' => $plan])
            @endif

            @livewire('plan.purchase', ['plan' => $plan])

            @livewire('plan.confidence-builders', ['plan' => $plan])
        </div>
    </div>

    <div class="container mx-auto mt-10" x-data="{ activeTab: 'tab1' }">
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex border-b border-gray-200">
                <button
                    @click="activeTab = 'tab1'"
                    :class="{ 'border-b-2 border-blue-500': activeTab === 'tab1' }"
                    class="tab-button text-gray-600 py-2 px-4 block focus:outline-none"
                >
                    Plan Information
                </button>
                <button
                    @click="activeTab = 'tab2'"
                    :class="{ 'border-b-2 border-blue-500': activeTab === 'tab2' }"
                    class="tab-button text-gray-600 py-2 px-4 block focus:outline-none"
                >
                    Reviews
                </button>
            </div>

            <div x-show="activeTab === 'tab1'" class="tab-content p-4">
                @livewire('plan.tabs.long_description', ['plan' => $plan])
            </div>
            <div x-show="activeTab === 'tab2'" class="tab-content p-4">
                @livewire('plan.tabs.reviews', ['reviews' => $plan->reviews])
            </div>


</section>
