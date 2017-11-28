<div id="cssmenu" class="align-center">
  <ul>
    <li id="homepage-link" class=""><a href="{{ route('homepage') }}"><span>Блог</span></a></li>
    <li id="postList-link" class=""><a href="{{ route('postList') }}"><span>Статьи</span></a></li>
    <li><a href="gallery.html"><span>Gallery</span></a></li>
    <li class="has-sub"><a href="archive.html"><span>Blog</span></a>
      <ul>
        <li class="has-sub"><a href="#"><span>Item 1</span></a>
          <ul>
            <li><a href="#"><span>Sub Item</span></a></li>
            <li class="last"><a href="#"><span>Sub Item</span></a></li>
          </ul>
        </li>
        <li class="has-sub"><a href="#"><span>Item 2</span></a>
          <ul>
            <li><a href="#"><span>Sub Item</span></a></li>
            <li class="last"><a href="#"><span>Sub Item</span></a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="single.html"><span>About</span></a></li>
    <li id="contact-link" class="last" ><a href="{{ route('contacts') }}"><span>Контакты</span></a></li>
  </ul>
</div>
