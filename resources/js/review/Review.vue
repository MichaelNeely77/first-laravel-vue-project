<template>
    <div>
        <div class="form-group">
            <label for="" class="text-muted">Select the star rating (1 is worst - 5 is best)</label>
            <star-rating 
                class="fa-3x" 
                v-model="review.rating">
            </star-rating>
        </div>
        <div class="form-group">
            <label for="content" class="text-muted">Describe your experience with us</label>
        </div>
        <textarea name="content" id="" cols="30" rows="10" class="form-control" v-model="review.content"></textarea>
        <button class="btn btn-primary btn-lg btn-block mt-2">Submit</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            review: {
                rating: 5,
                content: null
            }
        }
    },
    created() {
        

    }
};
</script>