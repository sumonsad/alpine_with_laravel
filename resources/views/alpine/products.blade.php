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
    <h1 style="text-align:center;color;">Products List</h1>
    <div x-data="data">
       <table>
        <thead>
            <tr>
                <th>SL#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <template x-for="product,index in products" :key="index">
                <tr>
                <td x-text="index+1"></td>
                <td x-text="product.id"></td>
                <td x-text="product.name"></td>
                <td x-text="product.description"></td>
                <td x-text="product.price"></td>
            </tr>
                {{-- <li x-text="person.name"></li> --}}
                {{-- <li x-text="`${index} - ${person.name}`"></li> --}}
            </template>
        </tbody>
       </table>
    </div>
<script>
    const data ={
        products:@json($products)
    }
</script>
</body>
</html>
