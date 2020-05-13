<template>
    <div class="w-50 m-auto">
        <div class="card card-body">
            <form action="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter your email here" class="form-control" v-model="email"
                    :class="[{'is-invalid': errorFor('email')}]">
                    <v-errors :errors="errorFor('email')"></v-errors>
                </div>
                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" name="password" placeholder="Enter your password here" class="form-control" v-model="password"
                    :class="[{'is-invalid': errorFor('password')}]"
                    >
                    <v-errors :errors="errorFor('password')"></v-errors>

                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg" :disabled="loading" @click.prevent="login">Login</button>
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
import validationErrors from '../shared/mixins/validationErrors';
import { logIn } from './../shared/utils/auth';

export default {
    mixins: [validationErrors],
    data () {
        return {
            email: null,
            password: null,
            loading: false
        }
    },
    methods: {
        async login() {
            this.loading = true;
            this.errors = null;
                try {
                    await axios.get('/sanctum/csrf-cookie');
                    await axios.post("/login", {
                        email: this.email,
                        password: this.password
                    });
                    
                    logIn();
                    this.$store.dispatch("loadUser");
                    this.$router.push({ name: "home" });
                } catch (error) {
                    this.errors = error.response && error.response.data.errors;
                }
            this.loading = false;
        }
    }
    
}
</script>
