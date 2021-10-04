<template>
  <div class="">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Kandidat liste</div>

          <div class="card-body">
            <table class="table">
              <tr>
                <th>ID</th>
                <th>Navn</th>
                <th>E-post</th>
              </tr>
              <tr v-for="item in list" :key="item.id">
                <td>{{ item.id }}</td>
                <td>{{ item.name }}</td>
                <td>{{ item.email }}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  mounted() {
    // API route: /api/v1/candidate
    console.log("Component mounted.");
  },
  data() {
    return {
      loading: false,
      list: null,
      error: null,
    };
  },
  created() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      axios
        .get("/api/v1/candidate")
        .then((response) => {
          this.list = response.data;
        })
        .catch((error) => {
          console.log(error);
        })
        .finally(() => (this.loading = false));
    },
  },
};
</script>
