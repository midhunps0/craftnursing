@props(['cardtitle', 'cardcontent', 'route', 'route_key','src','image'])
<div>
    <div class="card-component">
        <div class="max-w-sm  mx-auto xl:mx-0 xl:ml-6 bg-white shadow-lg overflow-hidden mt-4 md:mt-8 lg:mt-4 mb-6">
            <div>
                <p class="bg-teal text-white text-2xl md:text-3xl 2xl:text-3xl font-extrabold text-center font-inter px-2 py-3 lg:text-2xl">{{$cardtitle}}</p>
            </div>
            <div x-data="{zoomed:false}">
            <img class="w-full h-auto object-cover cursor-pointer" src="{{ $src }}" alt="Nursing student image" x-on:click="zoomed = !zoomed" >
            <div class=" flex justify-end " x-on:click="zoomed = !zoomed"><svg xmlns="http://www.w3.org/2000/svg" class="hidden md:block h-5 w-5 fill-current text-white relative stroke-3 -mt-4  p-px p-py rounded-md cursor-pointer" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM184 296c0 13.3 10.7 24 24 24s24-10.7 24-24V232h64c13.3 0 24-10.7 24-24s-10.7-24-24-24H232V120c0-13.3-10.7-24-24-24s-24 10.7-24 24v64H120c-13.3 0-24 10.7-24 24s10.7 24 24 24h64v64z"/></svg></div>
            <div x-show="zoomed ">
                <div class="hidden md:block w-screen h-screen inset-0  fixed z-40 bg-black/80 border border-teal ">
                <div class=" flex justify-end "><button class="bg-teal p-4 text-white text-lg font-bold z-70 cursor-pointer" x-show="zoomed" x-on:click="zoomed = false">X</button></div>
                    <div class="h-screen flex justify-center items-center">
                        <div class="">
                            <img class="w-full h-auto" src="{{ $image }}" alt="Nursing student image" >
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            </div>
            <div class="px-4 py-4 mt-2 mb-4">
                <p class="text-sm text-justify md:text-sm 2xl:text-base font-extralight text-black font-inter lg:text-sm lg:text-justify">
                    {{$cardcontent}}
                </p>
            </div>
            
        </div>
    </div>
</div>