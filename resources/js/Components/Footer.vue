<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
  data () {
    return {
        searched: "",
    }
  },
  components:{
    Link,
  },
  methods: {
    showAlert: (s) => {
      alert(s)
    }
  }
}

</script>

<template>
    <div class="flex flex-row mx-16 h-36 bg-white top-0 px-6 py-4 font-semibold">
        <div class="self-center mx-2 uppercase underline text-md text-gray-700 dark:text-gray-500">
            <Link
                :href="route('home')"
                class="mx-6"
                >Home</Link
            >
            <Link
                :href="route('blog')"
                class="mr-6"
                >Blog</Link
            >
            <Link
                :href="route('privacy')"
                class="mr-6"
                >Privacy</Link
            >
        </div>
        <div class="grow flex flex-row items-center justify-center mx-auto ">
            <img class="object-scale-down mx-1 h-7 w-7" src="/icons/insta.png">
            <img class="object-scale-down mx-1 h-7 w-7" src="/icons/ticcotocco.png">
        </div>
        <div class="self-center mx-2 uppercase underline text-md text-gray-700 dark:text-gray-500">
            <Link
                :href="route('contact')"
                class="mx-6"
                >Contact</Link
            >
            <Link
                :href="route('home')"
                class="mr-6"
                >Subscribe</Link
            >
        </div>
    </div>
</template>
