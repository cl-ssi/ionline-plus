<x-filament-widgets::widget>
    <x-filament::section>
        <div class="p-0" x-data="{ activeSlide: 0, slides: @js($newsItems), next() { this.activeSlide = (this.activeSlide + 1) % this.slides.length; }, previous() { this.activeSlide = (this.activeSlide + this.slides.length - 1) % this.slides.length; } }">
            <div class="flex overflow-hidden relative">
                <template x-for="(slide, index) in slides" :key="index">
                    <img :src="slide.url" class="w-full h-64 object-cover transition-transform duration-500 ease-in-out" x-show="activeSlide === index" style="display: none;">
                </template>
            </div>
            <div class="flex justify-center space-x-2 mt-0">
                <template x-for="(slide, index) in slides" :key="index">
                    <button
                        class="w-2 h-2 bg-gray-400 rounded-full"
                        :class="{ 'bg-blue-500': activeSlide === index }"
                        @click="activeSlide = index"></button>
                </template>
            </div>
            <!-- Navigation buttons -->
            <div class="absolute inset-y-0 left-0 flex items-center z-10">
                <button @click="previous()" class="bg-white bg-opacity-75 p-2 rounded-full text-black">
                    &#9664; <!-- Left arrow -->
                </button>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center z-10">
                <button @click="next()" class="bg-white bg-opacity-75 p-5 rounded-full text-black">
                    &#9654; <!-- Right arrow -->
                </button>
            </div>
        
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
