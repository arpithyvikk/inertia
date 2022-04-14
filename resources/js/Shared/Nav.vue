<template>
    <div>
        <nav class="mt-6">
            <ul class="list-disc">
                <li><Link href="/" class="text-blue-500 hover:underline">Home</Link></li>
                <li><Link href="/Users" class="text-blue-500 hover:underline">Users</Link></li>
                <li><Link href="/Settings" class="text-blue-500 hover:underline">Settings</Link></li>
                <li><Link href="/Logout" method="post" :data="{ foo : 'bar' }" as="button" class="text-blue-500 hover:underline">Log Out</Link></li>
            </ul>
        </nav>
    </div>
</template>

<script>

    import { Link } from '@inertiajs/inertia-vue3';
    export default {
        components : { Link },
    };
</script>
