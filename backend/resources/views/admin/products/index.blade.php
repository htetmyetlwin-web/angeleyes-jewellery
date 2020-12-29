<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Description</th>
      <th scope="col">Stock</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($products as $product)
      <tr>
        <th scope="row">1</th>
        <td>{{$product->name}}</td>
        <td>{{$product->}}</td>
        <td>@mdo</td>
      </tr>    
    @empty
        
    @endforelse
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>