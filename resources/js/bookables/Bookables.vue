<template>
    <div>
        <div v-if="loading">
            Data is loading...
        </div>
        <div v-else>
            <bookable-list-item 
            :item-title="bookable.title" 
            :item-content="bookable.content" 
            :price="1000"
            v-for="(bookable, index) in bookables"
            :key="index"
            >
            </bookable-list-item>
        </div>
    </div>
</template>

<script>
import BookableListItem from './BookableListItem';

export default {
    components: {
        BookableListItem
    },
    data() {
        return {
            bookables: null,
            loading: false
        }
    },

    created() {
        this.loading = true;
        setTimeout(() =>{
            this.bookables = [{
                title: "Cheap Villa!!!",
                content: "A very cheap villa you will love"
            },
            {
                title: "Awesome Cheap Villa 2",
                content: "A very cheap villa that you and your family will love"
            }];
            this.loading = false;
        }, 2000);

    }

};
</script>