<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <div class="footer__contact">
                <h2 class="heading contact-heading">Đăng Ký Nhận Tư Vấn</h2>
                <form action="" method="POST" class="contact-form">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="input">Họ và Tên:</label>
                        <input type="text" id="name" name="name" placeholder="Nhập họ và tên" required
                            class="text" />
                    </div>
                    <div class="form-group">
                        <label for="email" class="input">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Nhập email" required
                            class="text" />
                    </div>
                    <div class="form-group">
                        <label for="phone" class="input">Số Điện Thoại:</label>
                        <input type="tel" id="phone" name="phone" placeholder="Nhập số điện thoại" required
                            class="text" />
                    </div>
                    <button type="submit" class="btn btn-contact">Gửi Thông Tin</button>
                </form>
            </div>
            <div class="footer__about">
                <h3 class="heading footer__heading">Fashion Shop</h3>
                <p class="decs">Website thời trang hàng đầu, cung cấp những sản phẩm tốt nhất.</p>
            </div>
            <div class="footer__links">
                <h3 class="heading footer__heading">Liên kết nhanh</h3>
                <ul>
                    <li class="footer__link"><a href="#!">Trang Chủ</a></li>
                    <li class="footer__link"><a href="#!">Sản Phẩm</a></li>
                    <li class="footer__link"><a href="#!">Giới Thiệu</a></li>
                    <li class="footer__link"><a href="#!">Liên Hệ</a></li>
                </ul>
            </div>
            <div class="footer__social">
                <h3 class="heading footer__heading">Kết nối</h3>
                <div class="contact__link">
                    <p class="desc">Email</p>
                    <a href="mailto:manhdinh150605@gmail.com" class="mail">manhdinh150605@gmail.com</a>
                </div>
                <div class="contact__link">
                    <p class="desc">Số điện thoại</p>
                    <a href="tel:+0326365508" class="tel">+0326365508</a>
                </div>
                <div class="contact__link">
                    <p class="desc">Facebook</p>
                    <a href="https://www.facebook.com/profile.php?id=100064146853196&mibextid=ZbWKwL" class="facebook"
                        target="_blank">Nguyễn Mạnh</a>
                </div>
                <div class="contact__link">
                    <p class="desc">Địa chỉ</p>
                    <p>470 Trần Đại Nghĩa, Nghũ Hành Sơn, Đà Nẵng</p>
                </div>
                <a href="#!" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="#!" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="#!" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="#!" target="_blank"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </div>
</footer>
