@props(['title', 'content', 'route', 'route_key','src'])
<div class="news-card-component">
   <a class="cursor-pointer" @click.prevent.stop="$dispatch('linkaction',{route: '{{$route}}', link: '{{route($route,['id' => $route_key])}}'});"><div>
        <!-- <div>
            <p class="bg-teal text-white text-base  font-extrabold text-center font-inter px-2 py-3 ">More Article</p>
        </div> -->
        <div class="flex flex-row mt-2">
            <img class="w-1/3 object-cover" src="{{ $src }}" alt="Card image">
            <div class="ml-2">
                <h class="lg:text-center font-light lg:text-base 2xl:text-base xl:text-base font-inter text-black lg:text-base">{{$title}}</h>
                <p class="lg:mt-3 lg:text-justify font-extralight lg:text-sm 2xl:text-base xl:text-sm font-inter text-black lg:text-base">{{$content}}</p>
            </div>
        </div>
    </div></a>
</div>