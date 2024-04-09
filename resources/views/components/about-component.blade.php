@props(['title','content','src'=>''])
<div class="mt-3 lg:w-1/2 border border-teal/10 p-4 flex flex-col items-center gap-2 shadow">
    <h class="text-teal text-base md:text-xl ml-4 lg:ml-0 font-light">{{$title}}</h>
    <img src="{{$src}}" class="w-96"alt="">
    <p class="text-justify font-extralight  mb-2 text-sm md:text-base 2xl:text-base xl:text-base  mr-6 ml-6 font-inter text-black lg:text-base  lg:text-justify lg:font-extralight lg:ml-0   md:mt-6 lg:mt-0  ">{{$content}}</p>
</div>