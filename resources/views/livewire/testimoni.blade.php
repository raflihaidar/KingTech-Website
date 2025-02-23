<section class="w-full h-auto bg-custom-2 bg-opacity-60 text-center flex justify-center items-center py-10 px-4">
    <section class="w-full mx-auto">
        <header class="text-xl sm:text-2xl font-bold mb-6 sm:mb-10">
            <h2>Apa Kata Mereka?</h2>
        </header>

        <div x-data="{
            testimonials: @js($testimonials),
            currentIndex: 0,
            next() { this.currentIndex = (this.currentIndex + 1) % this.testimonials.length; },
            prev() { this.currentIndex = (this.currentIndex === 0) ? this.testimonials.length - 1 : this.currentIndex - 1; }
        }">
            <section class="w-full sm:w-[53.5rem] mx-auto relative">
                <!-- Tombol Prev -->
                <button @click.prevent="prev()"
                    class="bg-custom-2 absolute left-2 sm:left-0 -translate-y-1/2 top-1/2 w-10 h-10 sm:w-fit sm:h-fit p-2 sm:p-4 rounded-full cursor-pointer flex items-center justify-center z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 sm:w-8 sm:h-8" viewBox="0 0 24 24">
                        <path fill="black" d="M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42a.996.996 0 0 0-1.41 0l-6.59 6.59a.996.996 0 0 0 0 1.41l6.59 6.59a.996.996 0 1 0 1.41-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1 1-1"/>
                    </svg>
                </button>

                <!-- Testimoni -->
                <section class="relative overflow-hidden w-full sm:w-[40.3rem] mx-auto h-auto sm:h-[20rem] flex items-center justify-center">
                    <div class="flex transition-transform duration-700 ease-in-out"
                        :style="'transform: translateX(-' + (currentIndex * 100) + '%)'">
                        <template x-for="(testimonial, index) in testimonials" :key="index">
                            <div class="min-w-full flex flex-col items-center justify-center px-4 sm:px-6">
                                <p class="text-center text-sm sm:text-lg max-w-[20rem] sm:max-w-[36rem]" x-text="testimonial.text"></p>
                                <section class="flex items-center gap-x-3 sm:gap-x-5 mt-6 sm:mt-10">
                                    <figure class="w-12 h-12 sm:w-[3.75rem] sm:h-[3.75rem] border border-black border-opacity-[0.3] rounded-full overflow-hidden flex items-center justify-center">
                                        <img :src="testimonial.img" alt="" class="w-full h-full object-cover">
                                    </figure>
                                    <div>
                                        <h4 class="font-medium text-base sm:text-[1.25rem]" x-text="testimonial.name"></h4>
                                        <p class="text-sm sm:text-base text-gray-600" x-text="testimonial.company"></p>
                                    </div>
                                </section>
                            </div>
                        </template>
                    </div>
                </section>

                <!-- Tombol Next -->
                <button @click="next()"
                    class="bg-custom-2 absolute right-2 sm:right-0 -translate-y-1/2 top-1/2 w-10 h-10 sm:w-fit sm:h-fit p-2 sm:p-4 rounded-full cursor-pointer flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 sm:w-8 sm:h-8" viewBox="0 0 24 24">
                        <path fill="black" d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42s1.02.39 1.41 0l6.59-6.59a.996.996 0 0 0 0-1.41l-6.58-6.6a.996.996 0 1 0-1.41 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45-1 1-1"/>
                    </svg>
                </button>
            </section>

            <!-- Indikator -->
            <section class="flex justify-center gap-2 mt-6">
                <template x-for="(testimonial, index) in testimonials" :key="index">
                    <div @click="currentIndex = index"
                        class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full cursor-pointer transition-all duration-300"
                        :class="currentIndex === index ? 'bg-custom-2 scale-125' : 'bg-gray-400'">
                    </div>
                </template>
            </section>
        </div>
    </section>
</section>
