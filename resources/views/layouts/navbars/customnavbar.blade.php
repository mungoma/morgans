@auth()
    @include('layouts.navbars.navs.customauth')
@endauth

@guest()
    @include('layouts.navbars.navs.guest')
@endguest
