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
            <div class="table-responsive">
              <table class="table table-striped" id="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Creado en</th>
                    <th class="text-muted">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="scoop in scoops" :key="scoop.id">
                    <td>{{ scoop.id }}</td>
                    <td>{{ scoop.title }}</td>
                    <td>{{ scoop.created_at }}</td>
                    <td>
                      <inertia-link
                        class="btn btn-link d-inline p-0 mr-2 text-decoration-none"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="Editar"
                        :href="route('scoops.edit', scoop.id)"
                      >
                        <span>
                          <i class="fas fa-pen" aria-hidden="true"></i>
                        </span>
                      </inertia-link>
                      <inertia-link
                        class="btn btn-link d-inline p-0 mr-2 text-decoration-none"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="ver"
                        :href="route('scoops.show', scoop.id)"
                      >
                        <span>
                          <i class="fas fa-eye" aria-hidden="true"></i>
                        </span>
                      </inertia-link>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </app-layout>
    <inertia-link
      class="float btn btn-primary rounded-pill float-right"
      role="button"
      data-toggle="tooltip"
      data-placement="top"
      title="Crear noticia"
      :href="route('scoops.create')"
    >
      <i class="fas fa-plus my-float"></i>
    </inertia-link>
  </div>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
export default {
  props: ["scoops"],
  components: {
    AppLayout,
  },
  mounted() {
    $("#table").DataTable({
      pageLength: 25,
      language: {
        url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json",
      },
    });
  },
};
</script>

<style scoped>
</style>