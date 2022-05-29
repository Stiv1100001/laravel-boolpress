<template>
    <div>
        <div class="row row-cols-3 g-4">
            <Post v-for="(post, index) in posts" :key="index" :post="post" />
        </div>
        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li
                            class="page-item"
                            v-if="pagination.currentPage > 1"
                            @click="getPosts(pagination.currentPage - 1)"
                        >
                            <p class="page-link">Previous</p>
                        </li>
                        <li class="page-item">
                            <p class="page-link">
                                {{ pagination.currentPage }}
                            </p>
                        </li>
                        <li></li>
                        <li
                            class="page-item"
                            v-if="pagination.currentPage < pagination.lastPage"
                            @click="getPosts(pagination.currentPage + 1)"
                        >
                            <p class="page-link">Next</p>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
import Post from "./Post.vue";
export default {
    name: "Posts",
    components: {
        Post,
    },
    data: function () {
        return {
            posts: [],
            pagination: {},
        };
    },
    methods: {
        getPosts(page) {
            axios
                .get("http://localhost:8000/api/posts?page=" + page)
                .then((result) => {
                    this.posts = result.data.results.data;
                    const { current_page, last_page } = result.data.results;
                    this.pagination = {
                        currentPage: current_page,
                        lastPage: last_page,
                    };
                    console.log(this.pagination);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    created() {
        this.getPosts(1);
    },
};
</script>

<style></style>
