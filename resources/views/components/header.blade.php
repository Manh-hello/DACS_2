<header class="header" id="header">
    <div class="container">
        <div class="header-content">
            <div class="header__logo">
                <a href="#!">
                    <img src="{{ asset('storage/images/logo.svg') }}" alt="logo" class="header__logo-image" />
                </a>
                <a href="#!">
                    <h1 class="header__title heading">Fashion Shop</h1>
                </a>
            </div>
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__list-item">
                        <a href="#!" class="{{ Request::is('/') ? 'active' : '' }} nav__link">Trang
                            Chủ</a>
                    </li>
                    <li class="nav__list-item">
                        <a href="#!" class="nav__link">Sản Phẩm</a>
                    </li>
                    <li class="nav__list-item">
                        <a href="#!" class="nav__link">Giới Thiệu</a>
                    </li>
                    <li class="nav__list-item">
                        <a href="#!" class="nav__link">Liên Hệ</a>
                    </li>
                </ul>
            </nav>
            <div class="header__actions">
                <a href="/favorite" class="header__icon-link">
                    <i class="fa-regular fa-heart"></i>
                </a>
                <a href="/shopping_cart" class="header__icon-link">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <a href="#!" class="btn btn-log">Login</a>
                <a href="#!" class="btn btn-register">Register</a>
            </div>
        </div>
    </div>
</header>
