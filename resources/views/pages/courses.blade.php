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
                            <a class="" @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'}); console.log('event dispatched');" >Home</a>
                            <a class="" @click="$dispatch('linkaction', {link: '{{route('about')}}', route: 'about'}); console.log('event dispatched');">About Us</a>
                            <a class="text-teal font-bold underline" @click="$dispatch('linkaction', {link: '{{route('courses')}}', route: 'courses'}); console.log('event dispatched');">Courses</a>
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
            <div class="relative mt-2">
                <img src="{{url('/images/coursesd1.png')}}" class="lg:w-full lg:bg-cover hidden lg:block " alt="image">
                <img src="{{url('/images/coursesm1.png')}}" class=" w-full  bg-cover lg:hidden" alt="image">
                <div class="absolute inset-0 overflow-hidden  bg-gradient-to-r from-secondary/40 to-accent/10">
                    <div class="mt-36  ml-6 sm:ml-10 sm:mt-48 md:mt-72 lg:mt-44 xl:mt-52 xl:ml-20 2xl:mt-72">
                        <div class=""><h class="text-white text-sm sm:text-base md:text-base lg:text-lg outline outline-white outline-1 font-normal lg:font-bold font-inter lg:px-2 lg:py-2  pt-1 pb-1 pl-1 pr-1">ACADEMICS</h></div>
                        <p class="text-left text-white text-xl sm:text-2xl  md:text-4xl mt-4 md:mt-8 lg:text-5xl xl:text-6xl 2xl:text-7xl lg:leading-tight font-bold font-inter lg:mt-6 ">DIPLOMA IN GENERAL <br> NURSING & MIDWIFERY-3 YEARS</p>
                    </div>
                    
                </div>
            </div>
        </div>

        <div>
            <div class="mt-8 ml-4 md:mt-12 md:ml-8 lg:mt-14 lg:ml-12 xl:ml-14 2xl:ml-16">
                <h class="text-teal text-sm font-bold font-inter  sm:text-xl md:text-2xl lg:text-2xl xl:text-3xl 2xl:text-4xl ">DIPLOMA IN GENERAL NURSING & MIDWIFERY-3 YEARS</h><br>
                <div class="mt-2 lg:mt-6 md:mt-8"><h class="text-teal text-sm md:text-base font-bold font-inter lg:text-xl">WELCOME TO CRAFT SCHOOL OF NURSING</h></div>
            </div>

            <div class="flex flex-row ml-6 mt-4 md:ml-8 lg:ml-12 xl:ml-14 2xl:ml-16">
                <div class="items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 md:h-4 md:w-4 lg:h-5 lg:w-5  fill-teal" viewBox="0 0 512 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                </div>
                <div class="items-center">
                    <p class="text-sm md:text-base text-black font-semibold font-inter  ml-2 lg:text-lg">Course Overview</p>
                </div>
            </div>
            <div>
                <div class="mt-4 mb-4 ml-4 mr-4 lg:ml-14 lg:mr-14 2xl:mt-6 2xl:ml-16 2xl:mr-16 lg:space-y-4">
                    <x-page-component :content="'The course of General Nursing and Midwifery is of 3 years duration and according to the syllabus
                    laid down by INC and  the certificate  is provided  by  the  Kerala  Nurses and  midwives council. This 
                    initiative aims to facilitate admissions to various nursing  courses available in private nursing  school 
                    across the state . The GNM diploma course , spanning three years ,focuses on nursing and midwifery .  
                    '"/>
                    <x-page-component :content="'Individuals eligible for application have completed their 10 +2  education in  the science stream , with 
                    Physics , Chemistry , and Biology as the main subjects . The upcoming GNM admission cycle promises to 
                    be a gateway for enthusiastic  students to embark on a fulfilling journey in  the field of nursing and
                     healthcare .'"/>
                    <x-page-component :content="'The comprehensive program include a six month internship , making it an   integral part of 
                    curriculum and ensuring a holistic nursing education .  GNM admission for the year 2024 bring with it a 
                    set of noteworthy  highlights offering  , aspiring nursing professionals an opportunity to embark on a 
                    rewarding journey in the field of healthcare .'"/>
                </div>
            </div>
        </div>

        <div>
            <div>
                <div class=" ml-4 mr-4 md:ml-8 md:mr-8 md:mt-4 lg:mt-8 lg:ml-12 lg:mr-12 xl:mb-16 2xl:ml-16 2xl:mr-16 2xl:mt-12">
                    <table class="table ">
                        <!-- head -->
                        <thead>
                        <tr class="border border-teal bg-teal xl:text-xl font-bold">
                            
                            <th class="text-white text-sm">ASPECTS</th>
                            <th class="text-white text-sm">DETAILS</th>
                            
                        </tr>
                        </thead>
                        <tbody class="border border-teal/10 bg-teal/10 font-gothic">
                        <!-- row 1 -->
                        <tr class="md:text-base xl:text-lg">
                            
                            <td>Program Duration </td>
                            <td>Three – year diploma course , including a six month internship</td>
                           
                        </tr>
                        <!-- row 2 -->
                        <tr class="md:text-base xl:text-lg">
                            
                            <td>Admission Authority</td>
                            <td>Craft Hospital and Research Centre, Chandapura  , Kodungallur</td>
                        </tr>
                        <!-- row 3 -->
                        <tr class="md:text-base xl:text-lg">
                            
                            <td>Curriculum Focus</td>
                            <td>Comprehensive coverage of anatomy , physiology,nursing fundamentals ,and midwifery </td>
                        </tr>
                        <!-- row 4 -->
                        <tr class="md:text-base xl:text-lg">
                            
                            <td>Eligibility Criteria</td>
                            <td>Higher secondary education (10+2)in the science stream, with Physics, Chemistry ,and Biology as main subjects</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div>
        <x-footer-component/>
        </div>



    </div>
</x-easyadmin::guest-layout> 