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
    <div class="flex flex-row min-w-full bg-white top-0 px-6 py-4 h-24 max-h-24">
        <div class="">
            <img class="object-scale-down h-16 w-50" src="/logo.png">
        </div>
        <div class="flex-1"></div>
        <div class="self-center grid grid-rows-1 grid-cols-5 gap-2 mx-2 uppercase text-base no-underline font-bold text-gray-700">
            <Link
                :href="route('home')"
                class="text-sm text-center hover:underline"
                >Home</Link
            >
            <Link
                :href="route('blog')"
                class="text-sm text-center hover:underline"
                >Blog</Link
            >
            <Link
                :href="route('contact')"
                class="text-sm text-center hover:underline"
                >Contact</Link
            >
            <Link
                :href="route('newsletter')"
                class="col-span-2 text-center text-sm hover:underline"
                >Newsletter</Link
            >
        </div>
        <div class="flex flex-row items-center mx-1 ">
            <img class="object-scale-down h-7 w-7 mr-2" src="/icons/insta.png">
            <img class="object-scale-down h-7 w-7" src="/icons/ticcotocco.png">
        </div>
        <div class="searchbar self-center mx-3">
            <form class="flex" role="search" @submit.prevent="showAlert(this.searched)">
                <input class="border-solid border-slate-300 rounded-full" type="search" placeholder="Search..." aria-label="Search" v-model="this.searched">
                <mdicon name="magnify" class="text-gray-600 inset-y-0 relative right-8 flex items-center" type="submit"></mdicon>
            </form>
        </div>
    </div>
</template>
