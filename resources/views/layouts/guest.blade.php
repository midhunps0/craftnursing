<!DOCTYPE html>
<html x-data="{href: '', currentpath: '{{url()->current()}}', currentroute: '{{ Route::currentRouteName() }}', compact: $persist(false), metatags: [], xtitle: '',
nameMetas() {
    return this.metatags.filter(
        (m) => {
            return m.name != undefined;
        }
    );
},
propertyMetas() {
    return this.metatags.filter(
        (m) => {
            return m.property != undefined;
        }
    );
},

}"
lang="{{ str_replace('_', '-', app()->getLocale()) }}"
x-init="
    window.landingUrl = '{{\Request::getRequestUri()}}'; window.landingRoute = '{{ Route::currentRouteName() }}'; window.renderedpanel = 'pagecontent';

    let allTags = {{Js::from(session()->get('metatags'))}};
    if(allTags != null) {
        metatags = allTags.map((t) => {
            t.is_name = typeof t.name != 'undefined';
            return t;
        });
}
    if (metatags.length > 0) {
        theLink = window.landunUrl;
        setTimeout(() => {
            if ($store.app.xpages == undefined) {
                $store.app.xpages = [];
            }
            if ($store.app.xpages[theLink] == undefined) {
                $store.app.xpages[theLink] = {};
            }
            $store.app.xpages[theLink].meta = JSON.stringify(metatags);
        }, 500);

    }
    xtitle='{{session()->get('title') ?? config('app.name')}}';
    "
    @xmetachange="
        metatags = JSON.parse($event.detail.data);
    "
    @xtitlechange="
        xtitle = $event.detail.data;
    "
    @pagechanged.window="
    currentpath=$event.detail.currentpath;
    currentroute=$event.detail.currentroute;"
    @routechange.window="currentroute=$event.detail.route;"
    >
    <head>
        <title x-text="xtitle"></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- <template x-for="tag in nameMetas()">
                <meta :name="tag.name" :content="tag.content" >
        </template>
        <template x-for="tag in propertyMetas()">
                <meta :property="tag.property" :content="tag.content" >
        </template> -->
        {{ $meta_tags}}
       
       
        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet"> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('css')
        @stack('header_js')
    </head>
    <body x-data="initPage" x-init="initAction();"
        @linkaction.window="initialised = false; fetchLink($event.detail); "
        @formsubmit.window="postForm($event.detail);"
        @popstate.window="historyAction($event)"
        class="font-sans antialiased text-sm transition-colors">
        <div class="min-h-screen bg-base-100 flex flex-col">
            <main class="flex flex-col items-stretch flex-grow w-full">
                <div x-data="{show: true}" x-show="show"
                @contentupdate.window="
                if ($event.detail.target == 'renderedpanel') {
                    {{-- show = false; --}}
                    $el.style.opacity = 0.7;
                    setTimeout(() => {
                        $el.innerHTML = $event.detail.content;
                        {{-- show = true; --}}
                        $el.style.opacity = 1;
                    },
                        200
                    );
                }
                " id="renderedpanel"
                {{-- x-transition:enter="transition ease-out duration-250"
                x-transition:enter-start="translate-x-6"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in duration-250"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="opacity-20 -translate-x-6" --}}
                class="transition-all duration-200">
                @fragment('page-content')
                    {{ $slot }}
                @endfragment
                </div>
            </main>
        </div>
        
        <x-easyadmin::display.notice />
        <x-easyadmin::display.toast />
        @stack('js')
        <div x-show="$store.app.pageloading" class="progress-bar">
            <div class=""></div>
        </div>
    </body>
</html>
