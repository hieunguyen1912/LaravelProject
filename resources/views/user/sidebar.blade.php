<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Route::is('user_dashboard') ? 'active' : '' }}">
        <a href="{{ route('user_dashboard') }}" class="{{ Route::is('user_dashboard') ? 'text-white' : ''}}">Dashboard</a>
    </li>
    <!-- <li class="list-group-item">
        <a href="user-order.html">Orders</a>
    </li> -->
    <!-- <li class="list-group-item">
        <a href="user-wishlist.html">Wishlist</a>
    </li> -->
    <!-- <li class="list-group-item">
        <a href="user-message.html">Message</a>
    </li> -->
    <!-- <li class="list-group-item">
        <a href="user-review.html">Reviews</a>
    </li> -->
    <li class="list-group-item {{ Route::is('user_profile') ? 'active' : '' }}">
        <a href="{{ route('user_profile_submit') }}" class="{{ Route::is('user_profile') ? 'text-white' : ''}}">Edit Profile</a>
    </li>
    <li class="list-group-item">
        <a href="{{ route('user_logout') }}" class="{{ Route::is('user_logout') ? 'text-white' : ''}}">Logout</a>
    </li>
</ul>