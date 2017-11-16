<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User 2. Auth Error</div>

                    <div class="panel-body">
                        I'm an example component!

                        {{ user.name }} | {{ user.email }}
                   file=.env </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data(){
          return {

              user : null,

          }

        },
        mounted() {
            console.log('Component mounted.')

            //todo mirar api axios per retornar headers html


            axios.get('api/user',{
                headers: {'Authorization' : 'Bearer 9NRiF9JBNVmMHYfueLrXlNmSIEZdkorXZ0wuD3UOEhFyVZaJyUIXGwdvaLmA', 'HEADER1': 'HEADER1'}
            }).then(response => {

                this.user = response.data

            }).catch(error => {
                console.log(error)
            })

        }
    }
</script>
