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

    <div x-data="data">
       <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>age</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <template x-for="person,index in persons" :key="index">
                <tr>
                <td x-text="`${person.name}`"></td>
                <td x-text="`${person.age}`"></td>
                <td x-text="`${person.email}`"></td>
            </tr>
                {{-- <li x-text="person.name"></li> --}}
                {{-- <li x-text="`${index} - ${person.name}`"></li> --}}
            </template>
        </tbody>
       </table>
    </div>
<script>
    const data ={
        persons:[
            {name:'john doe',age:25,email:'john@gamil.com'},
            {name:'jane doe',age:30,email:'jane@gamil.com'},
            {name:'Raiyan',age:6,email:'raiyan@gamil.com'},
        ]
    }
</script>
</body>
</html>
