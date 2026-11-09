<?php
function headerModule($activePage = '')
{
    $homePrefix = $activePage === 'main' ? '' : 'index.php';
?>
    <div class="header__menu-bg invisible"></div>
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-top__inner">
                    <div class="header-top__menu" aria-hidden="true">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="header-top__bg">
                        <div class="container">
                            <nav class="header-top-burger__navigation" aria-label="Main navigation">
                                <a class="header-top__link" href="../index.php">Main</a>
                                <a class="header-top__link<?= in_array($activePage, ['products', 'product'], true) ? ' link--active' : '' ?>" href="products.php">Product</a>
                                <a class="header-top__link<?= $activePage === 'faq' ? ' link--active' : '' ?>" href="../FAQ.php">FAQ</a>
                                <a class="header-top__link<?= $activePage === 'support' ? ' link--active' : '' ?>" href="../Form.php">Support</a>
                                <a class="header-top__link<?= $activePage === 'about' ? ' link--active' : '' ?>" href="About.php">About</a>
                            </nav>
                        </div>
                    </div>
                    <nav class="header-top__navigation" aria-label="Main navigation">
                        <a class="header-top__link<?= $activePage === 'main' ? ' link--active' : '' ?>" href="index.php">Main</a>
                        <a class="header-top__link<?= in_array($activePage, ['products', 'product'], true) ? ' link--active' : '' ?>" href="products.php">Products</a>
                        <a class="header-top__link<?= $activePage === 'support' ? ' link--active' : '' ?>" href="../Form.php">Support</a>
                        <a class="header-top__link<?= $activePage === 'about' ? ' link--active' : '' ?>" href="About.php">About</a>
                    </nav>
                    <div class="bucket_container">
                        <a class="bucket" href="./Cart-page.php" aria-label="Cart">
                            <svg width="24" height="24" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2_188)">
                                    <path
                                        d="M37.721 30L43.388 13H12.721L10.721 7H5V9H9.279L15.928 28.948L11.461 39H39V37H14.539L17.65 30H37.721ZM40.612 15L36.279 28H17.721L13.388 15H40.612Z"
                                        fill="black" />
                                    <path
                                        d="M20 44C21.1046 44 22 43.1046 22 42C22 40.8954 21.1046 40 20 40C18.8954 40 18 40.8954 18 42C18 43.1046 18.8954 44 20 44Z"
                                        fill="black" />
                                    <path
                                        d="M32 44C33.1046 44 34 43.1046 34 42C34 40.8954 33.1046 40 32 40C30.8954 40 30 40.8954 30 42C30 43.1046 30.8954 44 32 44Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2_188">
                                        <rect width="48" height="48" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class=""></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php
}

function footerModule($activePage = '')
{
?>
    <footer class="footer">
        <div class="container footer__inner">
            <div class="footer__socials" aria-label="Social media">
                <a class="footer__social-icon" href="https://in.nothing.tech/collections/cmf" target="_blank" rel="noopener">
                    <img src="image/icons/tw.svg" alt="Twitter">
                </a>
                <a class="footer__social-icon" href="https://in.nothing.tech/collections/cmf" target="_blank" rel="noopener">
                    <img src="image/icons/inst.svg" alt="Instagram">
                </a>
                <a class="footer__social-icon" href="https://in.nothing.tech/collections/cmf" target="_blank" rel="noopener">
                    <img src="image/icons/yt.svg" alt="YouTube">
                </a>
            </div>
            <nav class="footer__navigation" aria-label="Company">
                <a class="footer__link<?= $activePage === 'support' ? ' link--active' : '' ?>" href="../Form.php">Support</a>
                <a class="footer__link<?= $activePage === 'faq' ? ' link--active' : '' ?>" href="../FAQ.php">FAQ</a>
            </nav>
            <nav class="footer__legal" aria-label="Legal">
                <a class="footer__link" href="#privacy">Privacy</a>
                <a class="footer__link" href="#terms">Terms</a>
            </nav>
        </div>
    </footer>
<?php
};
?>