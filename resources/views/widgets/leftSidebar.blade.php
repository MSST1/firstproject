<p>Just left sidebar</p><br>
Что здесь можно поместить?<br><br>
Категории:<br>
@foreach($categories as $category)
  <a href="/category/{{ $category->categoryName }}">{{ $category->categoryName }}</a><br><br>
@endforeach
