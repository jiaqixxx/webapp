<template>
    <v-app id="inspire" style="margin-top: 50px;">
        <v-container grid-list-md text-xs-center>
            <v-layout row wrap>
                <v-flex xs5>
                    <p class="headline" style="padding: 30px;">Login</p>
                    <v-form v-model="valid">
                        <v-text-field
                                v-model="email"
                                :rules="emailRules"
                                label="E-mail"
                                required
                        ></v-text-field>
                        <v-text-field
                                v-model="password"
                                :rules="passwordRules"
                                :append-icon="e1 ? 'visibility' : 'visibility_off'"
                                :append-icon-cb="() => (e1 = !e1)"
                                :type="e1 ? 'password' : 'text'"
                                label="Enter your password"
                                hint="At least 8 characters"
                                min="8"
                                counter
                                required
                        ></v-text-field>
                        <v-btn style="height: 50px; margin-top: 30px;" block color="secondary" dark>LOG IN</v-btn>
                    </v-form>
                </v-flex>
                <v-flex xs2>
                    <div style="border-left: 2px solid black; height: 500px; position: absolute; left: 50%;"></div>
                </v-flex>
                <v-flex xs5>
                    <p class="headline" style="padding: 30px;">Create account</p>
                    <p class="subheading">Why create an account?</p>
                    <v-btn style="width: 100%; height: 50px" outline color="black">CREATE ACCOUNT</v-btn>
                </v-flex>
            </v-layout>
        </v-container>
    </v-app>
</template>

<script type="text/babel">
    module.exports = {
        data: () => ({
            valid: true,
            email: '',
            emailRules: [
                v => !!v || 'Name is required',
                v => (v && v.length <= 25) || 'Name must be less than 25 characters'
            ],
            password: '',
            passwordRules: [
                v => !!v || 'E-mail is required',
                v => (v && v.length >= 8 ) || 'Password at least 8 characters'
            ],
            e1: true
        }),
        methods: {
            submit () {
                if (this.$refs.form.validate()) {
                    // Native form submission is not yet supported
                    axios.post('/api/submit', {
                        name: this.name,
                        password: this.password
                    })
                }
            }
        }
    };
</script>

<style scoped>
#inspire{
    background-color: white;
}
</style>