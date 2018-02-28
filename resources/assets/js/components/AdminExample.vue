<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div>
                      <table class="table table-bordered table-stripped">
                        <thead>
                          <tr>
                            <td>user id</td>
                            <td>email</td>
                            <td>login</td>
                            <td>role</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="user in users">
                            <td>{{user.id}}</td>
                            <td>{{user.email}}</td>
                            <td>{{user.name}}</td>
                            <td>{{userRoles[user.role_id-1].role}}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><br>

                    <div>
                        <sub-example></sub-example>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SubExample from './SubExample.vue';
    export default {
      props: [
        'route_testuser',
      ],
      components:{
        SubExample
      },
      data() {
        return {
          users: Array,
          userRoles: Array,
        }
      },
      methods: {
        index(){
          let self = this;
          this.$http.get(this.route_testuser).then(response => {
            console.log(response.data);
            self.users = response.data['users'];
            self.userRoles = response.data['roles'];
          }, response => {
            console.log('ayyy lmao, error');
          });
        }
      },
        created() {
            this.index();
        }
    }
</script>
