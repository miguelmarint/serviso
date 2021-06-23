<template>
  <div>
    <app-layout>
      <template #titleSection
        ><h3 class="d-inline align-middle">
          {{ __("scoops.title") }}
        </h3></template
      >
      <div>
        <div class="card bg-white rounded">
          <div class="card-body">
            <form @submit.prevent="submit">
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="name">Título</label>
                  <input
                    id="title"
                    type="text"
                    v-model="form.title"
                    class="form-control"
                    :class="{ 'is-invalid': errors.title }"
                    placeholder="Título"
                    autocomplete="title"
                    required
                    autofocus
                  />

                  <span
                    v-if="errors.title"
                    class="invalid-feedback"
                    role="alert"
                  >
                    <strong>{{ errors.title }}</strong>
                  </span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="name">Autor</label>
                  <input
                    id="author"
                    type="text"
                    v-model="form.author"
                    class="form-control"
                    :class="{ 'is-invalid': errors.author }"
                    placeholder="Autor"
                    autocomplete="author"
                    required
                    autofocus
                  />

                  <span
                    v-if="errors.author"
                    class="invalid-feedback"
                    role="alert"
                  >
                    <strong>{{ errors.author }}</strong>
                  </span>
                </div>
                <div class="col-md-6">
                  <label for="name">Referencia</label>
                  <input
                    id="reference"
                    type="text"
                    v-model="form.reference"
                    class="form-control"
                    :class="{ 'is-invalid': errors.reference }"
                    placeholder="Referencia"
                    autocomplete="reference"
                    required
                    autofocus
                  />

                  <span
                    v-if="errors.reference"
                    class="invalid-feedback"
                    role="alert"
                  >
                    <strong>{{ errors.reference }}</strong>
                  </span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 content">
                  <editor
                    :api-key="$page.props.TINY_KEY"
                    v-model="form.content"
                    :init="init"
                  />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </app-layout>
    <a
      class="float btn btn-success rounded-pill float-right"
      role="button"
      data-toggle="tooltip"
      data-placement="top"
      title="Crear noticia"
      @click="submit"
      :class="{ 'text-white-50': form.processing }"
      :disabled="form.processing"
    >
      <i class="fas fa-save my-float"></i>
    </a>
  </div>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Editor from "@tinymce/tinymce-vue";
export default {
  data() {
    return {
      form: this.$inertia.form({
        title: null,
        author: null,
        reference: null,
        content: null,
      }),
      init: {
        height: 500,
        menubar: true,
        branding: false,
        automatic_uploads: false,
        images_upload_url: "#",
        plugins: [
          "advlist autolink lists link image charmap print preview anchor",
          "searchreplace visualblocks code fullscreen",
          "insertdatetime media table paste code help wordcount",
          "code table quickbars media",
        ],
        toolbar:
          "fontsizeselect | bold italic underline strikethrough removeformat subscript superscript | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent blockquote undo redo | fontselect",
      },
    };
  },
  components: {
    AppLayout,
    editor: Editor,
  },
  methods: {
    submit() {
      this.form.post(this.route("scoops.store"), {});
    },
    formatFiles() {
      let urls = this.getAttrFromString(this.form.content, "img", "src");
      urls.forEach((url) => {
        console.log(url);
      });
    },
    getAttrFromString(str, node, attr) {
      var regex = new RegExp("<" + node + " .*?" + attr + '="(.*?)"', "gi"),
        result,
        res = [];
      while ((result = regex.exec(str))) {
        res.push(result[1]);
      }
      return res;
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

<style scoped>
.content textarea {
  display: none;
}
</style>