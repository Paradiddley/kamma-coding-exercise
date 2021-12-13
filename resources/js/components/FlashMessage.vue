<template>
    <div v-if="$page.props.flash.message" class="flex flex-row justify-center bg-green-200 text-green-900 py-2 mb-3">
        {{ $page.props.flash.message }}
    </div>
</template>

<script>
export default {

}
</script>
