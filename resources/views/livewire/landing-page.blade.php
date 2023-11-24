<div
class="flex flex-col bg-cover bg-center bg-indigo-900 h-screen" style="background-image: url('https://wallpaperaccess.com/full/834294.jpg');"
    x-data="{
        showSubscribe: @entangle('showSubscribe'),
        showSuccess: @entangle('showSuccess'),
    }"
>
    <nav class="pt-5 flex justify-between container mx-auto text-indigo-200">
        <a href="/" class="text-4xl font-bold">
            <x-application-logo class="w-16 h-16 fill-current"></x-application-logo>
        </a>
        <div class="flex justify-end">
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
                <a style="margin-right: 10px;" href="{{ route('login') }}">Login</a>

                <a style="margin-right: 10px;" href="{{ route('commits') }}">Commits</a>
                <a style="margin-right: 10px;" href="{{ route('coffe') }}">Buy me A coffe?</a>
                <a style="margin-right: 10px;" href="{{ route('weare') }}">We Are? </a>


               
            @endauth
          
        </div>
    </nav>
    <div class="flex container mx-auto items-center h-full">
        <div class="flex w-1/3 flex-col items-start">
            <h1 class="font-bold text-white text-5xl leading-tight mb-4">
                This a simple text o my GYM Subscribe NOW!!!
            </h1>

            <p class="text-indigo-200 text-xl mb-10">
                We are just checking the <span class="font-bold underline">TALL</span> stack. Would you mind subscribing?
            </p>

          
            <x-button
                class="py-3 px-8 bg-red-500 hover:bg-red-600"
                x-on:click="showSubscribe = true"
            >
                Subscribe
            </x-button>
        </div>
    </div>

    <x-modal class="bg-gray-900" trigger="showSubscribe">
        <p class="text-white font-extrabold text-5xl text-center">
            Do Now 
        </p>

        <form
            class="flex flex-col items-center p-24"
            wire:submit.prevent="subscribe"
        >
            <x-input
                class="px-5 py-3 w-80 border border-blue-400"
                type="email"
                name="email"
                placeholder="Email address"
                wire:model.defer="email"
            ></x-input>
            <span class="text-gray-100 text-xs">
                {{
                    $errors->has('email')
                    ? $errors->first('email')
                    : 'We will send you a confirmation email.'
                }}
            </span>
            <x-button2
                class="px-5 py-3 mt-5 w-80 bg-green justify-center"
            >
                <span class="animate-spin" wire:loading wire:target="subscribe">
                    &#9696;
                </span>
                <span wire:loading.remove wire:target="subscribe">
                    Get In
                </span>
            </x-button2>

            <x-button2
                class="px-5 py-3 mt-5 w-80 bg-green justify-center"
            >
                <span class="animate-spin" wire:loading wire:target="subscribe">
                    &#9696;
                </span>
                <span wire:loading.remove wire:target="subscribe">
                   Buy A Coffe 
                </span>
            </x-button2>

            
        </form>
    </x-modal>

    <x-modal class="bg-green-500" trigger="showSuccess">
        <p class="animate-pulse text-white font-extrabold text-9xl text-center">
            &check;
        </p>
        <p class="text-white font-extrabold text-5xl text-center mt-16">
            Great!
        </p>
        @if (request()->has('verified') && request()->verified == 1)
            <p class="text-white text-3xl text-center">
                Thanks for confirming.
            </p>
        @else
            <p class="text-white text-3xl text-center">
                See you in your inbox.
            </p>
        @endif
    </x-modal>
</div>
