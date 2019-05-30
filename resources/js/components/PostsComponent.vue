<template>
    <h1 class="mb-3">Posts Component</h1>
</template>

<script>
    // export default {
    //     data() {
    //         return {
    //             posts: [],
    //             post: {
    //                 id: '',
    //                 title: '',
    //                 body: ''
    //             },
    //             post_id: '',
    //             pagination: {},
    //             edit: false
    //         }
    //     },

    //     created() {
    //         this.fetchPosts();
    //     },

    //     methods: {
    //         fetchPosts() {
    //             fetch('services')
    //             .then(res => res.json())
    //             .then(res => {
    //                 console.log(res.data);
    //             })
    //         }
    //     }
    // }

    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
