<template>
    <div class="w-50 m-auto">
        <div class="card card-body">
            <form action="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter your email here" class="form-control" v-model="email">
                </div>
                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" name="password" placeholder="Enter your password here" class="form-control" v-model="password">
                </div>
                <button class="btn btn-primary btn-block btn-lg">Login</button>
                <hr>
                <div>
                    No Account Yet?
                    <router-link :to="{name: 'home'}" class="font-weight-bold">Register</router-link>
                </div>
                <div>
                    Reset Password
                    <router-link :to="{name: 'home'}" class="font-weight-bold">Reset Password</router-link>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return {
            email: null,
            password: null
        }
    }
    
}
</script>
