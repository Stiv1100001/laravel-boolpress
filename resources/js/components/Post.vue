<template>
    <div class="col mb-3">
        <div class="card h-100">
            <img
                :src="post.img"
                class="card-img-top"
                :alt="'image of' + 'post.title'"
            />
            <div class="card-body">
                <h5 class="card-title">{{ post.title }}</h5>
                <p class="card-text">{{ post.text }}</p>
            </div>
            <!-- <div class="card-footer">
                <small class="text-muted">{{ post.updated_at }}</small>
            </div> -->
        </div>
    </div>
</template>

<script>
export default {
    name: "Post",
    components: {},
    props: ["post"],
};
</script>

<style></style>
