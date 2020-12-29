<h3>Categories</h3>
@if (count($categories) === 0)
  <p>There is no category defined. press <a href="{{route('categories.create')}}">here</a> to add categories.</p>
@else
  <ul>
    @foreach ($categories as $category)
        <li>{{$category->name}}</li>
    @endforeach
  </ul>
@endif
<a href="{{route('categories.create')}}">Create a category</a>