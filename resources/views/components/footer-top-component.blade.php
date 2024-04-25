
        <div class="relative">
                
                <img src="{{url('/images/footer_img phn.webp')}}" width="742" height="768" class="bg-cover w-full lg:hidden md:hidden" alt="nursing_student_logo">
                <img src="{{url('/images/footer_img_croped4.webp')}}" width="1200" height="675" class="bg-cover w-full hidden md:block lg:block " alt="nursing_student_logo">
                <div class="absolute inset-0 overflow-hidden  bg-gradient-to-r from-submarine/100 to-teal/30 lg:bg-gradient-to-r from-cyan/80 to-teal/10 flex flex-col lg:flex flex-col">
                    <div class="ml-6 mt-16 sm:mt-20 mb-20 md:mt-20 lg:mt-28 lg:ml-16 flex-grow lg:flex-grow xl:ml-24 xl:mr-24 2xl:ml-32 2xl:mr-32">
                        <h class="font-inter text-white font-bold text-2xl sm:text-2xl md:text-2xl lg:text-3xl 2xl:text-4xl">Fulfill Your Dreams Of A<br> Noble Career</h>
                        <div class="lg:mr-96 lg:pr-64"><p class="font-inter text-white font-normal leading-4 text-sm mt-4 mr-4 text-justify sm:mt-4 sm:text-sm sm:mr-4 md:text-sm md:mt-4 lg:text-base lg:mt-8 lg:mr-0 2xl:text-xl">Discover the path to realizing your dreams of a noble career in nursing, where your skills, compassion, and dedication come together to create moments of profound impact and healing.</p></div>
                        <div class="flex">
                            <a @click.prevent.stop="$dispatch('linkaction', {link: '{{route('applicationform')}}', route: 'applicationform'});" href="{{route('applicationform')}}"
                                class="text-center flex flex-row items-center font-arial font-bold sm:text-sm sm:p-3 md:text-base lg:text-xl 2xl:text-2xl text-white mt-6 bg-teal text-sm p-2 lg:mt-8 2xl:mt-12 lg:py-3 lg:px-5">
                                        APPLY NOW
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 lg:h-5 lg:w-5 stroke-1 fill-base-100"viewBox="0 0 512 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/>
                                        </svg>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="-mt-28 lg:-mt-44">
                        <div class="inset-0 overflow-hidden  bg-gradient-to-b from-teal/100 to-teal/5  mt-28 xl:mt-0 2xl:mt-0  xl:ml-8 xl:mr-8 pb-16  lg:ml-0 lg:mr-0">
                            <div class="ml-4  xl:mb-0 lg:ml-16 md:ml-6 ">
                                <div class="mt-2 md:mt-4 2xl:mt-16"><h class="text-white font-extrabold font-inter text-base lg:text-2xl 2xl:text-3xl ">Don’t Miss Our Updates</h></div>
                                <p class="text-white font-extralight font-inter text-xs xl:text-base mt-4">Enter your email to subscribe to our mailing list.</p>
                                <form class="mt-3 lg:ml-96 lg:-mt-4 2xl:-mt-12 2xl:-mr-48  lg:flex">
                                    <input name="name" class="lg:w-1/2 lg:h-16 xl:mb-0 lg:ml-0"></input>
                                    <button class="text-white font-inter text-base bg-primary font-semibold px-4 py-2 lg:text-lg lg:px-14 lg:py-4 lg:ml-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div> -->
                </div>
        </div>
