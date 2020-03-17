<template>
    <div>
        <bookable-list-item 
        v-if="bookable1 !== null"
        :item-title="bookable1.title" :item-content="bookable1.content" :price="1000"></bookable-list-item>
        <bookable-list-item 
        v-if="bookable2 !== null"
        :item-title="bookable2.title" 
        :item-content="bookable2.content" :price="1500"></bookable-list-item>


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
            bookable1: null,
            bookable2: null
        }
    },

    created() {
        setTimeout(() =>{
            this.bookable1 = {
                title: "Cheap Villa!!!",
                content: "A very cheap villa you will love"
            };
            this.bookable2 = {
                title: "Awesome Cheap Villa 2",
                content: "A very cheap villa that you and your family will love"
            };
        }, 2000);

    }

};
</script>