<template>
    
    <div>
        <button class="startButton">START</button>
        
        <ul>
            <li v-for="problem in problems">{{ problem.id }}</li>
        </ul>
        
    </div>
            
</template>

<script>
    export default {
        data(){
            return {
                problems: []
            }
        },
        mounted() {
            axios.get('/problems').then(response => this.problems = response.data)
        }
    }
</script>
