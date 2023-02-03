<table>
    <tr>
        <th>Id danh muc</th>
        <th>Ten danh muc</th>
        <th>Id san pham</th>
        <th>Ten san pham</th>
    </tr>
    @foreach ($categories as $key => $category)
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->products->id}}</td>
        <td>{{$category->products->name}}</td>
    </tr>
    @endforeach
 