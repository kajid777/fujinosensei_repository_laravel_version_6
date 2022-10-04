<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Example</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

    
    <div id="app">
        
        <p v-for="user in users">{{ user.id }}</p>
    </div>
    
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        new Vue({
            el:"#app",
            data:{
                users: [],
                problems: []
            },
            
            
            mounted:function(){
                axios.get('/users').then(response => this.users = response.data)
                axios.get('/problems').then(response => this.problems = response.data)
                
            }
            
        })
    </script>
</body>
</html>