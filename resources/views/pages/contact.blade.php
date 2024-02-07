<x-easyadmin::guest-layout>
    <div class="flex flex-row space-x-4">
        <a @click.prevent.stop="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'});">Home</a>
        <a @click.prevent.stop="$dispatch('linkaction', {link: '{{route('about')}}', route: 'about'});">About</a>
        <a @click.prevent.stop="$dispatch('linkaction', {link: '{{route('contact')}}', route: 'contact'});">Contact</a>
    </div>
    <div>
        this is the contact page.
    </div>
</x-easyadmin::guest-layout>
