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
        <button @click = "open=false" class="click">Hide</button>
        <button @click = "open=true" class="click">Show</button>
        <button @click = "open=!open" class="click">Toggle</button>
        <button @click = "toggle()" class="click">Using built in function</button>
        <div x-show="open" x-transition style="width:500px;height:400px;background-color:blanchedalmond;padding:5px;">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum mollitia nam ab nisi eum laborum deserunt, nihil voluptates qui natus quia dignissimos esse quae sint molestiae necessitatibus in, commodi ex asperiores enim, neque accusantium autem excepturi impedit. Et ipsa voluptatibus assumenda accusantium doloremque sed suscipit enim, recusandae reiciendis vel at rerum, blanditiis dolores nemo amet animi debitis.</p>
        </div>
    </div>
<script>
    const data ={
        open:false,
        toggle(){
         this.open = !this.open;
        }
    }
</script>
</body>
</html>
