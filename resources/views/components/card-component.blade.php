<div>
    <div class="card-component">
        <div class="max-w-sm mx-auto xl:mx-0 xl:ml-6 bg-white shadow-lg overflow-hidden mt-4 md:mt-8 lg:mt-4 mb-10">
            <div>
                <p class="bg-teal text-white text-2xl md:text-3xl 2xl:text-3xl font-extrabold text-center font-inter px-2 py-3 lg:text-2xl">{{$cardtitle}}</p>
            </div>
            <img class="w-full object-cover" src="{{ url('/images/4.jpg') }}" alt="Card image">
            <div class="px-4 py-4 mt-2">
                <p class="text-sm text-justify md:text-sm 2xl:text-base font-extralight text-black font-inter lg:text-sm lg:text-justify">
                    {{$cardcontent}}
                </p>
            </div>
            <div class="px-6 pt-4 pb-6 mb-2">
                <button class="text-white bg-teal px-4 py-2 text-base md:text-lg 2xl:text-lg lg:text-base font-bold font-inter"><a href="{{ $clickaction }}">Learn more</a></button>
            </div>
        </div>
    </div>
</div>