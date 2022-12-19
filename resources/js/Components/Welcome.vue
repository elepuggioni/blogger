<script>
export default {
  data () {
    return {
    }
  }
}

</script>

<template>
    <div class="welcome container min-w-full text-center mb-4">
        <div class="title text-5xl font-medium mt-2 mb-4">
            <p>Welcome</p>
        </div>

        <div class="image px-5 mt-4 text-center">
            <img class="mx-auto w-4/5" src="/storage/images/welcome.jpg"/>
        </div>
        <div class="description">
            <p class="uppercase text-md font-semibold my-4">I have opinions and I WILL subject you to them</p>
            <p class="w-3/5 my-2 mx-auto">It all started when I decided to learn Laravel. I wanted to make a website to practice. What they dont tell you about making websites is that if you want to make a website you have to fkn do front end. So I was like ok, might as well learn Tailwind while I'm at it. Go big or go home and all that. In the end I still haven't done anything with Laravel. I hate it here.</p>
        </div>
        <div class="flex flex-row items-center justify-center min-w-full my-16">
            <img class="object-scale-down h-7 w-7" src="/storage/icons/insta.png">
            <img class="object-scale-down h-7 w-7" src="/storage/icons/ticcotocco.png">
        </div>
        <div class="flex flex-row items-center justify-center min-w-full mt-6 mb-6">
            <img class="object-scale-down h-24 w-24" src="/storage/icons/award1.png">
            <img class="object-scale-down h-24 w-24" src="/storage/icons/award2.png">
            <img class="object-scale-down h-24 w-24" src="/storage/icons/award3.png">
        </div>
        <div class="h-44">
            <img class="object-scale-down h-44 w-full" src="/storage/icons/sponsors.png">
        </div>
    </div>
</template>