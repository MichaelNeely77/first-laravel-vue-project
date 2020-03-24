<template>
    <div>
        <h6 class="text-uppercase text-secondary font-weight-bolder">Check Availability</h6>
        <div class="form-row">
            <div class="form-group-class col-md-6">
                <label for="from">From</label>
                <input type="text" name="from"
                class="form-control form-control-sm"
                placeholder="Start Date" />
            </div>
            <div class="form-group-class col-md-6">
                <label for="to">To</label>
                <input type="text" name="from"
                class="form-control form-control-sm"
                placeholder="End Date" />
            </div>
        </div>
        <button class="btn btn-secondary btn-block mt-2">Check!</button>
    </div>
</template>

<style scoped>
    label {
        font-size: 0.7rem;
        text-transform: uppercase;
        color: grey;
        font-weight: bold;
    }

</style>