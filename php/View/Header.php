<div id="header">
    <!-- Logo -->
    <a href="./index.php" class="header__logo-link">
        <img class="header__logo-img" src="../assets/images/other/logo.png" alt="logo">
    </a>

    <!-- Search -->
    <div class="search-bar">
        <input class="search-bar__text" type="text" placeholder="Tìm kiếm sản phẩm">
        <!-- <img class="search-bar__icon" src="../assets/icons/search.png"> -->
        <lord-icon src="https://cdn.lordicon.com/pvbutfdk.json" trigger="loop-on-hover" class="search-bar__icon">
        </lord-icon>
    </div>

    <!-- Advanced -->
    <div class="header__advanced">
        <a href="./cart.php">
            <lord-icon src="https://cdn.lordicon.com/aoggitwj.json" trigger="loop-on-hover" colors="primary:#ffffff" class="header__advanced-icon">
            </lord-icon>
        </a>
        <lord-icon src="https://cdn.lordicon.com/kkcllwsu.json" trigger="loop-on-hover" colors="primary:#ffffff" class="header__advanced-icon">
        </lord-icon>
        <div class="header__user">
            <lord-icon src="https://cdn.lordicon.com/dklbhvrt.json" trigger="loop-on-hover" colors="primary:#ffffff" class="header__advanced-icon">
            </lord-icon>
            <ul class="header__user-dropdown">
                <a href="./profile.php" class="header__user-dropdown-item" style="border-radius: 12px 12px 0px 0px;">Tài Khoản</a>
                <br>
                <a href="./yourStore.php" class="header__user-dropdown-item">Cửa Hàng Của Bạn</a>
                <br>
                <a href="./orderList.php" class="header__user-dropdown-item">Đơn Mua</a>
                <br>
                <a href="./orderList-seller.php" class="header__user-dropdown-item">Đơn Bán</a>
                <br>
                <a href="./logout.php" class="header__user-dropdown-item" style="border-radius: 0px 0px 12px 12px;">Đăng xuất</a>
            </ul>
        </div>
    </div>
</div>