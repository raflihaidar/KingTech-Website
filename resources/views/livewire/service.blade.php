<section class="sm:w-[87vw] w-[90%] mx-auto mb-48 selection:bg-custom-2 selection:text-white" id="layanan">
    <livewire:title-section title="Layanan kami"/>
    <section class="flex sm:flex-row flex-col-reverse gap-y-5 items-center justify-between w-full mt-5">
        <section class="sm:w-1/2 w-full grid gap-y-8">
            @foreach ($serviceList as $index => $service)
            <div
                @mouseenter="rotated = true"
                @mouseleave="rotated = false"
                @click="rotated = !rotated"
                wire:click="setActiveService({{ $index }})"
                wire:key="index"
                @class([
                    'sm:w-[32.8rem] w-full overflow-y-scroll px-6 py-3 rounded-[20px] flex justify-between items-center cursor-pointer border transition-colors duration-300',
                    'border-custom-2 border-2 border-opacity-100 text-custom-2' => $activeServiceIndex === $index || ($activeServiceIndex === null && $index === 0),
                    'border-black border-opacity-[0.3]' => $activeServiceIndex !== $index && $activeServiceIndex !== null,
                ])
            >
                <p class="font-bold text-xl text-custom-2">{{$service["title"]}}</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 24 24"
                    x-bind:class="activeServiceIndex === {{ $index }} ? 'text-custom-2' : 'text-black opacity-30'">
                    <path fill="currentColor" d="M12 15.289L15.288 12L12 8.711l-.688.689l2.1 2.1H8.5v1h4.912l-2.1 2.1zM12.003 21q-1.867 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M12 20q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8"/>
                </svg>
            </div>

            @endforeach
        </section>
        <article
            class="sm:w-[34.5rem] w-full h-[28.3rem] rounded-3xl border-2 border-custom-2 p-5 overflow-y-auto max-h-[28.3rem]"

        >
            @if($activeService ??= $serviceList[0])
            <figure class="rounded-[20px] h-[7.75rem]">
                    <img class="h-full object-cover w-full rounded-xl" src="{{ asset($activeService['image']) }}" alt="gambar {{$activeService['title']}}">
                </figure>
                <h3 class="text-custom-2 font-bold text-2xl my-5">{{$activeService["title"]}}</h3>
                <p class="text-base text-justify">
                    {{$activeService["description"]}}
                </p>
            @endif
        </article>
    </section>
</section>
