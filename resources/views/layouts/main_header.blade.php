<section class="nav-bar">
    <div class="content">
        <a href="{{ url('/') }}" class="logo" style="background: url() no-repeat;">
        	<img src="{!! asset(Storage::disk(env( 'DISK', 'local'))->url(setting('site.logo'))) !!}" alt="">
        </a>
        
        <nav class="nav">
            <div class="spacer">
			    @foreach($items as $menu_item)
			        <a class="nav__link" href="{{ $menu_item->link() }}" >{{ $menu_item->title }}</a>
			    @endforeach
            </div><!--spacer-->
        </nav>

        <div class="nav-bar__right">
            <a href="#" class="nav-bar__link">
                <svg class="svg-icon icon-search pos-center"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-search"></use></svg>
            </a>

            <a href="#" class="nav-bar__link">
                <i class="nav-bar__link-count">3</i>
                <svg class="svg-icon icon-basket pos-center"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-basket"></use></svg>
            </a>

            <span class="menu__nav"></span>

        </div><!--nav-bar__right-->

    </div><!--content-->

</section><!--nav-bar-->
