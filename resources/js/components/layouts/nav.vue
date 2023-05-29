<template>
<nav class="bg-primary">
    <span>Voka</span>
    <ul>
        <li v-for="item in menuItems" :key="item.name">
            <router-link :to="item.route">{{ item.name }}</router-link>
        </li>
    </ul>
</nav>
</template>
  
<script>
    export default {
        data() {
            return {
                menuItems: [
                    { name: 'Home', route: '/' },
                    { name: 'About', route: '/about' },
                    { name: 'Contact', route: '/contact' },
                ],
            };
        },
    };
</script>