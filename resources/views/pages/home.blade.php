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
                            <a class="cursor-pointer text-teal font-bold underline" @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'})" >Home</a>
                            <a class="cursor-pointer" @click="$dispatch('linkaction', {link: '{{route('about')}}', route: 'about'}); console.log('event dispatched');">About Us</a>
                            <a class="cursor-pointer" @click="$dispatch('linkaction', {link: '{{route('courses')}}', route: 'courses'}); console.log('event dispatched');">Courses</a>
                            <a class="cursor-pointer" @click="$dispatch('linkaction', {link: '{{route('gallery')}}', route: 'gallery'}); console.log('event dispatched');">Gallery</a>
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
                                    <li><a class="text-sm cursor-pointer" @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'})">Home</a></li>
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
            <div class="relative ">
                <img src="{{url('/images/1phn.png')}}" class=" w-full  bg-cover lg:hidden" alt="image">
                <img src="{{url('/images/1new.png')}}" class="lg:w-full lg:bg-cover hidden lg:block " alt="image">
                <div class="absolute inset-0 overflow-hidden  bg-gradient-to-r from-secondary/40 to-accent/20">
                    <div class="mt-12 ml-14 text-left sm:mt-20 md:mt-28 md:ml-20 lg:ml-14 xl:mt-36 2xl:mt-48">
                            <div class=""><h class="text-white text-xs font-inter outline outline-white outline-1 p-1 font-bold md:text-sm lg:text-lg">WELCOME TO CRAFT SCHOOL OF NURSING</h></div>
                            <p class=" text-left text-white font-inter text-2xl font-bold mr-10 mt-2 sm:text-3xl md:text-4xl lg:text-6xl lg:leading-12 xl:mt-6 xl:text-7xl 2xl:mt-4 2xl:text-8xl ">DIPLOMA IN GENERAL <br> NURSING & MIDWIFERY <br>3 YEARS</p>
                            <p class=" text-left text-white font-inter mt-4 text-xs font-arial mr-24 sm:text-sm md:text-base md:mt-6 lg:hidden" >General Nursing and Midwifery (GNM) is a diploma program that prepares individuals to become registered nurses (RNs) and midwives. It's a comprehensive course that covers various aspects of nursing, including medical-surgical nursing, pediatric nursing, psychiatric nursing, and obstetric nursing.</p>
                            
                            <button class="text-center flex items-center font-inter font-bold bg-teal text-white p-2 mt-2 sm:mt-6 md:mt-12 md:p-3 md:text-base md:text-lg lg:px-5 xl:text-xl xl:px-6 2xl:text-2xl 2xl:px-8 2xl:mt-20" type="button">
                                APPLY NOW
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 lg:h-5 lg:w-5 md:h-4 md:w-4 stroke-1 fill-base-100"viewBox="0 0 512 512">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/>
                                </svg>
                            </button>
                    </div>

                </div>
            </div>
        </div>

        <div>
            <div class="lg:flex flex-row-reverse lg:mt-8 ">
                <div>
                    <div class="mt-10 ml-6 mr-6 md:ml-10 md:mr-10 lg:ml-14 lg:mr-0 xl:ml-20">
                        <h class="text-xs text-black outline outline-1 p-px font-inter md:text-base md:px-1 md:p-py lg:text-base lg:font-light lg:p-px 2xl:text-xl 2xl:px-1">INTRODUCTION OUR CAMPUS</h><br>
                        <div class="mt-2"><h class="text-black text-base  font-medium font-inter md:text-xl">About CRAFT Hospital & Research Centre</h></div>
                        <div class="mt-2"><p class="text-black font-normal mr-2 font-inter text-xs md:text-sm lg:mr-4 xl:mr-8 ">CRAFT Hospital specialises in infertility treatment that houses a team of experts and
                            specialists who are dedicated in helping couples to combat and overcome infertility issues.</p>
                        </div>
                    </div>

                    <div class="ml-6 mr-10 mt-6 space-y-4  md:ml-10 lg:ml-12 lg:space-y-6 xl:ml-20 ">

                        <div class="flex flex-row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 lg:h-4 lg:w-4 md:h-4 md:w-4 lg:mt-1 fill-teal items-center" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                            </svg>
                            <p class="text-sm lg:text-sm md:text-sm xl:text-lg text-black font-inter font-semibold ml-1.5">Experienced Faculty</p>
                        </div>

                        <div class="flex flex-row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 lg:h-4 lg:w-4 md:h-4 md:w-4 lg:mt-1 fill-teal items-center" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                            </svg>
                            <p class="text-sm text-black lg:text-sm md:text-sm xl:text-lg font-inter font-semibold ml-1.5">Top-notch Infrastructure</p>
                        </div>

                        <div class="flex flex-row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 lg:h-4 lg:w-4 md:h-4 md:w-4 lg:mt-1 fill-teal items-center" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                            </svg>
                            <p class="text-sm text-black lg:text-sm md:text-sm xl:text-lg font-inter font-semibold ml-1.5">Placement Assistance</p>
                        </div>

                        <div class="lg:mt-8"><button class="text-center  md:mt-8 xl:mt-6 2xl:mt-8 2xl:text-xl font-inter lg:text-base md:text-base xl:text-lg lg:py-2 2xl:py-3 2xl:px-10 md:py-1.5 md:px-6 lg:ml-1 lg:px-8 font-semibold text-white mt-4 bg-teal text-sm p-2 mr-52" type="button">More About Us</button></div>
                    </div>
                </div>

                <div class="lg:w-1/2 ">
                    <div class="relative mt-2 ml-6 lg:mt-8 lg:flex flex-col ">
                        <img src="{{url('/images/2new.jpg')}}" class=" w-5/6 md:ml-6 lg:ml-2 lg:w-full  "alt="image">
                        <div class=" h-44 w-48 sm:h-48 sm:w-56 ml-40 border-t-4 border-teal -mt-36 mr-4 bg-base-100 opacity-80 shadow-xl lg:opacity-100 md:h-72 md:w-80 sm:ml-80 sm:-mt-44 md:ml-96 md:-mt-64 lg:flex justify-end lg:h-52 lg:w-56 lg:ml-0 lg:ml-52 lg:-mr-6 lg:-mt-40 xl:h-60 xl:w-72 xl:-mt-56 xl:ml-80 2xl:h-64 2xl:ml-96   ">
                            <div class="md:px-10 md:py-8 lg:px-2 lg:py-2">
                                <div class="mt-5 text-left ml-6 lg:ml-2 "><h class="font-bold font-inter text-black text-base sm:text-lg md:text-lg lg:text-lg">Established since<br> 1972</h></div>  
                                    <p class="font-thin font-inter text-left ml-6 mr-4  text-black lg:text-sm md:text-base text-xs sm:text-sm lg:mt-2 lg:ml-2">Our organization has been committed to providing exceptional care and services to our community for over five decades.</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 space-y-3 lg:flex flex-row lg:space-y-0 lg:mr-12 lg:ml-12 lg:border border-gray-400 lg:mt-16 ">
            <div class="lg:border border-gray-400  border-r lg:w-1/3 "><x-content-box title="Our Vision" :content="'Being a community of scholars and mentors guiding proffessional
                                nurses as nurse leaders and advanced practitioners commited to professional ideals and practicing meaningfully with a cultural competency in this increasingly technological 
                                health care system and communities constitutes our vision'"/></div>
            <div class="lg:border border-gray-400  border-r lg:w-1/3"><x-content-box title="Our Mission" :content="'The mission of CRAFT School of Nursing is providing quality nursing education
                                focusing on collaboration,critical reflection and active participation in self-education and creativity to meet the needs of clients throughout thier life-span.
                                We Emphasize on Professional nursing education synchronizing knowledge and theory,inquiry and research,leadership,nursing standards and quality professional practice.'"/></div>
            <div class="lg:border border-gray-400  border-r lg:w-1/3"><x-content-box title="Our History" :content="'We were one among the best 10 IVF centres pan India, in a survey conducted by The week in 2020.1st IUI centre of the state in 1990.
                                1st TESA-ICSI delivery in the state in 2000.1st delivery using slow embryo freezing technique in 2003.1st blastocyst transfer and delivery in 2004.India’s first vitrification of embryos and delivery reported on 2006.'"/></div>
        </div>

        <div>
            <div class="relative mt-4">
            <img src="{{url('/images/3 phn.png')}}"  class="w-full bg-cover lg:hidden"alt="image">
            <img src="{{url('/images/3n3.png')}}"  class="w-full bg-cover hidden lg:block"alt="image">
            <div class="absolute inset-0 overflow-hidden  bg-gradient-to-r from-cyan/100 to-teal/10 lg:bg-gradient-to-r from-cyan/80 to-teal/10">
            <div class="text-center mt-36 md:mt-72 lg:mt-28 xl:mt-40 2xl:mt-48"><h class="font-inter text-white text-xl md:text-4xl font-bold lg:text-4xl xl:text-5xl 2xl:text-6xl">"Save one life, you're a hero. Save<br> a hundred lives, you're a nurse."</h></div>
            <div class="lg:ml-20 lg:mr-20"><p class="font-inter text-white text-center text-xs mt-4 mr-10 ml-10 md:mr-20 md:ml-20 xl:mr-24 xl:ml-24 2xl:mr-44 2xl:ml-44 md:mt-12 md:text-base md:leading-8 lg:leading-7 lg:text-base xl:text-lg 2xl:text-xl lg:mt-6 ">
                        Nurses are healthcare professionals trained to provide compassionate, holistic care to individuals across the lifespan, encompassing physical, emotional, and psychological needs.
                        Their dedication and expertise make them essential pillars of the healthcare system, delivering high-quality, patient-centered care.</p></div>
            </div>
            </div>
        </div>

        

        <div>
            <div class="mt-8">
    <!-- maindiv -->
                <div class="lg:flex flex-row">
                    <!-- subdiv1 -->
                    <div class="lg:w-2/3 lg:ml-4">
                        <!-- sd11 -->
                        <div class="ml-4 md:ml-8">
                        <div class="mt-4"><h class=" text-black font-inter outline outline-1 font-normal text-sm md:text-base md:px-1 p-px lg:text-xl">ACADEMICS</h></div>   
                        <div class="mt-4 "><h class="text-black font-inter text-base md:text-lg font-semibold lg:text-3xl lg:fond-bold ">DIPLOMA IN GENERAL<br> NURSING & MIDWIFERY - 3 YEARS</h></div>
                        <p class="text-black font-inter text-xs md:text-sm 2xl:text-base font-extralight mt-4 mr-6 lg:text-sm lg:mt-4 lg:mr-0 lg:leading-6">The Diploma in General Nursing and Midwifery (GNM) program is a comprehensive course designed to equip individuals with the necessary skills and knowledge to provide holistic healthcare services. GNM not only focuses on nursing care but also emphasizes midwifery, which plays a vital role in maternal and child health.</p>
                        </div>
                        <!-- sd12 -->
                        <div class="lg:flex flex-row lg:mt-0">
                            <div>
                                <div class="flex ml-4 md:ml-8 mt-6 lg:mt-4 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 lg:h-5 lg:w-5 lg:mt-1 fill-teal" viewBox="0 0 512 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                    </svg>
                                
                                    <p class="text-lg text-black font-semibold font-inter ml-4 lg:text-lg">Curriculum Overview</p>
                                </div>
                                <p class="text-xs md:text-sm 2xl:text-base text-black font-extralight font-inter ml-6 md:ml-8 mt-6 lg:mt-4 mr-8 lg:mr-0  lg:text-sm">The curriculum of the Diploma in General Nursing and Midwifery (GNM) integrates theoretical learning and practical training in nursing care, midwifery practices, and clinical rotations across various healthcare settings.</p>
                            </div>
                            <div>
                                <div class="flex ml-4 md:ml-8 mt-6 lg:mt-4 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 lg:h-5 lg:w-5 lg:mt-1 fill-teal" viewBox="0 0 512 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                    </svg>
                                
                                    <p class="text-lg text-black font-semibold font-inter ml-4 lg:text-lg">Clinical Experience</p>
                                </div>
                                <p class="text-xs md:text-sm 2xl:text-base text-black font-extralight font-inter ml-6 md:ml-8 mt-6 lg:mt-4 mr-8 lg:mr-0  lg:text-sm">Clinical experience in GNM and midwifery involves hands-on training in various healthcare settings, encompassing direct patient care, obstetric procedures, and maternal-child health interventions.</p>
                                
                            </div>
                            
                        </div>
                    </div>
                    <!-- subdiv2 -->
                    <div class="mt-8 ml-4 mr-6 md:ml-8 md:mr-8 lg:w-2/4  lg:mt-14 lg:mr-4">
                        <img src="{{url('/images/5.jpg')}}" class="bg-cover"alt="image">
                    </div>  
                </div>
            </div>
            <div class="px-6 pt-4 pb-6 md:ml-4 md:mt-4 mb-2 lg:ml-8  lg:mt-2 xl:-mt-8 2xl:-mt-24 2xl:mb-16">
                <button class="text-white bg-teal md:px-6 md:py-2 lg:px-4 lg:py-2 p-1 px-2 -ml-2  text-base md:text-xl font-bold font-inter 2xl:text-xl 2xl:px-8 2xl:py-3">Learn more</button>
            </div>
        </div>

        <div>
            <div class="ml-4 mr-4 md:ml-8 md:mr-8 lg:flex flex-row">
                <div class="lg:w-1/3 lg:ml-4 2xl:ml-12">
                    <div class="mt-10 md:mt-16 "><h class="text-xs md:text-sm font-normal font-inter outline outline-1 p-1 lg:text-lg">Know More About Us</h></div>
                    <div class="mt-3 "><h class="text-xl md:text-2xl font-semibold font-inter text-black lg:font-bold lg:text-4xl">News & Articles</h></div>
                </div>
                <div class="lg:w-2/3 lg:mt-32">
                    <p class="mt-3 md:mt-5 text-black  text-xs md:text-sm font-light  font-inter lg:font-thin lg:text-base 2xl:text-lg">Stay updated on accreditation updates, curriculum enhancements, and faculty developments at leading nursing institutions, ensuring the highest standards of nursing education.</p>
                </div>
            </div>
        </div>

        <div>
            <div class="lg:flex flex-row md:mt-16 lg:space-x-4 lg:ml-3 lg:mr-3 2xl:ml-8 2xl:mr-8">
                <div class="lg:w-1/3 text-justify"><x-card-component cardtitle="Advancing Knowledge" :cardcontent="'Embracing lifelong learning, nurses pursue advanced degrees, certifications, and specialized training to remain adaptable and responsive to evolving healthcare needs.'"/></div>
                <div class="lg:w-1/3 text-justify"><x-card-component cardtitle="Advancing Knowledge" :cardcontent="'Nurses actively engage in interdisciplinary collaboration and knowledge exchange to enhance clinical practice and contribute to the advancement of healthcare innovations.'"/></div>
                <div class="lg:w-1/3 text-justify"><x-card-component cardtitle="Advancing Knowledge" :cardcontent="'Nurses embrace technology and innovation, leveraging advanced tools and resources to stay informed, enhance clinical decision-making, and deliver evidence-based care.'"/></div>
            </div>
        </div>

        <div>
        <x-footer-component/> 
        </div>
    
        
    </div>
</x-easyadmin::guest-layout>    