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
                            <a class="cursor-pointer" @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'}); console.log('event dispatched');" >Home</a>
                            <a class="cursor-pointer" @click="$dispatch('linkaction', {link: '{{route('about')}}', route: 'about'}); console.log('event dispatched');">About Us</a>
                            <a class="cursor-pointer" @click="$dispatch('linkaction', {link: '{{route('courses')}}', route: 'courses'}); console.log('event dispatched');">Courses</a>
                            <a class="cursor-pointer text-teal font-bold underline" @click="$dispatch('linkaction', {link: '{{route('gallery')}}', route: 'gallery'}); console.log('event dispatched');">Gallery</a>
                            <a class="cursor-pointer" @click="$dispatch('linkaction', {link: '{{route('contact')}}', route: 'contact'}); console.log('event dispatched');">Contact</a> 
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
                                    <li><a class="text-sm cursor-pointer" @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'}); console.log('event dispatched');">Home</a></li>
                                    <li><a class="text-sm cursor-pointer" @click="$dispatch('linkaction', {link: '{{route('about')}}', route: 'about'}); console.log('event dispatched');">About Us</a></li>
                                    <li><a class="text-sm cursor-pointer" @click="$dispatch('linkaction', {link: '{{route('courses')}}', route: 'courses'}); console.log('event dispatched');">Courses</a></li>
                                    <li><a class="text-sm cursor-pointer" @click="$dispatch('linkaction', {link: '{{route('gallery')}}', route: 'gallery'}); console.log('event dispatched');">Gallery</a></li>
                                    <li><a class="text-sm cursor-pointer" @click="$dispatch('linkaction', {link: '{{route('contact')}}', route: 'contact'}); console.log('event dispatched');">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
               </div> 
            </nav>
        </header>

        <div>
            <div class="mt-6 ml-4 mr-4 md:mt-10 md:ml-6 md:mr-6 lg:ml-8 lg:mr-8 lg:mt-12 xl:mt-14 xl:ml-12 xl:mr-12 2xl:mt-16 2xl:ml-14 2xl:mr-14" >
            <div class=""><h class="text-xl font-semibold font-inter text-black md:text-3xl lg:text-6xl 2xl:text-7xl">News & Articles</h></div>
            <!-- <p class="text-sm text-justify font-extralight font-inter  mt-3 lg:text-base lg:mt-6 lg:leading-6 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctusnec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor
             sit amet, consectetur adipiscing elit. Ut elit tellus, luctusnec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur
              adipiscing elit. Ut elit tellus, luctusnec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,
             consectetur adipiscing elit. Ut elit tellus, luctusnec ullamcorper mattis, pulvinar dapibus leo.</p> -->
            </div>
        </div>

        <div>
            <div class="mt-12 mb-6 ml-4 md:ml-6 lg:ml-8 xl:ml-12 2xl:ml-14">
                <h class="text-sm font-inter font-extrabold text-align-center text-base-100 border border-teal bg-teal px-12 py-3 md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl">Advancing knowledge</h>
            </div>
            <!-- <div>
                <div class="ml-4 mr-4 md:ml-6 md:mr-6 lg:ml-8 lg:mr-8 lg:mt-20 xl:ml-12 2xl:ml-14">
                    <img src="{{url('/images/4.jpg')}}" class="bg-cover w-full lg:w-2/3 " alt="image">
                </div>
            </div> -->
        </div>

        <div>
            <!-- <div class="mt-4 mb-4 md:ml-6 md:mr-6 md:mt-10 lg:ml-8 lg:mr-8 lg:mt-12 xl:mt-14 xl:ml-12 xl:mr-12 2xl:mt-16 2xl:ml-14 2xl:mr-14 ">
                <x-page-component :content="'The  CRAFT School of Nursing believes that excellence in professional nursing education is achieved  through a curriculum , which unifies the essential phenomena 
                of interest in nursing : the concept of nursing , health , person and environment . the  school accepts that professional nursing education at 
                it’s best in an interactive process by which students and teachers , teach and learn from each other in an academic climate of mutual respect and caring .'" />
                <x-page-component :content="'The institution believes  that accepting responsibilities for  nurturing  learners focusing on developing  with the competencies of 
                care giver , critical thinker , communicator , leader , manager ,teacher  and researcher are essential for the lifelong personal growth and development of students.'"/>
            </div> -->
        </div>

        <div>
            <div class="hidden lg:block lg:flex flex-row md:mt-16 lg:space-x-4 lg:ml-3 lg:mr-3 2xl:ml-8 2xl:mr-8">
                <div class="lg:w-1/3"><x-card-component cardtitle="Advancing Knowledge" :cardcontent="'Embracing lifelong learning, nurses pursue advanced degrees, certifications, and specialized training to remain adaptable and responsive to evolving healthcare needs.'"/></div>
                <div class="lg:w-1/3"><x-card-component cardtitle="Advancing Knowledge" :cardcontent="'Nurses actively engage in interdisciplinary collaboration and knowledge exchange to enhance clinical practice and contribute to the advancement of healthcare innovations.'"/></div>
                <div class="lg:w-1/3"><x-card-component cardtitle="Advancing Knowledge" :cardcontent="'Nurses embrace technology and innovation, leveraging advanced tools and resources to stay informed, enhance clinical decision-making, and deliver evidence-based care.'"/></div>
            </div>
        </div>

        <div>
            <!-- <div class="carousel w-full lg:hidden sm:mt-6 "> -->
                <div id="slide1" class="carousel-item relative w-full ">
                    <div class="ml-4 md:ml-52 sm:ml-36"><x-card-component cardtitle="Advancing Knowledge" :cardcontent="'Embracing lifelong learning, nurses pursue advanced degrees, certifications, and specialized training to remain adaptable and responsive to evolving healthcare needs.'"/></div>
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <!-- <a href="#slide3" class="btn btn-circle ">❮</a> 
                        <a href="#slide2" class="btn btn-circle ">❯</a> -->
                    </div>
                </div>

                <div id="slide2" class="carousel-item relative w-full ">
                    <div class="ml-4 md:ml-52 sm:ml-36"><x-card-component cardtitle="Advancing Knowledge" :cardcontent="'Nurses actively engage in interdisciplinary collaboration and knowledge exchange to enhance clinical practice and contribute to the advancement of healthcare innovations.'"/></div>
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <!-- <a href="#slide1" class="btn btn-circle ">❮</a> 
                        <a href="#slide3" class="btn btn-circle ">❯</a> -->
                    </div>
                </div>

                <div id="slide3" class="carousel-item relative w-full ">
                    <div class="ml-4 md:ml-52 sm:ml-36"><x-card-component cardtitle="Advancing Knowledge" :cardcontent="'Nurses embrace technology and innovation, leveraging advanced tools and resources to stay informed, enhance clinical decision-making, and deliver evidence-based care.'"/></div>
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <!-- <a href="#slide2" class="btn btn-circle ">❮</a> 
                        <a href="#slide1" class="btn btn-circle ">❯</a> -->
                    </div>
                </div>

            <!-- </div> -->
        </div>

        <div>
        <x-footer-component/>
        </div>
    </div>
</x-easyadmin::guest-layout> 