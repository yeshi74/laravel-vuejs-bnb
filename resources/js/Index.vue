<template>
    <div>
        <router-link :to="{name: 'home'}">Home</router-link>
        <router-link :to="{name: 'example2'}">Example2</router-link>
        <router-view></router-view>
    </div>
</template>
