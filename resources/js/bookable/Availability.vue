<template>
    <div>
        <h6 class="text-uppercase text-secondary font-weight-bolder">Check Availability</h6>
        <div class="form-row">
            <div class="form-group-class col-md-6">
                <label for="from">From</label>
                <input type="text" name="from"
                class="form-control form-control-sm"
                placeholder="Start Date" 
                v-model="from" 
                @keyup.enter="check"
                />
            </div>
            <div class="form-group-class col-md-6">
                <label for="to">To</label>
                <input type="text" name="from"
                class="form-control form-control-sm"
                placeholder="End Date"
                v-model="to"
                @keyup.enter="check"
                />
            </div>
        </div>
        <button class="btn btn-secondary btn-block mt-2" @click="check" :disabled="loading">Check!</button>
    </div>
</template>
<script>
export default {
    data() {
        return {
            from: null,
            to: null,
            loading: false,
            status: null,
            errors: null
        }

    },
    methods: {
        check() {
            this.loading = true;

            axios.get('/api/bookables/${this.$route.params.id}/availability?from=${this.from}&to=${this.to}')
            .then(response => {
                this.status = response.status;
            })
            .catch(error => {
                if(422 == error.response.status) {
                    this.error = error.response.data.errors;
                }
                this.status = error.response.status;
            });
        }
    }
}
</script>

<style scoped>
    label {
        font-size: 0.7rem;
        text-transform: uppercase;
        color: grey;
        font-weight: bold;
    }

</style>