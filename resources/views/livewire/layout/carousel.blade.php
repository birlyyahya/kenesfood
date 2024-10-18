<div x-data="{
    slides: [{
            imgSrc: 'https://kenesfood.com/resource/assets-frontend/dist/banner/web_Oktober_praktis_(1).png',
            imgAlt: 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',
        },
        {
            imgSrc: 'https://kenesfood.com/resource/assets-frontend/dist/banner/web.png',
            imgAlt: 'Vibrant abstract painting with swirling red, yellow, and pink hues on a canvas.',
        },
        {
            imgSrc: 'https://kenesfood.com/resource/assets-frontend/dist/banner/WEB__ROTIBITES.png',
            imgAlt: 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',
        },
    ],
     autoplayIntervalTime: 3000,
    autoplayInterval: null,
    currentSlideIndex: 1,
    previous() {
        if (this.currentSlideIndex > 1) {
            this.currentSlideIndex = this.currentSlideIndex - 1
        } else {
            // If it's the first slide, go to the last slide
            this.currentSlideIndex = this.slides.length
        }
    },
    next() {
        if (this.currentSlideIndex < this.slides.length) {
            this.currentSlideIndex = this.currentSlideIndex + 1
        } else {
            // If it's the last slide, go to the first slide
            this.currentSlideIndex = 1
        }
    },
    autoplay() {
        this.autoplayInterval = setInterval(() => {
            if (!this.isPaused) {
                this.next()
            }
        }, this.autoplayIntervalTime)
    },
    // Updates interval time
    setAutoplayInterval(newIntervalTime) {
        clearInterval(this.autoplayInterval)
        this.autoplayIntervalTime = newIntervalTime
        this.autoplay()
    },
}" x-init="autoplay" class="relative w-full overflow-hidden">

    <!-- previous button -->
    <button type="button"
        class="absolute z-20 flex items-center justify-center p-2 transition -translate-y-1/2 rounded-full left-5 top-1/2 bg-white/40 text-neutral-600 hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:outline-offset-0 dark:bg-neutral-950/40 dark:text-neutral-300 dark:hover:bg-neutral-950/60 dark:focus-visible:outline-white"
        aria-label="previous slide" x-on:click="previous()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3"
            class="size-5 md:size-6 pr-0.5" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </button>

    <!-- next button -->
    <button type="button"
        class="absolute z-20 flex items-center justify-center p-2 transition -translate-y-1/2 rounded-full right-5 top-1/2 bg-white/40 text-neutral-600 hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:outline-offset-0 dark:bg-neutral-950/40 dark:text-neutral-300 dark:hover:bg-neutral-950/60 dark:focus-visible:outline-white"
        aria-label="next slide" x-on:click="next()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
            stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </button>

    <!-- slides -->
    <!-- Change min-h-[50svh] to your preferred height size -->
    <div class="relative min-h-60 md:min-h-[65svh] lg:min-h-[70svh] md:w-full">
        <template x-for="(slide, index) in slides">
            <div x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>
                <img class="absolute inset-0 w-full h-full object-fit md:object-fit text-neutral-600 dark:text-neutral-300"
                    x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
            </div>
        </template>
    </div>

    <!-- indicators -->
    <div class="absolute rounded-md bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 bg-white/75 px-1.5 py-1 md:px-2 dark:bg-neutral-950/75"
        role="group" aria-label="slides">
        <template x-for="(slide, index) in slides">
            <button class="transition rounded-full cursor-pointer size-2 bg-neutral-600 dark:bg-neutral-300"
                x-on:click="currentSlideIndex = index + 1"
                x-bind:class="[currentSlideIndex === index + 1 ? 'bg-neutral-600 dark:bg-neutral-300' :
                    'bg-neutral-600/50 dark:bg-neutral-300/50'
                ]"
                x-bind:aria-label="'slide ' + (index + 1)"></button>
        </template>
    </div>
</div>
