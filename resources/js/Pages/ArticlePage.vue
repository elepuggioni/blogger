<script>
import {Head}  from '@inertiajs/inertia-vue3';
import Topbar from '../Components/Topbar.vue';
import Footer from '../Components/Footer.vue';


export default {
  data () {
    return {
    }
  },
  components:{
    Head,
    Topbar,
    Footer,
  },
}
</script>

<template>
    <div class="container min-h-screen h-screen min-w-full
    mx-auto px-auto bg-white">
        <div class="flex flex-col min-h-full">
        <Topbar></Topbar>
        <div class="grow py-5 px-32 h-max">
            <div class="title text-3xl text-justify w-full font-semibold mt-4 mb-4">
            <h1>Heartbreaking: the worst person you know just made a great point</h1>
            </div>
            <div class="tags w-full uppercase text-md mb-12">
                    Tag tag tag
            </div>
            <div class="">
                <img class="main-image w-full mb-12" src="/storage/images/heartbreaking.jpg"/>
            </div>
            <div class="content text-justify w-5/6 mx-auto mb-4">
                <p class="article-content first-letter:text-5xl first-letter:mr-1 first-letter:float-left">A heartbreaking story is currently unfolding that’s sure to have devastating ramifications for years to come. Just moments ago, without any warning, the worst person you know just made a great point.
<br><br>
This is absolutely crushing news, and it’s unclear if recovery will ever be possible.
<br><br>
The tragedy occurred just a few moments ago during a debate about politics occurring among your coworkers. Out of nowhere, the most loathsome person you’ve ever met in your whole life chimed into the argument with a completely valid and irrefutable point. Every attempt to formulate a rebuttal to just the most insufferable asshole on the planet failed miserably because, for the first time ever, that piece of shit’s logic was entirely unassailable.
<br><br>
This is the kind of horrific event you always assume only happens to other people, but never to you.
<br><br>
It’s amazing how life can change in an instant. One moment, everything’s normal, and the next you’re unable to find a single flaw in the intricate and logically sound reasoning of this fucking self-important, endlessly irritating prick. Up until now, everything that’s comes out of that guy’s mouth is pure dogshit, so now that he’s strung together an eloquent and convincing opinion, you’ve been completely blindsided.
<br><br>
In some ways, that’s the worst part of it: You were so used to this unbearable cretin saying nothing but garbage that you had no way to mentally prepare yourself for the day he made an amazing and insightful comment.
<br><br>
While this gut-wrenching calamity has passed, the shock and the sorrow it left in its wake may never truly fade. All you can do now is try to pick up the pieces, move on, and pray that this pompous moron never makes another great point ever again.<br></p>
            </div>
        </div>
        <Footer/>
        </div>
    </div>
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Jost:wght@300;400&family=Roboto+Serif:opsz@8..144&display=swap');
</style>
