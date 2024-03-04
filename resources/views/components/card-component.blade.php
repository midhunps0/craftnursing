@props(['cardtitle', 'cardcontent', 'route', 'route_key','src','image'])
<div>
    <div class="card-component">
        <div class="max-w-sm  mx-auto xl:mx-0 xl:ml-6 bg-white shadow-lg overflow-hidden mt-4 md:mt-8 lg:mt-4 mb-10">
            <div>
                <p class="bg-teal text-white text-2xl md:text-3xl 2xl:text-3xl font-extrabold text-center font-inter px-2 py-3 lg:text-2xl">{{$cardtitle}}</p>
            </div>
            <div x-data="{zoomed:false}">
            <img class="w-full object-cover" src="{{ $src }}" alt="Card image" x-on:click="zoomed = !zoomed" >
            <div x-show="zoomed ">
                <div class="hidden md:block w-screen h-screen inset-0  fixed z-40 bg-base-100/80 border border-teal ">
                <button class="bg-teal p-2 text-white z-70 right-0" x-show="zoomed" x-on:click="zoomed = false">X</button>
                    <div class="h-screen flex justify-center items-center">
                        <div class="">
                            <img class="w-full" src="{{ $image }}" alt="Card image" >
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            </div>
            <div class="px-4 py-4 mt-2">
                <p class="text-sm text-justify md:text-sm 2xl:text-base font-extralight text-black font-inter lg:text-sm lg:text-justify">
                    {{$cardcontent}}
                </p>
            </div>
            <div class="px-6 pt-4 pb-6 mb-2">
                <a  class="cursor-pointer text-white bg-teal px-4 py-2 text-base md:text-lg 2xl:text-lg lg:text-base font-bold font-inter" @click.prevent.stop="$dispatch('linkaction', {route: '{{$route}}', link: '{{route($route,['id' => $route_key])}}'});" >Learn more</a>
            </div>
        </div>
    </div>
</div>