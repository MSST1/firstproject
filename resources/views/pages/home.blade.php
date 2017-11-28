@extends('base')

@section('title')
Домашняя страница
@endsection

@section('content')
<section class="content-box box-1">
  <div class="zerogrid">
    <div class="wrap-box"><!--Start Box-->
      <div class="box-header">
        <h2>Блог</h2>
      </div>
      <div class="box-content">
        <p>Это просто очередной тренировочный блог одного псевдопрограммиста.</p>
      </div>
    </div>
  </div>
  <div id="owl-slide" class="owl-carousel">
    @foreach($content as $post)
      <a href="posts/{{ $post->id }}"><div class="item">
        @if ($post->imgSrc != null )
          <img src="" /><!--Сюда - ссылку на картинку поста -->
        @else
          <img src="http://placehold.it/640x320" />
        @endif
        <p>{{ $post->title }}</p>
      </div></a>
    @endforeach
</div>
</section>
@endsection

@section('JS')
<script type="text/javascript">
  let activeMenuElement = document.querySelector("#homepage-link");
  activeMenuElement.classList.add("active");//Перепили потом под виджет, и нормально сделай!
  //Чтобы не под каждую страницу свой жсник был

  $(document).ready(function() {
    $("#owl-slide").owlCarousel({
    autoPlay: 3000,
    items : 1,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [979,1],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],
    navigation: true,
    navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
    pagination: false
    });
  });
</script>
@endsection
