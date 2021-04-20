<template>
  <div>
    <Navbar />
    <main id="page-container">
      <div id="content-wrap">
        <jet-authentication-card>
          <div class="card-body">
            <form @submit.prevent="submit">
              <h2 class="text-center mb-3">init on serviso</h2>
              <hr class="mt-4" />
              <h4 class="text-center mb-4">or login with email</h4>

              <div class="form-group row">
                <div class="col-md-12">
                  <input
                    class="form-control"
                    :class="{ 'is-invalid': errors.email }"
                    id="email"
                    type="email"
                    v-model="form.email"
                    placeholder="Email"
                    required
                    autofocus
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
                    autocomplete="current-password"
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
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <jet-checkbox
                    id="remember_me"
                    name="remember"
                    v-model:checked="form.remember"
                  />

                  <label class="custom-control-label" for="remember_me">
                    Remember Me
                  </label>
                </div>
              </div>
              <div class="form-group row mb-0">
                <div class="col-md-12">
                  <button
                    class="btn btn-primary btn-block"
                    :class="{ 'text-white-50': form.processing }"
                    :disabled="form.processing"
                  >
                    <p class="d-inline">Login</p>
                  </button>

                  <div class="mt-3">
                    <inertia-link
                      v-if="canResetPassword"
                      :href="route('password.request')"
                    >
                      Forgot your password?
                    </inertia-link>
                  </div>
                </div>
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
import JetCheckbox from "@/Jetstream/Checkbox";
import Navbar from "@/Layouts/Navbar";

export default {
  components: {
    JetAuthenticationCard,
    JetCheckbox,
    Navbar
  },
  props: {
    canResetPassword: Boolean,
    status: String,
  },
  data() {
    return {
      form: this.$inertia.form({
        email: "",
        password: "",
        remember: false,
      }),
    };
  },
  methods: {
    submit() {
      this.form
        .transform((data) => ({
          ...data,
          remember: this.form.remember ? "on" : "",
        }))
        .post(this.route("login"), {
          onFinish: () => {
            this.form.reset("password");
          },
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
