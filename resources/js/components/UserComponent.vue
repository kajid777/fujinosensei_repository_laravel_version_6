<template>
    
    <div>
        
        
        <ul>
            <li v-for="user in users">{{ user.name }}</li>
        </ul>
        
    </div>
            
</template>

<script>
    export default {
        data(){
            return {
                users: []
            }
        },
        mounted() {
            axios.get('/users').then(response => this.users = response.data)
        }
    }
</script>
