
<nav class="navbar flex-center">

    <ul class="">
        <li><a href="{{ route('home') }}"  class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('products')}}" class="{{ Route::currentRouteName() === 'products' ? 'active' : '' }}">Products</a></li>
        <li><a href="{{ route('contacts')}}" class="{{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}">Contacts</a></li>
    </ul>

</nav>
