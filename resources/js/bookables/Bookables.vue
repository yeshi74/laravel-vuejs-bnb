<template>
    <div>
        <bookable-list-item item-title="This is title" item-content="This is content" :price="1000"></bookable-list-item>
        <bookable-list-item item-title="This is title 2" item-content="This is content 2" :price="1500"></bookable-list-item>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem";
export default {
    components: {
        BookableListItem
    }
}
</script>
