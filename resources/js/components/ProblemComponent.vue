<template>
    
    <div>
        
        
            
            
        <ul>
            <li class="question" v-for="problem in problems">{{ problem.content }}</li>
        </ul>
        <div class="clear">CLEAR!!</div>
        <input v-model="typeBox" type="text" class="typeForm">
        
    </div>
            
</template>

<script>
    export default {
        data(){
            return {
                
                current_question:"",
                problems: [],
                typeBox:""
            }
        },
        
        mounted() {
            axios.get('/problems').then(response => this.problems = response.data)
            this.current_question = this.problems[0].content
        },
        watch:{
                typeBox:function(e){
                    if(e == this.current_question){
                        this.questions.splice(0,1)
                        this.current_question = this.questions[0]
                        this.typeBox=""
                        this.current_question_counts = this.current_question_counts + 1
                    }
                }
        }
    }
</script>
