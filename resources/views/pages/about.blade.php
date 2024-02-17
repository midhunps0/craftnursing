<x-easyadmin::guest-layout>
    <div class="items-center">
        <header>
            <nav>
                    <!-- < navbar for smallscreen > -->
                <div class="flex flex-row md:flex flex-col">
                    <x-header-top-component/>
                        
                        <div class="flex flex-row">
                            <div class=" pt-2 pl-3.5 w-1/3">
                                <img src="{{url('/images/Craft school of nursing logo.png')}}" class="h-14 w-12" alt="logo"/>
                            </div> 
                            <div class="md:block md:flex hidden md:items-center md:w-2/3 md:text-left md:text-base md:space-x-12 font-questrial font-thin 
                                        lg:block lg:items-center lg:mt-4 lg:text-lg lg:space-x-16
                                        xl:block xl:mt-6 xl:item-center xl:text-xl xl:space-x-20
                                        2xl:block 2xl:text-2xl 2xl:space-x-24">
                                <a class="" @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'}); console.log('event dispatched');">Home</a>
                                <a class="text-teal font-bold underline" @click="$dispatch('linkaction', {link: '{{route('about')}}', route: 'about'}); console.log('event dispatched');">About Us</a>
                                <a class="" @click="$dispatch('linkaction', {link: '{{route('courses')}}', route: 'courses'}); console.log('event dispatched');">Courses</a>
                                <a class="" @click="$dispatch('linkaction', {link: '{{route('gallery')}}', route: 'gallery'}); console.log('event dispatched');">Gallery</a>
                                <a class="" @click="$dispatch('linkaction', {link: '{{route('contact')}}', route: 'contact'}); console.log('event dispatched');">Contact</a> 
                            </div>
                            <div x-data="{ open : false }" class="pt-3 items-center text-right w-2/3 md:hidden items-center ">
                                <button @click="open = !open" class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-4 mr-3 " viewBox="0 0 448 512">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
                                    </svg>
                                </button>
                                <div x-show="open" class="lg:hidden md:hidden xl:hidden font-questrial">
                                    <ul class="bg-white mt-2 p-4 ">
                                        <li><a class="text-sm" @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'}); console.log('event dispatched');">Home</a></li>
                                        <li><a class="text-sm" @click="$dispatch('linkaction', {link: '{{route('about')}}', route: 'about'}); console.log('event dispatched');">About Us</a></li>
                                        <li><a class="text-sm" @click="$dispatch('linkaction', {link: '{{route('courses')}}', route: 'courses'}); console.log('event dispatched');">Courses</a></li>
                                        <li><a class="text-sm" @click="$dispatch('linkaction', {link: '{{route('gallery')}}', route: 'gallery'}); console.log('event dispatched');">Gallery</a></li>
                                        <li><a class="text-sm" @click="$dispatch('linkaction', {link: '{{route('contact')}}', route: 'contact'}); console.log('event dispatched');">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div> 
            </nav>
        </header>

        <div>
            <div class="relative">
                <img src="{{url('/images/hospital1.png')}}" class="lg:w-full lg:bg-cover hidden lg:block " alt="image">
                <img src="{{url('/images/about1phn.png')}}" class=" w-full  bg-cover lg:hidden" alt="image">
                <div class="absolute inset-0 overflow-hidden  bg-gradient-to-r from-secondary/40 to-accent/50">
                    <div class="mt-28 ml-14 md:mt-48 md:ml-20 lg:mt-24 xl:mt-28 2xl:mt-40">
                        <div class=""><h class="text-white text-sm md:text-xl md:px-2 md:py-2 lg:text-base 2xl:text-lg outline outline-white outline-1 font-bold font-inter lg:px-2 lg:py-2  pt-1 pb-1  pl-1 pr-1">WELCOME TO CRAFT SCHOOL OF NURSING</h></div>
                        <p class=" text-left text-white text-4xl mt-10 sm:text-6xl md:mt-14  lg:text-7xl md:text-8xl 2xl:text-8xl lg:leading-tight font-black font-gothic mr-10 lg:mt-8 ">About Us</p>
                        <div class="lg:mr-96 lg:pr-4"><p class=" text-left text-white text-sm sm:text-lg md:text-xl lg:text-base xl:text-lg 2xl:text-2xl lg:mt-0 xl:mt-8 2xl:mt-12 font-gothic mt-12 md:mt-20 font-light  mr-24 lg:mr-0 lg:text-lg lg:font-normal lg:leading-6" >It is a long established fact that a reader will be distracted 
                                by the readable content of a page when looking at its layout. The point of using Lorepwdm Ipsum
                                is that it has a more-or-less normal distribution f letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="text-left">
                <div class="mt-6 md:mt-10 mb-4 lg:mt-14 lg:mb-14 lg:ml-16 lg:mr-16 2xl:mt-20 2xl:ml-20 2xl:mr-20">
                    <h class="text-teal font-inter font-bold text-sm sm:text-base md:text-2xl lg:text-3xl 2xl:text-4xl lg:text-left ">WELCOME TO CRAFT SCHOOL OF NURSING</h>
                    <div class="mt-4 mb-4 2xl:mt-6 ">
                        <x-page-component :content="'The  CRAFT School of Nursing believes that excellence in professional nursing education is achieved  through a curriculum , which unifies the essential phenomena 
                        of interest in nursing : the concept of nursing , health , person and environment . the  school accepts that professional nursing education at 
                        it’s best in an interactive process by which students and teachers , teach and learn from each other in an academic climate of mutual respect and caring .'" />
                        <x-page-component :content="'The institution believes  that accepting responsibilities for  nurturing  learners focusing on developing  with the competencies of 
                        care giver , critical thinker , communicator , leader , manager ,teacher  and researcher are essential for the lifelong personal growth and development of students.'"/>
                    </div>
                </div>
            </div>
        </div>

        <div>
        <x-footer-component/> 
        </div>
    
    </div>
</x-easyadmin::guest-layout>
