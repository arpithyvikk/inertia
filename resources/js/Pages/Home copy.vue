<template>
    <div>
        <h1> Hello {{ name }}</h1>
    
        <p>In this project, We will use following frameworks: </p>

        <ul>
            <li v-for="framework of frameworks" v-text="framework"></li>
        </ul>
    </div>
</template>

<script>
    export default {
        props:{
            name: String,
            frameworks:  Array,
        },
    };
</script>