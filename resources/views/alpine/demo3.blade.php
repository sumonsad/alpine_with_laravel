<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
    <h1>Advanced javascript</h1>
    <h2>{{$title}}</h2>

    <div x-data="person">
        <p x-text="name"></p>
        <p x-text="age"></p>
        <p x-text="email"></p>
        <button @click = "age=7" class="click">click me</button>
        <input type="text" name="" id="" x-model="name">
        <input type="text" name="" id="" x-model="age">
        <input type="text" name="" id="" x-model="email">
    </div>
<script>
    const person ={
        name:'Raiyan',
        age: 6,
        email:'raiyan@gmail.com'
    }
</script>
</body>
</html>
