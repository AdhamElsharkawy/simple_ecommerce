<template>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div :class="`card bg-light-${color} text-center`">
            <div class="card-body">
                <div class="card-title d-flex align-items-center justify-content-center mb-4">
                    <i :class="`${icon} bx-lg text-${color}`"></i>
                </div>
                <h5 class="card-title">{{ title }}</h5>
                <p class="card-text fs-4 fw-bold">{{ value }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        value: Number,
        icon: String,
        color: String,
    }
};
</script>
