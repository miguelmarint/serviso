<template>
  <div>
    <Navbar />
    <main id="page-container">
      <div id="content-wrap">
        <jet-authentication-card>
          <div class="card-body">
            <!-- <jet-validation-errors class="mb-3" /> -->
            <form @submit.prevent="submit">
              <h2 class="text-center mb-3">Register on reactivaccion</h2>
              <button class="btn btn-primary btn-lg btn-facebook btn-block">
                <p class="d-inline">login with facebook</p>
              </button>
              <hr class="mt-4" />
              <h4 class="text-center mb-4">or register with email</h4>

              <div class="form-group row">
                <div class="col-md-12">
                  <input
                    class="form-control"
                    :class="{ 'is-invalid': errors.name }"
                    id="name"
                    type="text"
                    v-model="form.name"
                    placeholder="Name"
                    required
                    autofocus
                  />
                  <span
                    v-if="errors.name"
                    class="invalid-feedback"
                    role="alert"
                  >
                    <strong>{{ errors.name }}</strong>
                  </span>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input
                    id="email"
                    type="email"
                    v-model="form.email"
                    required
                    class="form-control"
                    :class="{ 'is-invalid': errors.email }"
                    placeholder="Email"
                  />
                  <span
                    v-if="errors.email"
                    class="invalid-feedback"
                    role="alert"
                  >
                    <strong>{{ errors.email }}</strong>
                  </span>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input
                    class="form-control"
                    :class="{ 'is-invalid': errors.password }"
                    placeholder="Password"
                    id="password"
                    type="password"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                  />
                  <span
                    v-if="errors.password"
                    class="invalid-feedback"
                    role="alert"
                  >
                    <strong>{{ errors.password }}</strong>
                  </span>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input
                    class="form-control"
                    placeholder="Password confirmation"
                    id="password_confirmation"
                    type="password"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                  />
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-12">
                  <button
                    :class="{ 'text-white-50': form.processing }"
                    :disabled="form.processing"
                    class="btn btn-primary btn-block"
                  >
                    Register
                  </button>
                </div>
              </div>

              <div class="mt-3">
                <inertia-link :href="route('login')">
                  Already registered?
                </inertia-link>
              </div>
            </form>
          </div>
        </jet-authentication-card>
      </div>
    </main>
  </div>
</template>

<script>
import JetAuthenticationCard from "@/Jetstream/AuthenticationCard";
import Navbar from "@/Layouts/Navbar";

export default {
  components: {
    JetAuthenticationCard,
    Navbar,
  },

  data() {
    return {
      form: this.$inertia.form({
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
        terms: false,
      }),
    };
  },

  methods: {
    submit() {
      this.form.post(this.route("register"), {
        onFinish: () => this.form.reset("password", "password_confirmation"),
      });
    },
  },

  computed: {
    errors() {
      return this.$page.props.errors;
    },

    hasErrors() {
      return Object.keys(this.errors).length > 0;
    },
  },
};
</script>
