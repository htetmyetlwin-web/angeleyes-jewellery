<form>
  <h3>Add a Product</h3>
  @csrf
  <div class="form-group">
    <label for="product-name">Product Name</label>
    <input class="form-control" id="product-name" name="name" value="">
  </div>
  @if (count($categories) === 0)
  <p>There is no category defined. press
    <a href="{{route('categories.create')}}">here</a> to add categories.</p>
  @else
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Category</label>
    <select class="form-control" name="category_id" id="exampleFormControlSelect1">
      @foreach ($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}
        @endforeach
    </select>
  </div>
  @endif
  <div class="form-group">
    <label for="product-name">Initial Stock</label>
    <input type="number" class="form-control" id="product-stock" name="initial_stock" value="">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="include_in_feature_list" id="product-feature-check">
    <label class="form-check-label" for="product-feature-check">Put in feature list</label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="product-new-check" name="include_in_new_list">
    <label class="form-check-label" for="product-new-check">Put in new items list</label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="visible" id="product-visible">
    <label class="form-check-label" for="product-visible">Visible</label>
  </div>
  <div class="mb-3">
    <label for="product-photo" class="form-label">Upload File</label>
    <input class="form-control" type="file" id="product-photo" name="phoots" multiple>
  </div>

  <button type="submit" class="btn btn-primary">Add Product</button>
</form>