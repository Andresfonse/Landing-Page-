@props(['trigger'])

<div
    class="flex fixed top-0 w-full h-full  bg-opacity-50 items-center"
    x-show="{{ $trigger }}"
    x-on:click.self="{{ $trigger }} = false"
    x-on:keydown.escape.window="{{ $trigger }} = false"
    x-cloak
>
    <div {{ $attributes->merge(['class' => 'm-auto bg-orange-500 bg-opacity-75 shadow-lg rounded-md p-8']) }}>
        {{ $slot }}
    </div>
</div>