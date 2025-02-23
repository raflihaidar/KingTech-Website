<section class="w-[87%] mx-auto my-20" id="portofolio">
    <div class="w-fit block mx-auto">
        <livewire:title-section title="Portofolio"/>
    </div>
    <section x-data="{ activeTab: 'All' }">
        <ul class="flex justify-center gap-10 mb-10 sm:text-base text-sm">
            <li @click="activeTab = 'All'; $wire.setActivePortfolio('All')"
                class="cursor-pointer transition-colors  hover:text-custom-2"
                :class="activeTab === 'All' ? 'text-custom-2 font-semibold' : 'text-black'">
                All Projects
            </li>
            <li @click="activeTab = 'Web'; $wire.setActivePortfolio('Web')"
                class="cursor-pointer transition-colors  hover:text-custom-2"
                :class="activeTab === 'Web' ? 'text-custom-2 font-semibold' : 'text-black'">
                Web
            </li>
            <!-- <li @click="activeTab = 'Mobile'; $wire.setActivePortfolio('Mobile')"
                class="cursor-pointer transition-colors duration-300"
                :class="activeTab === 'Mobile' ? 'text-custom-2 font-semibold' : 'text-black'">
                Mobile
            </li>
            <li @click="activeTab = 'AI'; $wire.setActivePortfolio('AI')"
                class="cursor-pointer transition-colors duration-300"
                :class="activeTab === 'AI' ? 'text-custom-2 font-semibold' : 'text-black'">
                AI
            </li>
            <li @click="activeTab = 'IoT'; $wire.setActivePortfolio('IoT')"
                class="cursor-pointer transition-colors duration-300"
                :class="activeTab === 'IoT' ? 'text-custom-2 font-semibold' : 'text-black'">
                IoT
            </li>
            <li @click="activeTab = 'Networks'; $wire.setActivePortfolio('Networks')"
                class="cursor-pointer transition-colors duration-300"
                :class="activeTab === 'Networks' ? 'text-custom-2 font-semibold' : 'text-black'">
                Networks
            </li> -->
        </ul>
    </section>
    <section class="flex flex-col sm:flex-row justify-center gap-10  items-center mx-auto">
        @foreach ($portfolioList as $index => $item)
            <figure x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false"
                class="sm:w-[15.6rem] gap-y-3 w-full h-[15.6rem] relative cursor-pointer">
                <img class="w-full h-full rounded-2xl object-cover" src="{{$item['image']}}" alt="gambar {{$item['title']}}">

                <figcaption x-show="hover" x-transition
                    class="bg-custom-2 bg-opacity-80 w-full h-1/2 absolute bottom-0 z-10 rounded-b-2xl flex justify-between p-3">
                    <section class="text-white">
                        <h4 class="font-bold text-base cursor-pointer">{{$item["title"]}}</h4>
                        <p class="cursor-pointer text-sm">{{$item["category"]}}</p>
                    </section>
                    <section class="cursor-pointer">
                        <a href="{{$item["url"]}}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24">
                                <g fill="white">
                                    <path d="m14.828 12l1.415 1.414l2.828-2.828a4 4 0 0 0-5.657-5.657l-2.828 2.828L12 9.172l2.828-2.829a2 2 0 1 1 2.829 2.829zM12 14.829l1.414 1.414l-2.828 2.828a4 4 0 0 1-5.657-5.657l2.828-2.828L9.172 12l-2.829 2.829a2 2 0 1 0 2.829 2.828z"/>
                                    <path d="M14.829 10.586a1 1 0 0 0-1.415-1.415l-4.242 4.243a1 1 0 1 0 1.414 1.414z"/>
                                </g>
                            </svg>
                        </a>
                    </section>
                </figcaption>
            </figure>
        @endforeach
    </section>
</section>
