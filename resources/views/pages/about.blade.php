
<x-guest-layout>
<x-slot:meta_tags>
        <meta property="og:title" content="About-CRAFT collge of Nursing,Kodungallur,Thrissur">
        <meta property="og:description" content="Learn more about CRAFT College of Nursing, Kodungallur, Thrissur. We offer a 3-year diploma in general nursing and midwifery, providing quality education and training for aspiring nurses.">
        <meta property="og:image" content="{{url('/images/about (1).webp')}}">
        <meta name="description" content="Learn more about CRAFT College of Nursing, Kodungallur, Thrissur. We offer a 3-year diploma in general nursing and midwifery, providing quality education and training for aspiring nurses.">
    </x-slot>
    
   
    <div class="items-center">
        <x-header-full-component/>

        <div>
            <div class="relative">
                <img src="{{url('/images/about_cover_croped1.webp')}}" width="900" height="444"  class="lg:w-full xl:w-full 2xl:w-full h-auto lg:bg-cover hidden lg:block "  alt="image_of_nursing_student">
                <img src="{{url('/images/about_cover_phn_croped.webp')}}" width="406" height="454"  class=" w-full sm:w-full md:w-full h-auto bg-cover lg:hidden" alt="image_of_nursing_student">
                <div class="absolute inset-0 overflow-hidden  bg-gradient-to-r from-secondary/40 to-accent/50">
                    <div class="mt-28 ml-14 md:mt-48 md:ml-20 lg:mt-24 xl:mt-28 2xl:mt-40 xl:ml-24 xl:mr-24 2xl:ml-32 2xl:mr-32">
                        <div class=""><h class="text-white text-sm md:text-xl md:px-2 md:py-2 lg:text-base 2xl:text-lg outline outline-white outline-1 font-bold font-inter lg:px-2 lg:py-2  pt-1 pb-1  pl-1 pr-1">WELCOME TO CRAFT SCHOOL OF NURSING</h></div>
                        <p class=" text-left text-white text-4xl mt-8 sm:text-6xl md:mt-14  lg:text-7xl md:text-8xl 2xl:text-8xl lg:leading-tight font-black font-gothic mr-10 lg:mt-8 ">About Us</p>
                        <div class="lg:mr-96 lg:pr-4"><p class=" text-left text-white text-sm sm:text-lg md:text-xl lg:text-base xl:text-base 2xl:text-2xl lg:mt-0 xl:mt-8 2xl:mt-12 font-gothic mt-8 md:mt-20 font-light  mr-24 lg:mr-0 lg:font-extralight" >The CRAFT School of Nursing is committed to excellence in professional nursing education. Our curriculum is designed to integrate the
                             fundamental concepts of nursing, health, person, and environment, fostering a comprehensive understanding of the nursing profession.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="text-left xl:ml-8 xl:mr-8 2xl:ml-32 2xl:mr-32">
                <div class="mt-6 md:mt-10  mb-4 lg:mt-14 lg:mb-14 lg:ml-16 lg:mr-16 2xl:mt-20 font-inter">
                    <h class="text-teal font-inter ml-4 lg:ml-0 font-bold text-sm sm:text-base md:text-2xl lg:text-3xl 2xl:text-4xl lg:text-left">WELCOME TO CRAFT SCHOOL OF NURSING</h>
                    <div class="mt-4 mb-4 2xl:mt-6 ">
                        <x-page-component :content="'Craft hospital and Research  Centre  initiated  as a infertility treatment hospital in 2018.We started AR Super specialty  hospital ,
                         offering a high quality health care with the latest diagnostic facilities under one roof. At present the hospital gives services in general Medicines ,General 
                         surgery , obstetrics  ,and Gynecology , Pediatrics ,Ortho pediatrics , ENT, Psychiatry , Neurology.'" />
                        <x-page-component :content="'CRAFT SCHOOL OF NURSING , a unit of craft hospital and Research Institute, Kodungallur came into existence in 2023.Like all other 
                        educational institutions , We have been open to all people irrespective of religion , cast or community and is recognized  by Kerala Nurses and Midwives  Council (KNMC).'"/>
                        <p class="text-teal text-base md:text-xl ml-4 lg:ml-0 font-medium">Aims</p>
                        <div class="text-justify font-extralight  mb-2 text-sm md:text-base 2xl:text-base xl:text-base  mr-6 ml-6 font-inter text-black lg:text-base  lg:text-justify lg:font-extralight lg:ml-0   lg:mt-0">
                            <p>The aims of the Diploma in General Nursing and Midwifery programs are :</p>
                            <p>To bring out  nurses with a sound educational programme in nursing to enable them to function as efficient members of health team.</p>
                            <p>To serve as a base for further professional education and Specialization in nursing</p>
                            <p>Increase Collaboration with community</p>
                            <p>Perform self directed learning and continually aspire to improve individual professional skills .</p>
                        </div>
                        <x-infrastructure-component/>
                        <x-principal/>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="mt-8">
               <x-footer-top-component/>
               <x-footer-component/> 
            </div>
        </footer>
    
    </div>
</x-guest-layout>
