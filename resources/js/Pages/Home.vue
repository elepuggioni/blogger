<script>
import {Head}  from '@inertiajs/inertia-vue3';
import Topbar from '../Components/Topbar.vue';
import Footer from '../Components/Footer.vue';
import Welcome from '../Components/Welcome.vue';
import Article from '../Components/Article.vue';


export default {
  data () {
    return {
    }
  },
  components:{
    Head,
    Topbar,
    Footer,
    Article,
    Welcome,
  },
}
</script>

<template>
    <Head title="Ginopippo's book review" />
    <div class="container min-h-screen min-w-full
    mx-auto px-auto dark:bg-gray-900 sm:text-center sm:pt-0">
        <Topbar></Topbar>
      <div class="px-10 py-5 bg-white">
        <div class="p-2 articles-wrapper min-w-full mb-18">
          <p class="font-semibold uppercase min-w-full text-left m-2">Read this stuff</p>
          <div class="articles-container articles-top container min-w-full grid grid-cols-3 gap-4 place-content-center">
            <div class="col article-wrapper" v-for="i in 3" :key="i">
              <Article/>
            </div>
          </div>
          <button class="font-semibold min-w-full text-left my-12 ml-6">Read all...</button>
        </div>
        <Welcome/>
        </div>
        <div class="banner min-w-full my-16 h-80">
        </div>
        <div class="px-10 py-5 bg-white">
        <div class="p-2 articles-wrapper min-w-full mb-18">
          <p class="font-semibold uppercase min-w-full text-left m-2">Some more articles...</p>
          <div class="articles-container articles-bottom container min-w-full grid grid-cols-4 gap-4 place-content-center">
            <div class="col article-wrapper" v-for="i in 4" :key="i">
              <Article/>
            </div>
          </div>
          <button class="font-semibold min-w-full text-left my-12 ml-6">Read all...</button>
        </div>

        <hr class="mb-16 text-slate-900">

        <div class="p-2 articles-wrapper min-w-full mb-16">
          <p class="font-semibold uppercase min-w-full text-left m-2">Some more articles...</p>
          <div class="articles-container articles-bottom container min-w-full grid grid-cols-4 gap-4 place-content-center">
            <div class="col article-wrapper" v-for="i in 4" :key="i">
              <Article/>
            </div>
          </div>
          <button class="font-semibold min-w-full text-left my-12 ml-6">Read all...</button>
        </div>
      <Footer/>
      </div>
      </div>

</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Jost:wght@300;400&family=Roboto+Serif:opsz@8..144&display=swap');

body{
  background: url('/storage/images/banner.jpg') 0 0 fixed;
  background-repeat: no-repeat;
}
</style>
