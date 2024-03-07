<div>
<header>
            <nav>
                <!-- < navbar for smallscreen > -->
               <div class="flex flex-row md:flex flex-col">
               <x-header-top-component/>
                    
                    <div>
                        <div class="flex flex-row xl:ml-24 xl:mr-24 2xl:ml-32 2xl:mr-32 ">
                            <div class=" py-1 pl-3.5 w-1/3 ">
                                <a  role="link" tabindex="0" aria-label="Logo" @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'})"><img src="{{url('/images/craftnursing.webp')}}" class="cursor-pointer h-14 w-12 lg:h-16 lg:w-14 xl:h-20 xl:w-16 2xl:h-24 2xl:w-20" alt="logo"/></a>
                            </div> 
                            <div class="md:block md:flex hidden md:items-center md:mt-4 md:w-2/3 md:text-left md:text-base md:space-x-12 font-questrial font-thin 
                                        lg:block lg:items-center lg:mt-6 lg:text-base lg:space-x-16
                                        xl:block xl:mt-8 xl:item-center xl:text-lg xl:space-x-20
                                        2xl:block 2xl:text-xl 2xl:mt-10 2xl:ml-40 2xl:space-x-24">
                                <a  role="link" tabindex="0" aria-label="Home"class="cursor-pointer {{ Request::is('/') ? 'text-teal font-bold underline' : '' }}" @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'})" >Home</a>
                                <a  role="link" tabindex="0" aria-label="About"class="cursor-pointer {{ Request::is('about') ? 'text-teal font-bold underline' : '' }}" @click="$dispatch('linkaction', {link: '{{route('about')}}', route: 'about'}); console.log('event dispatched');">About Us</a>
                                <a  role="link" tabindex="0" aria-label="Courses"class="cursor-pointer {{ Request::is('courses') ? 'text-teal font-bold underline' : '' }}" @click="$dispatch('linkaction', {link: '{{route('courses')}}', route: 'courses'}); console.log('event dispatched');">Courses</a>
                                <a  role="link" tabindex="0" aria-label="Gallery"class="cursor-pointer {{ Request::is('gallery') ? 'text-teal font-bold underline' : '' }}" @click="$dispatch('linkaction', {link: '{{route('gallery')}}', route: 'gallery'}); console.log('event dispatched');">Gallery</a>
                                <a  role="link" tabindex="0" aria-label="Contact"class="cursor-pointer {{ Request::is('contact') ? 'text-teal font-bold underline' : '' }}" @click="$dispatch('linkaction', {link: '{{route('contact')}}', route: 'contact'}); console.log('event dispatched');">Contact</a> 
                            </div>
                            <div x-data="{ open : false }" class="pt-3 items-center text-right w-2/3 md:hidden items-center ">
                                <button @click="open = !open" title="menu button" aria-label="Toggle menu">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-4 mr-3 " viewBox="0 0 448 512">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
                                    </svg>
                                </button>
                                <div x-show="open" class="lg:hidden md:hidden xl:hidden font-questrial flex justify-end">
                                    <ul class="bg-white/60 mt-2  font-normal shadow-xl text-center absolute z-10 ">
                                        <li class="hover:bg-primary border-b border-primary hover:font-bold hover:text-white z-20 mt-4"><a  role="link" tabindex="0" aria-label="Home"class=" text-base cursor-pointer w-full px-2 py-4" @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'})">Home</a></li>
                                        <li class="hover:bg-primary border-b border-primary hover:font-bold hover:text-white z-20"><a  role="link" tabindex="0" aria-label="About"class=" text-base cursor-pointer w-full px-2 py-4" @click="$dispatch('linkaction', {link: '{{route('about')}}', route: 'about'}); console.log('event dispatched');">About Us</a></li>
                                        <li class="hover:bg-primary border-b border-primary hover:font-bold hover:text-white z-20"><a  role="link" tabindex="0" aria-label="Course"class=" text-base cursor-pointer w-full px-2 py-4" @click="$dispatch('linkaction', {link: '{{route('courses')}}', route: 'courses'}); console.log('event dispatched');">Courses</a></li>
                                        <li class="hover:bg-primary border-b border-primary hover:font-bold hover:text-white z-20"><a  role="link" tabindex="0" aria-label="Gallery"class=" text-base cursor-pointer w-full px-2 py-4" @click="$dispatch('linkaction', {link: '{{route('gallery')}}', route: 'gallery'}); console.log('event dispatched');">Gallery</a></li>
                                        <li class="hover:bg-primary  hover:font-bold hover:text-white z-20 mb-4"><a  role="link" tabindex="0" aria-label="Contact"class=" text-base cursor-pointer w-full px-2 py-4" @click="$dispatch('linkaction', {link: '{{route('contact')}}', route: 'contact'}); console.log('event dispatched');">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
               </div> 
            </nav>
        </header>
</div>