<form method="POST" action="{{route('categories.store')}}">
    <h3>Add a Category</h3>
    @csrf
    <div class="form-group">
      <label for="product-name">Category Name</label>
      <input class="form-control" id="product-name" name="name" value="">
    </div>
    <button type="submit" class="btn btn-primary">Add Category</button>
</form>