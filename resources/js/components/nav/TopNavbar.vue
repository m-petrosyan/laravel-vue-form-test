<template>
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="flex w-2/4 h-16 items-center mx-auto">
                <ul class="w-full flex justify-between">
                    <li class="mr-6">
                        <router-link class="text-white hover:text-blue-800" :to="{name:'home'}">
                            Home
                        </router-link>
                    </li>
                    <li class="mr-6">
                        <router-link class="text-white hover:text-blue-800" :to="{name:'messages'}">
                            Messages
                        </router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
<style lang="scss" scoped>
.router-link-active {
    color: white;
}

.router-link-exact-active {
    color: #0464ee;
}
</style>
