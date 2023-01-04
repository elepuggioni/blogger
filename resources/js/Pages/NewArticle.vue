<script>
import {Head}  from '@inertiajs/inertia-vue3';
import Topbar from '../Components/Topbar.vue';
import Footer from '../Components/Footer.vue';
import Welcome from '../Components/Welcome.vue';
import Article from '../Components/Article.vue';
import { ref, watch, nextTick } from "vue";

import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export default {
    data() {
        return {
            cursorPadding: 0,
            editor: ClassicEditor,
            editorData: '<p>Enter your article here...</p>',
            editorConfig: {
                height: 500,
            },
            newTag: '',
            tags: ['hello', 'world'],
            tagsList: {},
            title: '',
        };
    },
    components:{
        Head,
        Topbar,
        Footer,
        Article,
        Welcome,
    },
    methods:{
        enterTag(){
            this.tags.push(this.newTag)
            this.newTag = ''
        },
        removeTag(index){
            this.tags.splice(index, 1)
        },
        submitForm(){
            alert(this.title + '\n' + this.tags + '\n' + this.editorData)
        },
        setLeftPadding(){
            const extraCushion = 30
            this.cursorPadding = this.tagsList.clientWidth + extraCushion
            console.log('tagslist width ' + this.tagsList.clientWidth)
            console.log('cursorpadding ' + this.cursorPadding)
        }
    },
    mounted(){
        this.tagsList = this.$refs.tagsList
        this.setLeftPadding()
        watch(this.tags, ()=> nextTick(this.setLeftPadding), {deep: true})
    },
}
</script>

<template>
    <Head title="Ginopippo's book review" />
    <div class="container min-h-screen min-w-full mx-auto px-auto dark:bg-gray-900 sm:text-center sm:pt-0">
        <Topbar/>
        <div class="article-form w-4/6 mx-auto p-4 flex flex-col bg-slate-50">
            <form @submit.prevent="submitForm">
                <div class="form-element title text-justify flex-grow py-2 flex flex-col">
                    <label class="form-label flex-grow" for="name">Title</label>
                    <input 
                    v-model="title"
                    type="text"
                    name="title"
                    class="form-input"/>
                </div>

                <div class="form-element text-justify flex-grow py-2 flex flex-col">
                    <label class="form-label flex-grow" for="tags">Tags</label>
                    <div class="tags-container">
                        <input v-model="newTag" 
                        type="text" 
                        name="tags"
                        @keydown.prevent.enter="enterTag"
                        @keydown.prevent.tab="enterTag"
                        @keydown.delete="newTag.length || removeTag(tags.length - 1)"
                        @resize='setLeftPadding'
                        :style="{ paddingLeft: this.cursorPadding + 'px' }"
                        class="tags-input form-input min-w-full"/>
                        <ul class="tags-list" ref="tagsList">
                            <li v-for="tag, index in tags" :key="tag" class="tag">
                            {{ tag }}
                            <button type="button" class="delete" @click="removeTag(index)">x</button>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="form-element content text-justify flex-grow py-2 flex flex-col">
                    <label class="form-label" for="content">Content</label>
                    <ckeditor :editor="editor" v-model="editorData" :config="editorConfig"></ckeditor>
                </div>

                <div class="form-element submit py-2">
                    <button class="btn btn-primary w-32" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <Footer/>
    </div>

</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Jost:wght@300;400&family=Roboto+Serif:opsz@8..144&display=swap');

.form-element{
    @apply my-4
}

.ck-editor{
    --ck-border-radius: 0.5rem !important;
}

.ck-editor__editable {
    height: 500px  !important;
}

.tags-input, .tags-container{
    position: relative;
}

ul {
  list-style: none;
  display: flex;
  align-items: center;
  gap: 7px;
  position: absolute;
  left: 1rem;
  bottom: 0rem;
  top: 0rem;
  margin: 0;
  padding: 0;
  max-width: 75%;
  overflow-x: auto;
}
.tag {
  background: rgb(250, 104, 104);
  padding: 5px;
  border-radius: 4px;
  color: white;
  white-space: nowrap;
  transition: 0.1s ease background;
}

.delete {
  color: white;
  background: none;
  outline: none;
  border: none;
  cursor: pointer;
}
</style>
