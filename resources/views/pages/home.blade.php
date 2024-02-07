<x-easyadmin::guest-layout>
    <div x-data class="flex flex-row space-x-4">
        <a @click="console.log('link clicked');$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'}); console.log('event dispatched');">Home</a>
        <a @click="console.log('link clicked');$dispatch('linkaction', {link: '{{route('about')}}', route: 'about'}); console.log('event dispatched');">About</a>
        <a @click="console.log('link clicked');$dispatch('linkaction', {link: '{{route('contact')}}', route: 'contact'}); console.log('event dispatched');">Contact</a>
    </div>
    <div>
        this is the home page.
    </div>
</x-easyadmin::guest-layout>
