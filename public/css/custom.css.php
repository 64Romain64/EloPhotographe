<?php 
header("Content-type: text/css; charset: UTF-8");
echo cs_get_option( 'custom-css' );


$mobile = cs_get_option('mobile_menu');

$min_mobile = isset($mobile) && $mobile ? '1025px' : '992px';
$max_mobile = isset($mobile) && $mobile ? '1024px' : '991px'; ?>


/*------------------------------------------------------*/
/*---------------------- 51 .MENU -------------------*/

.header_top_bg {
    position: relative;
    z-index: 2000;
    background-color: #ffffff; }

.header_top_bg.fixed-header {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 100; }

header {
    position: relative;
    width: 100%;
    z-index: 999;
    text-align: center; }

header.absolute {
    position: absolute;
    margin-bottom: 0; }

header a.logo {
    text-decoration: none;
    display: block; }

header.zindex,
footer.zindex {
    z-index: 1 !important; }

.header_top_bg.enable_fixed.fixed {
    position: fixed;
    z-index: 1000;
    width: 100%;
    top: 0; }

.header_trans-fixed.header_top_bg {
    background-color: transparent;
    position: fixed;
    z-index: 1000;
    top: 0;
    width: 100%; }

.header_trans-fixed.header_top_bg.open header .logo span,
.header_trans-fixed.header_top_bg.open header .mob-nav i {
    color: #1b1b1b; }

.single-post .header_trans-fixed.bg-fixed-color {
    margin-left: 0;
    width: 100%; }

.top-menu {
    padding-bottom: 10px; }

.top-menu .logo {
    display: inline-block; }

.top-menu .logo span {
    font-family: "ArcaMajora3 Bold", sans-serif;
    font-size: 22px;
    line-height: 24px;
    font-weight: 400;
    letter-spacing: 3px;
    min-width: 170px;
    text-align: center;
    background-color: transparent;
    color: #1b1b1b;
    display: inline-block; }

.right-menu .logo span {
    vertical-align: middle;
    text-align: left;
    text-transform: uppercase;
    font-family: "ArcaMajora3 Bold", sans-serif;
    font-size: 22px;
    line-height: 24px;
    font-weight: 400;
    letter-spacing: 3px;
    margin: 0;
    color: #1b1b1b; }

.header_trans-fixed.header_top_bg .logo span {
    color: #fff; }

#topmenu {
    width: 100%;
    text-align: center;
    background: #ffffff; }

#topmenu ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: inline-block; }

#topmenu ul li {
    display: inline-block;
    position: relative; }

#topmenu ul li a {
    font-size: 12px;
    font-family: "ArcaMajora3 Bold", sans-serif;
    color: #1b1b1b;
    font-weight: 400;
    display: block;
    text-align: left;
    text-transform: uppercase;
    text-decoration: none;
    padding: 0 20px 5px;
    line-height: 45px;
    letter-spacing: 0.96px;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
    -webkit-font-smoothing: antialiased; }

.header_trans-fixed.header_top_bg #topmenu ul li a {
    color: #fff; }

.header_trans-fixed.header_top_bg.open #topmenu ul li a {
    color: #1b1b1b; }

.top-menu #topmenu > ul > li > a,
.top-menu #topmenu ul.social > li > a {
    padding: 0; }

#topmenu .social .fa {
    font-size: 15px; }

.top-menu .logo:hover {
    opacity: 1 !important; }

.top-menu .logo img {
    max-height: 100px; }

#topmenu ul ul {
    position: absolute;
    z-index: 999;
    left: 0;
    top: 50px;
    min-width: 250px;
    display: none;
    box-sizing: border-box; }

#topmenu ul ul li::before {
    content: '';
    display: table;
    clear: both; }

#topmenu ul ul li a {
    font-size: 12px;
    line-height: 26px;
    padding: 3px 30px;
    font-family: "ArcaMajora3 Bold", sans-serif;
    letter-spacing: 0.72px;
    display: block;
    width: 100%;
    position: relative;
    -webkit-font-smoothing: antialiased; }

#topmenu > ul > li > ul > li:hover ul {
    display: block; }

#topmenu > ul > li > ul > li > ul {
    left: 101%;
    top: -15px; }

.mob-nav {
    display: none;
    width: 20px;
    height: 20px;
    margin: 0 auto 12px;
    font-size: 14px;
    color: #1b1b1b;
    opacity: 1; }

.mob-nav:hover {
    opacity: 0.7; }

.header_trans-fixed .mob-nav i {
    color: #fff; }

.header_trans-fixed.header_top_bg {
    -webkit-transition: background-color 300ms ease;
    -moz-transition: background-color 300ms ease;
    -ms-transition: background-color 300ms ease;
    -o-transition: background-color 300ms ease;
    transition: background-color 300ms ease; }

.header_trans-fixed.header_top_bg.bg-fixed-color {
    background-color: #1B1B1B; }

header:not(.aside-menu) #topmenu ul ul li a {
    text-transform: uppercase !important; }

header:not(.aside-menu) #topmenu ul ul ul li a {
    text-transform: lowercase !important; }

.whizz-top-social {
    display: inline-block;
    margin-left: 0px;
    position: relative;
    vertical-align: middle; }

.whizz-top-social .social-icon {
    display: none;
    font-size: 14px;
    color: #1b1b1b;
    opacity: 1;
    padding: 0 20px;
    cursor: pointer;
    -webkit-transition: opacity .3s ease;
    -moz-transition: opacity .3s ease;
    -ms-transition: opacity .3s ease;
    -o-transition: opacity .3s ease;
    transition: opacity 0.3s ease;
    position: relative;
    z-index: 30; }

.header_trans-fixed .whizz-top-social .social-icon {
    color: #fff; }

.whizz-top-social .social-icon:hover {
    opacity: 0.7; }

#topmenu .whizz-top-social .social {
    margin-left: 0; }

#topmenu .social li {
    display: inline-block;
    margin-left: 12px; }

#topmenu .whizz-top-social .social li a {
    margin-left: 0;
    color: #1b1b1b;
    opacity: 1;
    -webkit-transition: opacity .3s ease;
    -moz-transition: opacity .3s ease;
    -ms-transition: opacity .3s ease;
    -o-transition: opacity .3s ease;
    transition: opacity 0.3s ease; }

.header_trans-fixed .right-menu #topmenu .whizz-top-social .social li a {
    color: #fff; }

#topmenu .whizz-top-social .social:hover a {
    opacity: 0.7; }

#topmenu .whizz-top-social .social li a:hover {
    opacity: 1; }

.header_trans-fixed .right-menu #topmenu .whizz-top-social .social {
    background-color: transparent; }

#topmenu .whizz-top-social .social li {
    margin-left: 10px; }

#topmenu .whizz-top-social .social.active {
    visibility: visible;
    opacity: 1; }

#topmenu .whizz-top-social .social li a {
    line-height: 45px; }

#topmenu ul > li > ul > li > ul {
    display: none; }

#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_price {
    color: #fff; }

.mini-cart-wrapper {
    display: inline-block;
    position: relative;
    vertical-align: middle; }

.mini-cart-wrapper .whizz-shop-icon {
    text-decoration: none;
    padding: 0 10px 3px 25px;
    font-size: 14px; }

.header_trans-fixed .mini-cart-wrapper .whizz-shop-icon::before {
    color: #fff; }

.mini-cart-wrapper .whizz-shop-icon:before {
    display: inline-block;
    line-height: 33px;
    color: #1b1b1b; }

.mini-cart-wrapper .whizz-shop-icon .cart-contents {
    display: inline-block; }

.mini-cart-wrapper .whizz-shop-icon .cart-contents-count {
    display: inline-block;
    line-height: 33px;
    font-family: "ArcaMajora3 Bold";
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1.12px;
    color: #1b1b1b;
    padding-left: 3px; }

.whizz_mini_cart {
    position: absolute;
    right: 0;
    top: 50px;
    display: block;
    background-color: #1b1b1b;
    opacity: 0;
    visibility: hidden;
    min-width: 330px;
    padding: 23px 30px;
    text-align: center;
    -webkit-transition: opacity .5s ease, visibility 0.5s ease;
    -moz-transition: opacity .5s ease, visibility 0.5s ease;
    -ms-transition: opacity .5s ease, visibility 0.5s ease;
    -o-transition: opacity .5s ease, visibility 0.5s ease;
    transition: opacity 0.5s ease, visibility 0.5s ease; }

.mini-cart-wrapper:hover .whizz_mini_cart {
    opacity: 1;
    visibility: visible; }

#topmenu .whizz_mini_cart .product_list_widget {
    display: block; }

#topmenu .whizz_mini_cart .product_list_widget .empty {
    font-family: "ArcaMajora3 Bold", sans-serif;
    font-size: 18px;
    line-height: 28px;
    letter-spacing: 1.4px;
    font-weight: 400;
    color: #fff; }

#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    padding: 0;
    margin-bottom: 23px; }

#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini_cart_item_thumbnail {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 40%;
    max-width: 70px;
    margin-top: 7px; }

#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini_cart_item_thumbnail a {
    padding: 0;
    display: block; }

#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini_cart_item_thumbnail img {
    float: none;
    max-width: 70px;
    width: 100%;
    margin-left: 0; }

#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    width: 60%;
    padding-left: 20px; }

#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_name {
    font-family: "ArcaMajora3 Bold", sans-serif;
    font-size: 14px;
    line-height: 28px;
    letter-spacing: 1px;
    font-weight: 400;
    color: #fff;
    text-align: left;
    padding: 0; }

#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_quantity {
    font-family: "ArcaMajora3 Bold", sans-serif;
    font-size: 12px;
    line-height: 20px;
    letter-spacing: 2.88px;
    font-weight: 400;
    color: #b2b2b2;
    margin-bottom: 3px; }

#topmenu .whizz_mini_cart a.button {
    margin-bottom: 0;
    letter-spacing: 1.2px;
    line-height: 20px;
    position: relative;
    display: inline-block;
    font-family: "ArcaMajora3 Bold", sans-serif;
    font-weight: bold;
    box-sizing: border-box;
    padding: 10px 46px 6px 30px;
    font-size: 12px;
    text-decoration: none;
    text-transform: uppercase;
    -webkit-font-smoothing: antialiased;
    color: #fff;
    background-color: #1B1B1B;
    width: auto;
    border-radius: 0;
    border: 1px solid #fff; }

#topmenu .whizz_mini_cart a.button::after {
    content: '\f0da';
    font-family: "FontAwesome";
    position: absolute;
    top: 50%;
    right: 30px;
    color: #fff;
    font-size: 12px;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    -webkit-transition: right 300ms ease;
    -moz-transition: right 300ms ease;
    -ms-transition: right 300ms ease;
    -o-transition: right 300ms ease;
    transition: right 300ms ease; }

#topmenu .whizz_mini_cart a.button:hover::after {
    right: 20px; }

.header_trans-fixed.none {
    display: none; }

.header_trans-fixed.header_top_bg .mini-cart-wrapper .whizz-shop-icon .cart-contents-count {
    color: #fff; }

.whizz_mini_cart .product_list_widget .mini_cart_item .mini_cart_item_thumbnail img {
    height: auto; }

.socials-mob-but {
    display: none; }

.socials-mob-but:active,
.socials-mob-but:visited {
    opacity: 1; }

.header_top_bg:not(.header_trans-fixed) {
    padding-bottom: 10px; }

#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_price {
    font-size: 12px; }

.unit .mini-cart-wrapper .whizz-shop-icon {
    font-size: 25px; }

header .logo img {
    max-width: none;
    max-height: 75px; }

header .logo:hover {
    opacity: 1; }

.header_trans-fixed .f-right > div:first-child::before {
    background: #fff !important; }

@media only screen and (max-width: 1199px) {
    .whizz-top-social {
        margin-left: 5px; } }
@media (min-width: <?php echo $min_mobile; ?>) {
    .aside-menu .mini-cart-wrapper:hover .whizz_mini_cart {
        opacity: 0;
        visibility: hidden; }

    .header_trans-fixed #topmenu {
        background-color: transparent; }

    #topmenu ul ul {
        background-color: #1B1B1B;
        padding: 10px 0px; }

    .right-menu .logo,
    .right-menu #top-menu {
        display: table-cell;
        vertical-align: middle; }

    .top-menu #topmenu ul ul {
        left: -20px; }

    .top-menu .whizz-top-social {
        margin-left: 10px; }

    #topmenu ul ul li {
        display: block;
        margin-bottom: 5px; }

    #topmenu ul ul li:last-child {
        margin-bottom: 0; }

    .top-menu #topmenu > ul:not(.social) > li {
        margin: 0 10px 5px 10px;
        padding: 0; }

    #topmenu ul ul li a {
        color: #ffffff;
        text-transform: none !important;
        opacity: .7; }

    #topmenu ul ul li a {
        opacity: .7; }
    #topmenu ul ul li a:hover {
        opacity: 1; }

    #topmenu ul ul li.current-menu-item > a {
        color: #fff;
        opacity: 1; }

    .header_trans-fixed.header_top_bg #topmenu ul ul li.current-menu-item > a {
        opacity: 1; }

    #topmenu ul li:hover > ul {
        display: block; }

    #topmenu {
        display: block !important; }
    #topmenu .f-right > div {
        position: relative; }
    #topmenu .f-right > div:first-child::before {
        content: '';
        width: 1px;
        height: 15px;
        opacity: .3;
        background-color: #1b1b1b;
        position: absolute;
        right: -15px;
        top: 47%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        }
    #topmenu .f-right > div:last-child::before {
        content: none; }

    #topmenu > ul > li > ul > li > ul {
        left: -100%;
        top: -15px; }

    #topmenu ul li a {
        opacity: .7; }

    .sub-menu li a {
        z-index: 1999; }

    .pl30md {
        padding-left: 30px !important;
        padding-right: 0 !important; }

    .pr30md {
        padding-right: 30px !important;
        padding-left: 0 !important; }

    .right-menu {
        width: 100%;
        margin: auto;
        display: table;
        padding: 22px 0 13px; }
    .right-menu .f-right {
        float: right; }
    .right-menu .f-right > div {
        position: relative; }
    .right-menu .f-right > div:first-child::before {
        content: '';
        width: 1px;
        height: 15px;
        background-color: #B2B2B2;
        position: absolute;
        right: 0;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        }
    .right-menu .f-right > div:last-child::before {
        content: none; }

    .right-menu #topmenu {
        text-align: center;
        display: table-cell !important;
        margin-top: 0;
        vertical-align: middle; }

    .header_trans-fixed.header_top_bg .right-menu {
        padding: 0; }
    .header_trans-fixed.header_top_bg .right-menu #topmenu > ul > li > a {
        padding: 13px 0 13px;
        -webkit-transform: translateZ(0);
        -moz-transform: translateZ(0);
        -ms-transform: translateZ(0);
        -o-transform: translateZ(0);
        transform: translateZ(0);
      }
    .header_trans-fixed.header_top_bg .right-menu #topmenu > ul ul {
        top: 60px; }
    .header_trans-fixed.header_top_bg .right-menu #topmenu > ul ul ul {
        top: -10px; }

    .right-menu #topmenu ul ul {
        left: 10px;
        top: 44px; }

    .top-menu #topmenu ul ul {
        left: -20px;
        top: 100%; }

    .right-menu #topmenu > ul > li > ul > li > ul {
        left: 100%;
        top: -10px; }

    .top-menu #topmenu > ul > li > ul > li > ul {
        left: 100%;
        top: -10px; }

    .right-menu #topmenu .social {
        text-align: right;
        vertical-align: top; }

    .right-menu #topmenu .social li a {
        padding: 0;
        margin-left: 0; }

    .right-menu #topmenu .social li a:hover {
        opacity: 0.5;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease; }

    .right-menu #topmenu .social li a::after,
    .right-menu #topmenu .social li a::before {
        content: none; }

    .right-menu #topmenu > ul > li > a {
        position: relative;
        padding: 0;
        margin: 0 23px;
        opacity: .7; }

    .right-menu #topmenu > ul > li > a:hover,
    .top-menu #topmenu > ul > li > a:hover {
        opacity: 1; }

    .right-menu #topmenu > ul > li.current-menu-item > a,
    .top-menu #topmenu > ul > li.current-menu-item > a,
    .right-menu #topmenu > ul > li.current-menu-parent > a,
    .top-menu #topmenu > ul > li.current-menu-parent > a {
        opacity: 1;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease; }

    .right-menu .logo img {
        max-height: 75px;
        margin: 5px auto; }

    .top-menu #topmenu > ul > li:last-child > ul > li > ul {
        left: -webkit-calc(-100% - 30px);
        left: calc(-100% - 30px);
    }

    #topmenu .whizz-top-social .social {
        z-index: 25;
        text-align: left;
        -webkit-transition: opacity 0.3s ease;
        -moz-transition: opacity 0.3s ease;
        -ms-transition: opacity 0.3s ease;
        -o-transition: opacity 0.3s ease;
        transition: opacity 0.3s ease; }

    .aside-nav {
        display: none; }

    .aside-menu {
        position: fixed;
        top: 0;
        left: 0; }
    .aside-menu .topmenu {
        position: fixed;
        top: 0;
        left: -100%;
        height: 100%;
        width: 294px !important;
        padding: 50px 0;
        margin-left: 58px;
        text-align: center;
        background-color: #fff;
        box-sizing: border-box;
        outline: 0;
        z-index: 101;
        backface-visibility: hidden;
        -webkit-transition: left 0.5s cubic-bezier(0.77, 0, 0.175, 1);
        -moz-transition: left 0.5s cubic-bezier(0.77, 0, 0.175, 1);
        -ms-transition: left 0.5s cubic-bezier(0.77, 0, 0.175, 1);
        -o-transition: left 0.5s cubic-bezier(0.77, 0, 0.175, 1);
        transition: left 0.5s cubic-bezier(0.77, 0, 0.175, 1); }
    .aside-menu .topmenu.active-menu {
        left: 0; }
    .aside-menu.active-menu {
        left: 0; }
    .aside-menu.active-menu .aside-nav .aside-nav-line.line-1 {
        display: none; }
    .aside-menu.active-menu .aside-nav .aside-nav-line.line-2 {
        top: 50%;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
        }
    .aside-menu.active-menu .aside-nav .aside-nav-line.line-3 {
        top: 50%;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(-45deg); }
    .aside-menu .logo {
        position: absolute;
        z-index: 9999;
        top: 20px;
        left: 31px;
        padding: 20px 0; }
    .aside-menu .aside-nav {
        position: fixed;
        display: block;
        left: 0;
        top: 0;
        width: 58px;
        background-color: #f2f2f2;
        height: 100%;
        z-index: 1000; }
    .aside-menu .aside-nav .aside-nav-line {
        position: absolute;
        top: 50%;
        left: 18px;
        display: block;
        width: 22px;
        height: 1px;
        background-color: #212121;
        -webkit-transition:transform .3s ease;
        -moz-transition: transform .3s ease;
        -ms-transition: transform .3s ease;
        -o-transition:transform .3s ease;
        transition: transform .3s ease; }
    .aside-menu .aside-nav .aside-nav-line.line-1 {
        -webkit-transform: translateY(-6px);
        -moz-transform: translateY(-6px);
        -ms-transform: translateY(-6px);
        -o-transform: translateY(-6px);
        transform: translateY(-6px); }
    .aside-menu .aside-nav .aside-nav-line.line-3 {
        -webkit-transform: translateY(6px);
        -moz-transform: translateY(6px);
        -ms-transform: translateY(6px);
        -o-transform: translateY(6px);
        transform: translateY(6px); }
    .aside-menu .aside-nav:hover {
        opacity: 1; }
    .aside-menu .aside-nav:focus {
        opacity: 1; }
    .aside-menu .aside-nav:hover .aside-nav-line {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg); }
    .aside-menu #topmenu {
        display: table !important;
        border-right: 1px solid #f2f2f2; }
    .aside-menu #topmenu ul.menu {
        display: inline-block;
        padding-bottom: 50px;
        vertical-align: middle;
        overflow-y: auto;
        width: 100%;
        max-height: 100%;
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
    .aside-menu #topmenu ul.menu li {
        display: block; }
    .aside-menu #topmenu ul.menu li a {
        text-align: center; }
    .aside-menu #topmenu .f-right {
        float: none;
        position: absolute;
        left: 50%;
        width: -webkit-calc(100% - 35px);
        width: -moz-calc(100% - 35px);
        width: calc(100% - 35px);
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
        bottom: 40px;
        z-index: 2; }
    .aside-menu #topmenu .f-right .whizz-top-social {
        margin-left: 0; }
    .aside-menu #topmenu .f-right .whizz-top-social li {
        margin-right: 5px;
        margin-left: 5px; }
    .aside-menu #topmenu .sub-menu {
        width: 293px !important;
        position: static; }
    .aside-menu #topmenu::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 80px;
        background: #fff;
        z-index: 1; }
    .aside-menu #topmenu > ul > li:hover ul,
    .aside-menu #topmenu > ul > li > ul > li:hover ul {
        display: none; }
    .aside-menu #topmenu ul > li > ul > li > ul {
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee; }

    header:not(.aside-menu) #topmenu ul li.mega-menu {
        position: static; }

    header:not(.aside-menu).right-menu #topmenu ul .mega-menu > ul {
        width: 100%;
        left: 0;
        top: 60px; }

    header:not(.aside-menu) #topmenu ul li.mega-menu:hover > ul {
        padding-top: 25px;
        overflow: hidden; }
    header:not(.aside-menu) #topmenu ul li.mega-menu:hover > ul::before {
        content: "";
        position: absolute;
        width: 100%;
        bottom: 0;
        left: 0;
        height: 30px;
        background-color: #1B1B1B;
        z-index: 10; }

    header:not(.aside-menu) #topmenu ul li.mega-menu:hover > ul > li {
        float: left;
        width: 25%; }

    header:not(.aside-menu) #topmenu ul li.mega-menu > ul > li::before {
        content: "";
        position: absolute;
        width: 1px;
        left: 100%;
        top: 30px;
        height: 100vh;
        background-color: #353535; }

    header:not(.aside-menu) #topmenu ul li.mega-menu > ul > li:nth-child(1)::before {
        left: 25%; }

    header:not(.aside-menu) #topmenu ul li.mega-menu > ul > li:nth-child(2)::before {
        left: 50%; }

    header:not(.aside-menu) #topmenu ul li.mega-menu > ul > li:nth-child(3)::before {
        left: 75%; }

    header:not(.aside-menu) #topmenu ul li.mega-menu:hover > ul > li > a {
        text-transform: uppercase !important; }

    header:not(.aside-menu) #topmenu ul > li.mega-menu:hover > ul > li > ul {
        display: block;
        position: static;
        text-align: left;
        min-width: 100%; }

    header:not(.aside-menu) #topmenu ul > li.mega-menu:hover > ul > li > ul > li {
        display: block; }

    header:not(.aside-menu).right-menu #topmenu ul .mega-menu ul li {
        display: inline-block;
        position: static; }

    header.top-menu #topmenu ul li.mega-menu > ul {
        top: -webkit-calc(100% - 25px);
        top: calc(100% - 25px);
    }

    header.top-menu #topmenu ul li.mega-menu > ul > li::before {
        display: none; }

    header.top-menu #topmenu ul ul {
        left: 0; }

    header.top-menu #topmenu ul li.mega-menu > ul > li:nth-child(1)::before,
    header.top-menu #topmenu ul li.mega-menu > ul > li:nth-child(2)::before,
    header.top-menu #topmenu ul li.mega-menu > ul > li:nth-child(3)::before {
        left: 100%;
        display: block;
        top: 0; }

    .top-menu .logo span {
        padding: 24px 10px; }

    header.top-menu .logo span {
        padding: 15px 10px; }

    #topmenu {
        margin-top: 13px; }

    .right-menu {
        max-width: -webkit-calc(100% - 30px);
        max-width: calc(100% - 30px);
    }

    .right-menu .logo span {
        float: left; }

    .top-menu #topmenu > ul:not(.social) > li {
        margin: 0 0 5px;
        padding: 0 23px; }

    .top-menu #topmenu > ul > li:last-child > ul > li > ul {
        left: -webkit-calc(-100%);
        left: calc(-100%);
    }

    .top-menu #topmenu > ul > li > ul > li > ul {
        left: -webkit-calc(100% + 23px);
        left: calc(100% + 23px);
    } }
@media (min-width: <?php echo $min_mobile; ?>) and (max-width: 1199px) {
    .right-menu #topmenu > ul > li > a {
        margin: 0 18px; } }
@media (min-width: <?php echo $max_mobile; ?>) {
    .top-menu {
        padding-top: 20px;
        padding-bottom: 20px; }

    .main-wrapper.unit .right-menu #topmenu > ul > li > a {
        margin: 0 15px; } }
@media (max-width: <?php echo $max_mobile; ?>) {
    .header_top_bg > .container {
        width: 100%; }

    #topmenu {
        overflow-x: hidden; }

    .header_trans-fixed.header_top_bg .mini-cart-wrapper .whizz-shop-icon .cart-contents-count {
        color: #1b1b1b; }

    .main-wrapper header .logo img {
        max-height: 75px; }

    header {
        padding: 20px 45px; }

    #topmenu ul li ul {
        box-shadow: none;
        font-style: normal; }

    #topmenu ul {
        box-shadow: none;
        font-style: normal; }

    .header_top_bg > .container > .row > .col-xs-12 {
        padding: 0; }

    .top-menu .logo {
        margin-bottom: 0;
        margin-top: 0; }

    .no-padd-mob {
        padding: 0 !important; }

    .right-menu #topmenu .menu li.menu-item-has-children > a,
    #topmenu .menu li.menu-item-has-children > a {
        position: relative; }

    #topmenu ul li a:hover {
        opacity: 1; }

    .mob-nav {
        display: block;
        margin: 0;
        position: absolute;
        top: -webkit-calc(50% - 4px);
        top: calc(50% - 4px);
        left: 20px;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%); }
    .mob-nav i::before {
        font-size: 24px; }

    #topmenu {
        display: inline-block;
        overflow-y: auto;
        height: 100vh !important;
        position: absolute;
        padding-bottom: 84px;
        margin-bottom: 50px;
        text-align: left;
        padding-top: 0px;
        top: 100%;
        width: auto;
        background-color: transparent; }

    #topmenu ul ul {
        display: block;
        position: static; }

    #topmenu ul.menu > li > ul > li > ul {
        display: block !important; }

    #topmenu ul.menu {
        width: auto;
        display: inline-block;
        padding-bottom: 30px;
        background-color: #fff; }

    #topmenu ul.menu li {
        display: block !important;
        float: none;
        margin-bottom: 0px; }

    #topmenu ul.menu li a {
        padding: 5px 10px;
        line-height: 25px;
        display: block;
        width: 100% !important;
        float: none;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease; }

    #topmenu ul.menu li a:hover {
        opacity: 0.7;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease; }

    /*1 level menu*/
    #topmenu > ul.menu > li {
        margin-bottom: 15px; }

    #topmenu > ul.menu > li > a {
        font-size: 14px; }

    /*2 level menu*/
    #topmenu > ul.menu > li > ul > li,
    #topmenu > ul.menu > li > ul > li > ul > li {
        margin: -1px 15px 0;
        border: 1px solid #f1f2f3; }

    #topmenu > ul.menu > li > ul > li > ul > li:last-child {
        margin-bottom: 20px; }

    #topmenu .social li a {
        padding: 0 10px !important;
        line-height: 25px !important; }

    .right-menu #topmenu .social {
        display: block; }

    .right-menu #topmenu .social li {
        display: inline-block; }

    .right-menu #topmenu .social li a {
        padding: 0 10px 5px; }

    .header_trans-fixed.header_top_bg #topmenu {
        top: 100%; }

    .whizz-top-social .social-icon {
        display: none; }

    .right-menu #topmenu .whizz-top-social .social {
        position: static;
        visibility: visible;
        opacity: 1; }

    .right-menu #topmenu .whizz-top-social .social li {
        margin-left: 7px; }

    .header_trans-fixed.open .right-menu #topmenu .whizz-top-social .social li a {
        color: #1b1b1b; }

    .mini-cart-wrapper {
        display: block;
        margin: 20px 10px 30px 10px; }

    .whizz_mini_cart {
        opacity: 1;
        visibility: visible;
        position: relative;
        right: auto;
        left: 0;
        top: 10px;
        width: 100%;
        min-width: 0; }

    #topmenu ul li.mega-menu:hover > ul > li {
        width: 100%; }

    header a.logo {
        display: inline-block; }

    #topmenu {
        -webkit-transform: translateX(-150%);
        -moz-transform: translateX(-150%);
        -ms-transform: translateX(-150%);
        -o-transform: translateX(-150%);
        transform: translateX(-150%);
        left: 0;
        opacity: .7;
        -webkit-transition: all 950ms ease;
        -moz-transition: all 950ms ease;
        -ms-transition: all 950ms ease;
        -o-transition: all 950ms ease;
        transition: all 950ms ease; }
    #topmenu.open {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
        -webkit-transition: all 650ms ease;
        -moz-transition: all 650ms ease;
        -ms-transition: all 650ms ease;
        -o-transition: all 650ms ease;
        transition: all 650ms ease; }

    #topmenu ul li.mega-menu:hover > ul > li {
        width: auto; }

    #topmenu.active-socials {
        overflow: visible;
        opacity: 1;
        width: 100%; }

    #topmenu .f-right {
        opacity: 0;
        visibility: hidden;
        position: absolute;
        background: #fff;
        padding: 15px;
        padding-top: -webkit-calc(100vh / 2 - 100px);
        padding-top: calc(100vh / 2 - 100px);
        top: 0;
        left: 150%;
        text-align: center;
        z-index: 9999;
        width: 100%;
        height: 100vh;
        -webkit-transition: all 350ms ease;
        -moz-transition: all 350ms ease;
        -ms-transition: all 350ms ease;
        -o-transition: all 350ms ease;
        transition: all 350ms ease; }
    #topmenu .f-right a {
        visibility: hidden; }
    #topmenu .f-right.active-socials {
        opacity: 1;
        visibility: visible; }
    #topmenu .f-right.active-socials a {
        visibility: visible; }
    #topmenu .f-right .header_trans-fixed.open .right-menu #topmenu .whizz-top-social .social li a {
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none; }

    .socials-mob-but {
        display: block;
        margin: 0;
        position: absolute;
        top: -webkit-calc(50% + 2px);
        top: calc(50% + 2px);
        right: 20px;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%); }
    .socials-mob-but i::before {
        font-size: 24px; }

    #topmenu .social .fa,
    .mini-cart-wrapper .whizz-shop-icon {
        font-size: 35px;
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none; }

    .mini-cart-wrapper .whizz-shop-icon {
        padding: 4px 10px; }

    .mini-cart-wrapper {
        margin: 0;
        margin-top: -3px; }

    .header_trans-fixed .socials-mob-but i {
        color: #fff; }

    .header_trans-fixed.header_top_bg.open header .socials-mob-but i,
    .header_trans-fixed #topmenu .whizz-top-social .social li a,
    .header_trans-fixed .mini-cart-wrapper .whizz-shop-icon::before {
        color: #1b1b1b !important; }

    .header_trans-fixed.header_top_bg {
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none; }

    .mini-cart-wrapper {
        display: inline-block;
        vertical-align: middle; }

    #topmenu .whizz-top-social .social:hover a {
        opacity: 1 !important; }

    .whizz_mini_cart {
        display: none; }

    .whizz-top-social {
        vertical-align: middle;
        margin-left: 0; }

    #topmenu .whizz-top-social .social li {
        margin-left: 0; }

    .mini-cart-wrapper .whizz-shop-icon:before {
        margin-top: -3px; }

    .header_trans-fixed.header_top_bg.open {
        background-color: #fff;
        position: fixed;
        z-index: 1000;
        top: 0;
        width: 100%; } }


/*------------------------------------------------------*/
/*---------------------- 54 .STATIC ASIDE MENU ----------------------*/
.mCSB_container.mCS_no_scrollbar_y.mCS_y_hidden,
.mCSB_inside > .mCSB_container {
    margin-right: 0; }

@media only screen and (min-width: <?php echo $min_mobile; ?>) {
    body.static-menu .header_top_bg{
        z-index: 2000;
        position: fixed;
        height: 0;
    }
    .static-menu .aside-menu{
        height: 100vh;
    }
    .static-menu {
        padding-left: 293px;
        position: relative; }
    .static-menu .right-menu .logo span {
        float: none; }
    .static-menu.woocommerce > .main-wrapper > .container {
        padding: 0 15px !important; }
    .static-menu.woocommerce.woocommerce-page ul.products {
        margin-top: 20px; }
    .static-menu.woocommerce div.product {
        margin-top: 20px; }
    .static-menu .whizz-woocommerce-pagination .nav-links {
        padding: 30px 30px 70px; }
    .static-menu .main-header-testimonial {
        margin-left: auto;
        margin-right: auto; }
    .static-menu .single-pagination {
        padding: 15px; }
    .static-menu .top-banner {
        height: 500px; }
    .static-menu .row.single-share {
        margin-right: 0;
        margin-left: 0; }
    .static-menu .portfolio-single-content .izotope-container {
        margin-top: 20px; }
    .static-menu .pixproof-data,
    .static-menu .pixproof-data .grid__item:last-child {
        margin-top: 20px; }
    .static-menu .portfolio-single-content .single-pagination {
        padding: 50px 15px; }
    .static-menu .banner-slider .page-view {
        max-width: 100%; }
    .static-menu .portfolio-single-content p,
    .static-menu .portfolio-single-content h1,
    .static-menu .portfolio-single-content h2,
    .static-menu .portfolio-single-content h3,
    .static-menu .portfolio-single-content h4,
    .static-menu .portfolio-single-content h5,
    .static-menu .portfolio-single-content h6 {
        padding: 0 15px; }
    .static-menu .portfolio-single-content .row.gallery-single {
        margin-right: 0;
        margin-left: 0; }
    .static-menu .swiper-container-split .swiper-slide .slide-item.slide-text-left .wrap-slide-text {
        padding-left: 190px; }
    .static-menu .vc_row:not([data-vc-stretch-content="true"]) {
        padding-left: 0 !important;
        padding-right: 0 !important; }
    .static-menu .vc_row[data-vc-full-width] {
        max-width: -webkit-calc(100% + 30px) !important;
        max-width: calc(100% + 30px) !important;
        left: 0 !important; }
    .static-menu .top-banner .content {
        padding: 0 15px; }
    .static-menu .flow-slider .swiper-container {
        width: 120vw; }
    .static-menu .exhibition-wrap .container-wrap {
        max-width: 100%; }
    .static-menu .exhibition-wrap .slide {
        max-width: -webkit-calc(70vw - 90px);
        max-width: calc(70vw - 90px);
    }
    .static-menu #footer {
        max-width: -webkit-calc(100% - 294px);
        max-width: calc(100% - 294px);
        left: 294px; }
    .static-menu .container {
        max-width: 100%; }
    .static-menu .header_top_bg {
        padding-bottom: 0; }

    .aside-menu.static {
        max-width: 290px;
        left: 0; }
    .aside-menu.static .aside-nav {
        display: none; }
    .aside-menu.static #topmenu ul.menu {
        overflow-y: hidden;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
    .aside-menu.static #topmenu {
        left: 0 !important;
        margin-left: 0;
        vertical-align: top;
        border-right: none; }
    .aside-menu.static #topmenu .sub-menu {
        margin-left: 20px;
        width: -webkit-calc(100% - 40px) !important;
        width: calc(100% - 40px) !important;
    }
    .aside-menu.static #topmenu li:hover > .sub-menu {
        display: none; }
    .aside-menu.static #topmenu .menu li a {
        text-align: left;
        font-size: 14px;
        line-height: 2;
        padding: 0 20px 5px 45px; }
    .aside-menu.static #topmenu .menu li a:hover {
        opacity: 1; }
    .aside-menu.static #topmenu .current-menu-parent a,
    .aside-menu.static #topmenu .current-menu-item a {
        opacity: 1; }
    .aside-menu.static #topmenu .f-right {
        text-align: left;
        padding-left: 28px; }
    .aside-menu.static .logo {
        left: 0;
        width: 100%;
        top: 0;
        padding-top: 40px;
        text-align: left;
        opacity: 1;
        padding-left: 45px; }
    .aside-menu.static .logo span {
        font-size: 30px;
        line-height: 1; }
    .aside-menu.static .logo img {
        max-width: 100%; }
    .aside-menu.static .logo:hover {
        opacity: 1; } }
@media only screen and (min-width: 1650px) {
    .static-menu .vc_row:not([data-vc-stretch-content="true"]) {
        padding-left: 7% !important;
        padding-right: 7% !important; } }
@media only screen and (min-width: 1199px) and (max-width: 1375px) {
    .static-menu .pricing-item {
        padding: 60px 40px; }
    .static-menu .pricing-item .mask-image {
        min-width: 150px;
        width: 150px; } }
@media only screen and (min-width: 1200px) and (max-width: 1275px) {
    .static-menu .pricing-item .mask-image {
        min-width: 130px;
        width: 130px; } }
@media only screen and (min-width: <?php echo $min_mobile; ?>) and (max-width: 1375px) {
    .static-menu .outer-album-swiper .album-text-block,
    .static-menu .outer-album-swiper .right-content {
        max-width: 260px; } }
@media only screen and (min-width: <?php echo $min_mobile; ?>) and (max-width: 1350px) {
    .static-menu .contacts-info-wrap.style3 .content {
        padding: 100px 20px; }
    .static-menu .swiper3-container.carousel-albums .swiper3-button-prev {
        left: 30px; }
    .static-menu .swiper3-container.carousel-albums .swiper3-button-prev:hover {
        left: 20px; }
    .static-menu .swiper3-container.carousel-albums .swiper3-button-next {
        right: 30px; }
    .static-menu .swiper3-container.carousel-albums .swiper3-button-next:hover {
        right: 20px; } }
@media only screen and (min-width: <?php echo $min_mobile; ?>) and (max-width: 1200px) {
    .static-menu.single-product .product .woocommerce-Reviews #comments, .static-menu.whizz_product_detail .product .woocommerce-Reviews #comments {
        width: 60%; }
    .static-menu.single-product .product .woocommerce-Reviews #review_form_wrapper, .static-menu.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper {
        width: 40%; }
    .static-menu .coming-soon .svg .count {
        font-size: 115px; }
    .static-menu .client-wrap {
        width: 50%; }
    .static-menu .info-block-parallax-wrap .content-wrap {
        padding: 70px 20px 70px; } }
@media only screen and (min-width: <?php echo $min_mobile; ?>) and (max-width: 1100px) {
    .static-menu .top-banner {
        height: 300px; }
    .static-menu .top-banner.center_content {
        min-height: 300px; }
    .static-menu .fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .title {
        font-size: 50px;
        line-height: 55px; }
    .static-menu .swiper-container-vert-slider .swiper-slide .container .wrap-text {
        max-width: -webkit-calc(100% - 40px);
        max-width: calc(100% - 40px);
    }
    .static-menu .swiper-container-vert-slider .swiper-slide .container .wrap-text .title {
        font-size: 60px;
        letter-spacing: 8px; }
    .static-menu .portfolio-slider-wrapper.slider_classic .content-wrap .portfolio-title {
        font-size: 50px;
        letter-spacing: 7px; }
    .static-menu .portfolio-single-content .gallery-single.infinite_full_gallery .item-single {
        width: 33.33%; }
    .static-menu .portfolio.grid .item {
        width: 50% !important; }
    .static-menu .flow-slider .flow-title {
        font-size: 60px; } }



/*------------------------------------------------------*/
/*---------------------- 54 .STATIC ASIDE MENU ----------------------*/
.mCSB_container.mCS_no_scrollbar_y.mCS_y_hidden,
.mCSB_inside > .mCSB_container {
    margin-right: 0; }

@media only screen and (min-width: <?php echo $min_mobile; ?>) {
    .static-menu {
        padding-left: 293px;
        position: relative; }
    .static-menu .right-menu .logo span {
        float: none; }
    .static-menu.woocommerce > .main-wrapper > .container {
        padding: 0 15px !important; }
    .static-menu.woocommerce.woocommerce-page ul.products {
        margin-top: 20px; }
    .static-menu.woocommerce div.product {
        margin-top: 20px; }
    .static-menu .whizz-woocommerce-pagination .nav-links {
        padding: 30px 30px 70px; }
    .static-menu .main-header-testimonial {
        margin-left: auto;
        margin-right: auto; }
    .static-menu .single-pagination {
        padding: 15px; }
    .static-menu .top-banner {
        height: 500px; }
    .static-menu .row.single-share {
        margin-right: 0;
        margin-left: 0; }
    .static-menu .portfolio-single-content .izotope-container {
        margin-top: 20px; }
    .static-menu .pixproof-data,
    .static-menu .pixproof-data .grid__item:last-child {
        margin-top: 20px; }
    .static-menu .portfolio-single-content .single-pagination {
        padding: 50px 15px; }
    .static-menu .banner-slider .page-view {
        max-width: 100%; }
    .static-menu .portfolio-single-content p,
    .static-menu .portfolio-single-content h1,
    .static-menu .portfolio-single-content h2,
    .static-menu .portfolio-single-content h3,
    .static-menu .portfolio-single-content h4,
    .static-menu .portfolio-single-content h5,
    .static-menu .portfolio-single-content h6 {
        padding: 0 15px; }
    .static-menu .portfolio-single-content .row.gallery-single {
        margin-right: 0;
        margin-left: 0; }
    .static-menu .swiper-container-split .swiper-slide .slide-item.slide-text-left .wrap-slide-text {
        padding-left: 190px; }
    .static-menu .vc_row:not([data-vc-stretch-content="true"]) {
        padding-left: 0 !important;
        padding-right: 0 !important; }
    .static-menu .vc_row[data-vc-full-width] {
        max-width: -webkit-calc(100% + 30px) !important;
        max-width: calc(100% + 30px) !important;
        left: 0 !important; }
    .static-menu .top-banner .content {
        padding: 0 15px; }
    .static-menu .flow-slider .swiper-container {
        width: 120vw; }
    .static-menu .exhibition-wrap .container-wrap {
        max-width: 100%; }
    .static-menu .exhibition-wrap .slide {
        max-width: -webkit-calc(70vw - 90px);
        max-width: calc(70vw - 90px);
    }
    .static-menu #footer {
        max-width: -webkit-calc(100% - 294px);
        max-width: calc(100% - 294px);
        left: 294px; }
    .static-menu .container {
        max-width: 100%; }
    .static-menu .header_top_bg {
        padding-bottom: 0; }

    .aside-menu.static {
        max-width: 290px;
        left: 0; }
    .aside-menu.static .aside-nav {
        display: none; }
    .aside-menu.static #topmenu ul.menu {
        overflow-y: hidden;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
    .aside-menu.static #topmenu {
        left: 0 !important;
        margin-left: 0;
        vertical-align: top;
        border-right: none; }
    .aside-menu.static #topmenu .sub-menu {
        margin-left: 20px;
        width: -webkit-calc(100% - 40px) !important;
        width: calc(100% - 40px) !important;
    }
    .aside-menu.static #topmenu li:hover > .sub-menu {
        display: none; }
    .aside-menu.static #topmenu .menu li a {
        text-align: left;
        font-size: 14px;
        line-height: 2;
        padding: 0 20px 5px 45px; }
    .aside-menu.static #topmenu .menu li a:hover {
        opacity: 1; }
    .aside-menu.static #topmenu .current-menu-parent a,
    .aside-menu.static #topmenu .current-menu-item a {
        opacity: 1; }
    .aside-menu.static #topmenu .f-right {
        text-align: left;
        padding-left: 28px; }
    .aside-menu.static .logo {
        left: 0;
        width: 100%;
        top: 0;
        padding-top: 40px;
        text-align: left;
        opacity: 1;
        padding-left: 45px; }
    .aside-menu.static .logo span {
        font-size: 30px;
        line-height: 1; }
    .aside-menu.static .logo img {
        max-width: 100%; }
    .aside-menu.static .logo:hover {
        opacity: 1; } }
@media only screen and (min-width: 1650px) {
    .static-menu .vc_row:not([data-vc-stretch-content="true"]) {
        padding-left: 7% !important;
        padding-right: 7% !important; } }
@media only screen and (min-width: 1199px) and (max-width: 1375px) {
    .static-menu .pricing-item {
        padding: 60px 40px; }
    .static-menu .pricing-item .mask-image {
        min-width: 150px;
        width: 150px; } }
@media only screen and (min-width: 1200px) and (max-width: 1275px) {
    .static-menu .pricing-item .mask-image {
        min-width: 130px;
        width: 130px; } }
@media only screen and (min-width: <?php echo $min_mobile; ?>) and (max-width: 1375px) {
    .static-menu .outer-album-swiper .album-text-block,
    .static-menu .outer-album-swiper .right-content {
        max-width: 260px; } }
@media only screen and (min-width: <?php echo $min_mobile; ?>) and (max-width: 1350px) {
    .static-menu .contacts-info-wrap.style3 .content {
        padding: 100px 20px; }
    .static-menu .swiper3-container.carousel-albums .swiper3-button-prev {
        left: 30px; }
    .static-menu .swiper3-container.carousel-albums .swiper3-button-prev:hover {
        left: 20px; }
    .static-menu .swiper3-container.carousel-albums .swiper3-button-next {
        right: 30px; }
    .static-menu .swiper3-container.carousel-albums .swiper3-button-next:hover {
        right: 20px; } }
@media only screen and (min-width: <?php echo $min_mobile; ?>) and (max-width: 1200px) {
    .static-menu.single-product .product .woocommerce-Reviews #comments, .static-menu.whizz_product_detail .product .woocommerce-Reviews #comments {
        width: 60%; }
    .static-menu.single-product .product .woocommerce-Reviews #review_form_wrapper, .static-menu.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper {
        width: 40%; }
    .static-menu .coming-soon .svg .count {
        font-size: 115px; }
    .static-menu .client-wrap {
        width: 50%; }
    .static-menu .info-block-parallax-wrap .content-wrap {
        padding: 70px 20px 70px; } }
@media only screen and (min-width: <?php echo $min_mobile; ?>) and (max-width: 1100px) {
    .static-menu .top-banner {
        height: 300px; }
    .static-menu .top-banner.center_content {
        min-height: 300px; }
    .static-menu .fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .title {
        font-size: 50px;
        line-height: 55px; }
    .static-menu .swiper-container-vert-slider .swiper-slide .container .wrap-text {
        max-width: -webkit-calc(100% - 40px);
        max-width: calc(100% - 40px);
    }
    .static-menu .swiper-container-vert-slider .swiper-slide .container .wrap-text .title {
        font-size: 60px;
        letter-spacing: 8px; }
    .static-menu .portfolio-slider-wrapper.slider_classic .content-wrap .portfolio-title {
        font-size: 50px;
        letter-spacing: 7px; }
    .static-menu .portfolio-single-content .gallery-single.infinite_full_gallery .item-single {
        width: 33.33%; }
    .static-menu .portfolio.grid .item {
        width: 50% !important; }
    .static-menu .flow-slider .flow-title {
        font-size: 60px; } }


/*------------------------------------------------------*/
/*---------------------- 03 .ASIDE MENU VERTICAL LOGO ----------------------*/

@media only screen and (min-width: <?php echo $min_mobile; ?>){
    header.aside-menu{
        padding: 0;
    }
    .aside-menu.vertical .logo {
        position: fixed;
        top: auto;
        bottom: 15px;
        left: 0;
        -webkit-transform-origin: left top 0;
        -moz-transform-origin: left top 0;
        -ms-transform-origin: left top 0;
        -o-transform-origin: left top 0;
        transform-origin: left top 0;
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
        padding: 0;
        height: 58px;
    }
    .aside-menu.vertical .logo span,
    .aside-menu.vertical .logo img{
        max-height: 58px;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%,-50%);
        -moz-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        -o-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }
}


/*------------------------------------------------------*/
/*---------------------- 05 .LEFT ALIGN MENU ----------------------*/
@media only screen and (min-width: <?php echo $min_mobile; ?>) {
    .right-menu.left .logo span {
        margin-top: 2px; }
    .right-menu.left #topmenu {
        padding-left: 23px;
        text-align: left; }
    .right-menu.left #topmenu > ul > li > a {
        margin: 0 18px 0 0; } }
@media only screen and (max-width: <?php echo $max_mobile; ?>) {
    #topmenu ul.menu {
        max-height: 300000px !important; }
    #topmenu ul.menu{
        min-width: 200px;
    }
    .header_trans-fixed.header_top_bg.open #topmenu ul li a{
        color: #1b1b1b;
    }
}

/*------------------------------------------------------*/
/*---------------------- 09 .COMPACT MENU ----------------------*/
@media only screen and (min-width: <?php echo $min_mobile; ?>) {
    .right-menu.compact .mob-nav {
        display: table-cell;
        vertical-align: middle;
        padding: 30px;
        width: 12px;
        font-size: 20px; }
    .right-menu.compact .mob-nav .fa-times {
        font-size: 22px; }
    .right-menu.compact #topmenu {
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 350ms ease;
        -moz-transition: all 350ms ease;
        -ms-transition: all 350ms ease;
        -o-transition: all 350ms ease;
        transition: all 350ms ease; }
    .right-menu.compact #topmenu.open {
        opacity: 1;
        visibility: visible; }

    .header_trans-fixed.header_top_bg.open .right-menu.compact #topmenu ul li a,
    .header_trans-fixed.header_top_bg.open .right-menu.compact .logo span,
    .header_trans-fixed.header_top_bg.open .right-menu.compact .mob-nav i {
        color: #fff; } }


/*------------------------------------------------------*/
/*---------------------- XX .FULL SCREEN MENU ----------------------*/

@media only screen and (min-width: <?php echo $min_mobile; ?>) {
    .right-menu.full #topmenu .full-menu-wrap{
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        padding: 30px 0;
    }
    .right-menu.full #topmenu{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        overflow-y: auto;
        z-index: 90;
    }

    .right-menu.full #topmenu ul.menu li a{
        text-align: center;
        line-height: 1.5;
        padding: 15px;
    }
    .right-menu.full #topmenu ul ul li a{
        padding: 10px 15px;
    }
    .right-menu.full #topmenu ul{
        display: block;
    }
    header.full #topmenu ul li.mega-menu:hover > ul{
        padding-top: 10px;
    }
    .right-menu.full #topmenu ul li::before,
    .right-menu.full #topmenu ul ul,
    .right-menu.full #topmenu ul ul li{
        display: none;
    }
    .right-menu.full #topmenu ul ul li{
        display: block!important;
        float: none!important;
        width: 100%!important;
    }
    .right-menu.full #topmenu .f-right li{
        display: inline-block;
    }
    .right-menu.full #topmenu .f-right{
        display: block;
        float: none;
        margin-top: 30px!important;
    }
    .right-menu.full #topmenu ul li{
        display: block;
    }
    .right-menu.full #topmenu .mob-nav{
        position: relative;
        z-index: 9000;
    }
    .right-menu.full .sub-menu{
        position: static!important;
        -webkit-transform: none;
        -moz-transform: none;
        -ms-transform: none;
        -o-transform: none;
        transform: none;
    }
    .right-menu.full .whizz_mini_cart{
        display: none;
    }
    .right-menu.full .mob-nav{
        position: relative;
        z-index: 1000;
    }
}

@media only screen and (max-width: <?php echo $max_mobile; ?>) {
    .right-menu.full #topmenu .full-menu-wrap{
        position: static;
        padding: 0;
    }
}

<?php
$style = '';
///HEADER LOGO//
if ( cs_get_option('site_logo') == 'txtlogo' ) {
    //Header logo text
    if ( cs_get_option('text_logo_style') == 'custom' ) {

        $style .= 'a.logo span{';
        $style .=  cs_get_option('text_logo_color') && cs_get_option('text_logo_color') !== '#fff' ? 'color:' . cs_get_option('text_logo_color') . ' !important;' : '';
        $style .=  cs_get_option('text_logo_width') ? 'width:' . cs_get_option('text_logo_width') . ' !important;' : '';
        $style .=  cs_get_option('text_logo_font_size') ? 'font-size:' . cs_get_option('text_logo_font_size') . ' !important;' : '';
        $style .= '}';
    }

} else {
    //Header logo image
    if ( cs_get_option('img_logo_style') == 'custom' ) {
        $style .= '.logo img {';
        if (cs_get_option('img_logo_width')) {
            $logo_width = is_integer(cs_get_option('img_logo_width')) ? cs_get_option('img_logo_width') . 'px' : cs_get_option('img_logo_width'); 
             $style .=  cs_get_option('img_logo_width') ? 'width:' . esc_attr($logo_width) . ' !important;' : '';
        }
        if (cs_get_option('img_logo_height')) {
            $logo_height = is_integer(cs_get_option('img_logo_height')) ? cs_get_option('img_logo_height') . 'px' : cs_get_option('img_logo_height'); 
             $style .=  cs_get_option('img_logo_height') ? 'height:' . esc_attr( $logo_height ) . ' !important;' : '';
             $style .=  cs_get_option('img_logo_height') ? 'max-height:' . cs_get_option('img_logo_height') . ' !important;' : '';
        }
        $style .= '}';
    }
}
echo esc_html($style);

$post_id = isset($_GET['post']) && is_numeric($_GET['post']) ? $_GET['post'] : '' ;

if(!empty($post_id)){
 $meta_data = get_post_meta( $post_id, '_custom_page_options', true );
 $width = preg_replace('/[^0-9]/i', ' ', $meta_data['padding_desktop']);



if(isset($meta_data['page_bg_color']) && !empty($meta_data['page_bg_color'])){ ?>
    body.page-id-<?php echo esc_attr($post_id); ?>,
    body.page-id-<?php echo esc_attr($post_id); ?> .main-wrapper.footer-parallax{
        background-color: <?php echo $meta_data['page_bg_color']; ?>!important;
    }
<?php }


 if(!empty($meta_data['padding_desktop']) && !is_numeric($meta_data['padding_desktop'])){ ?>
.page-id-<?php echo esc_attr($post_id); ?> .padding-desc,
.page-id-<?php echo esc_attr($post_id); ?> .padding-desc .vc_row,
.page-id-<?php echo esc_attr($post_id); ?> .padding-desc + #footer > div {
    padding-right: <?php echo esc_attr($meta_data['padding_desktop']); ?>;
    padding-left: <?php echo esc_attr($meta_data['padding_desktop']); ?>;
}

.page-id-<?php echo esc_attr($post_id); ?> .padding-desc .header_top_bg{
    width: -webkit-calc(100% - <?php echo trim($width); ?>*2px);
    width: calc(100% - <?php echo trim($width); ?>*2px);
    margin-right: auto;
    margin-left: auto;
}

<?php }

 if(!empty($meta_data['padding_mobile']) && !is_numeric($meta_data['padding_mobile'])){

  $width_mob = preg_replace('/[^0-9]/i', ' ', $meta_data['padding_mobile']); ?>

@media only screen and (max-width: 767px) {
    .page-id-<?php echo esc_attr($post_id); ?> .padding-mob,
    .page-id-<?php echo esc_attr($post_id); ?> .padding-mob .vc_row,
    .page-id-<?php echo esc_attr($post_id); ?> .padding-mob + #footer > div {
        padding-right: <?php echo esc_attr($meta_data['padding_mobile']); ?>;
        padding-left: <?php echo esc_attr($meta_data['padding_mobile']); ?>;
    }


    .page-id-<?php echo esc_attr($post_id); ?> .padding-desc .header_top_bg{
        width: -webkit-calc(100% - <?php echo trim($width_mob); ?>*2px);
        width: calc(100% - <?php echo trim($width_mob); ?>*2px);
    }

}

@media (min-width: 768px) {
    .right-menu {
        width: 100%;
        margin: 0;
        max-width: 100%;
    }

    .header_top_bg .col-xs-12 {
        padding: 0;
    }
}

<?php }


$preloader_speed = cs_get_option('preloader_image_speed');
 $preloader_speed = isset($preloader_speed) && !empty($preloader_speed) && is_numeric($preloader_speed) ? $preloader_speed : '1000';
 ?>

.animsition-loading{
    background-image: none !important;
    background-repeat: no-repeat !important;
    background-position: center center !important;
    background-color: white;
    -webkit-animation: scaleout-image <?php echo $preloader_speed; ?>ms infinite ease-in-out;
    animation: scaleout-image <?php echo $preloader_speed; ?>ms infinite ease-in-out;
}
.animsition-loading:after {
    display: none !important;
}

.animsition-loading:before {
    content: "";
    position: absolute;
    width: 40px;
    height: 40px;
    left: 50%;
    top: 50%;
    margin-left: -20px;
    margin-right: -20px;
    background-color: #333;
    border-radius: 100%;
    -webkit-animation: scaleout <?php echo $preloader_speed; ?>ms infinite ease-in-out;
    animation: scaleout <?php echo $preloader_speed; ?>ms infinite ease-in-out;
    display: none;
}

@-webkit-keyframes scaleout {
    0% {
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
    }
    100% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
        opacity: 0;
    }
}

@keyframes scaleout {
    0% {
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
    }
    100% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
        opacity: 0;
    }
}

<?php }

$preloaderSize_d = cs_get_option('preloader_size_d');
$preloaderSize_t = cs_get_option('preloader_size_t');
$preloaderSize_m = cs_get_option('preloader_size_m');

if(isset($preloaderSize_d) && $preloaderSize_d){ ?>
.preloader-svg svg{
    height: <?php echo esc_html($preloaderSize_d); ?>px!important;
}
<?php }

if(isset($preloaderSize_t) && $preloaderSize_t){ ?>
    @media only screen and (max-width:991px){
        .preloader-svg svg{
            height:<?php echo esc_html($preloaderSize_t); ?>px!important;
        }
    }
<?php }

if(isset($preloaderSize_m) && $preloaderSize_m){ ?>
@media only screen and (max-width: 767px){
    .preloader-svg svg{
        height:<?php echo esc_html($preloaderSize_m); ?>px!important;
    }
}
<?php } ?>


/**** WHITE VERSION  ****/

<?php

if(cs_get_option('change_colors')){

 if (cs_get_option( 'menu_bg_color') && cs_get_option('menu_bg_color') !== '#ffffff') { ?>
.header_top_bg,
#topmenu {
    background-color: <?php echo esc_html(cs_get_option( 'menu_bg_color')) ?>;
}

@media (min-width: 768px) {
    .aside-menu .topmenu,
    .aside-menu #topmenu::after {
        background-color: <?php echo esc_html(cs_get_option( 'menu_bg_color')) ?>;
    }
}

<?php }

if (cs_get_option( 'menu_font_color') && cs_get_option('menu_font_color') !== '#1b1b1b' ) { ?>
#topmenu ul li a,
.top-menu .logo span,
#topmenu ul ul li a,
a.mob-nav,
a.socials-mob-but,
#topmenu ul ul li.current-menu-item > a,
#topmenu .whizz-top-social .social li a,
.mini-cart-wrapper .whizz-shop-icon .cart-contents-count,
.right-menu .logo span {
    color: <?php echo esc_html(cs_get_option( 'menu_font_color')) ?>;
}

@media only screen and (max-width: 991px){
    .header_trans-fixed.header_top_bg.open header .logo span,
    .header_trans-fixed.header_top_bg.open header .mob-nav i,
    .header_trans-fixed.header_top_bg #topmenu ul li a,
    .header_trans-fixed.header_top_bg.open #topmenu ul li a,
    .header_trans-fixed.header_top_bg .mini-cart-wrapper .whizz-shop-icon .cart-contents-count{
        color: <?php echo esc_html(cs_get_option( 'menu_font_color')) ?>;
    }
    .header_trans-fixed.header_top_bg.open header .socials-mob-but i,
    .header_trans-fixed #topmenu .whizz-top-social .social li a,
    .header_trans-fixed .mini-cart-wrapper .whizz-shop-icon::before{
        color: <?php echo esc_html(cs_get_option( 'menu_font_color')) ?>!important;
    }
}

.mini-cart-wrapper .whizz-shop-icon:before{
    color: <?php echo esc_html(cs_get_option( 'menu_font_color')) ?>;
}

#topmenu .f-right > div:first-child::before{
    background-color: <?php echo esc_html(cs_get_option( 'menu_font_color')) ?>;
}
<?php }


if (cs_get_option( 'menu_font_color_t') && cs_get_option('menu_font_color_t') !== '#ffffff' ) { ?>
    .header_trans-fixed .socials-mob-but i,
    .header_trans-fixed .mob-nav i,
    .header_trans-fixed.header_top_bg #topmenu > ul > li > a,
    .header_trans-fixed.header_top_bg .logo span,
    .mini-cart-wrapper .whizz-shop-icon,
    .header_trans-fixed .right-menu #topmenu .whizz-top-social .social li a{
        color: <?php echo esc_html(cs_get_option( 'menu_font_color_t')) ?>;
    }
    .header_trans-fixed .mini-cart-wrapper .whizz-shop-icon::before{
        color: <?php echo esc_html(cs_get_option( 'menu_font_color_t')) ?>;
    }
    #topmenu .f-right > div:first-child::before{
        background-color: <?php echo esc_html(cs_get_option( 'menu_font_color_t')) ?>;
    }

@media only screen and (min-width: 992px){
    .header_trans-fixed.header_top_bg .mini-cart-wrapper .whizz-shop-icon .cart-contents-count{
        color: <?php echo esc_html(cs_get_option( 'menu_font_color_t')) ?>;
    }

    .header_trans-fixed.header_top_bg.open .right-menu.compact #topmenu ul li a,
    .header_trans-fixed.header_top_bg.open .right-menu.compact .logo span,
    .header_trans-fixed.header_top_bg.open .right-menu.compact .mob-nav i{
        color: <?php echo esc_html(cs_get_option( 'menu_font_color_t')) ?>;
    }

}
<?php }
if (cs_get_option( 'submenu_bg_color') && cs_get_option('submenu_bg_color') !== '#1b1b1b' ) { ?>

@media only screen and (min-width: 992px){
    #topmenu ul ul,
    header:not(.aside-menu) #topmenu ul li.mega-menu:hover > ul::before{
        background-color: <?php echo esc_html(cs_get_option( 'submenu_bg_color')) ?>;;
    }
}

<?php }


if (cs_get_option( 'menu_bg_color_scroll') && cs_get_option('menu_bg_color_scroll') !== '#1b1b1b' ) { ?>
    .header_trans-fixed.header_top_bg.bg-fixed-color{
        background-color: <?php echo esc_html(cs_get_option( 'menu_bg_color_scroll')) ?>!important;
    }
<?php }
if (cs_get_option( 'menu_bg_color') && cs_get_option('menu_bg_color') !== '#ffffff' ) { ?>
    @media only screen and (max-width: 991px){
        .header_trans-fixed.header_top_bg.open,
        #topmenu ul.menu,
        #topmenu .f-right,
        #topmenu{
            background:<?php echo esc_html(cs_get_option( 'menu_bg_color')) ?>;
        }
    }
<?php } ?>
/* ======= FRONT COLOR 1 ======= */

<?php if (cs_get_option( 'front_color_1') && cs_get_option( 'front_color_1') !== '#1b1b1b') : ?>

.widget_text form input::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

.widget_text form input::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.widget_text form input:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.widget_text form input:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

body,
.text-dark,
.mob-nav,
.whizz-top-social .social-icon,
#topmenu .whizz-top-social .social li a,
.banner-gallery .content-wrap .title,
.action .title,
.action .subtitle,
.about-section .subtitle,
.about-section .title,
.about-section .a-btn-2,
.fullwidth .gallery-item .info-content h5,
.fullwidth .gallery-item .info-content .subtitle,
.portfolio.classic.big .portfolio-title,
.portfolio.masonry .item-portfolio-content .portfolio-title,
.single-proof_gallery .single-content > .title,
.single-proof_gallery .title,
.post-box .post-descr h6,
.post-box .post-descr p,
.post_list .post-box-img-wrapp .text .post-box-title,
.post_list .post-box-img-wrapp .text .post-box-date,
.recent-post-single .recent-title,
.contact-info .details h5,
.pagination.cs-pager .page-numbers.next:after,
.pagination.cs-pager .page-numbers.prev:after,
.widget_search input[type="text"],
.sidebar-item ul li a,
.protected-page .protected-title,
.protected-page form,
.protected-page input[type="password"]:focus,
.protected-page input[type="submit"],
.comments .content .comment-reply-link:hover,
.comments .content .text,
#contactform h3,
.comments-form h3,
.post-info span.author,
.post-info span.author a,
.post-nav a:hover,
.post-nav a:focus,
.page-numbers:hover,
.page-numbers:focus,
.next.page-numbers:hover,
.prev.page-numbers:hover,
.post-nav .pages,
.post-nav .current,
.pager-pagination .pages,
.woocommerce .whizz_product_detail div.product p.price,
.woocommerce .single-product div.product p.price,
.woocommerce .whizz_product_detail div.product span.price,
.woocommerce .single-product div.product span.price,
.woocommerce ul.products.default li.product .price,
.whizz_cart.shop_table ul .cart_item ul .product-price,
.whizz_cart.shop_table ul .cart_item ul .product-subtotal,
#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_price,
.woocommerce table.shop_table .cart_item .product-total,
.woocommerce .whizz_product_detail div.product p.price ins,
.woocommerce .single-product div.product p.price ins,
.woocommerce .whizz_product_detail div.product span.price ins,
.woocommerce .single-product div.product span.price ins,
.woocommerce ul.products.default li.product .price ins,
.whizz_cart.shop_table ul .cart_item ul .product-price ins,
.whizz_cart.shop_table ul .cart_item ul .product-subtotal ins,
#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_price ins,
.woocommerce table.shop_table .cart_item .product-total ins,
.woocommerce .single-product .star-rating,
.woocommerce .whizz_product_detail .star-rating,
.woocommerce .quantity .qty,
.single-product .product .summary .product_title,
.whizz_product_detail .product .summary .product_title,
.single-product .product .summary .cart .variations .label label,
.whizz_product_detail .product .summary .cart .variations .label label,
.single-product .product .summary .cart .variations .value ul li label,
.whizz_product_detail .product .summary .cart .variations .value ul li label,
.single-product div.product .woocommerce-tabs ul.tabs.wc-tabs li.active a,
.whizz_product_detail div.product .woocommerce-tabs ul.tabs.wc-tabs li.active a,
.single-product div.product .woocommerce-tabs .woocommerce-Tabs-panel h2,
.whizz_product_detail div.product .woocommerce-tabs .woocommerce-Tabs-panel h2,
.single-product .product #reviews #comments .commentlist .comment .comment-text .meta,
.whizz_product_detail .product #reviews #comments .commentlist .comment .comment-text .meta,
.single-product .product .woocommerce-Reviews #review_form_wrapper .comment-reply-title,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper .comment-reply-title,
.single-product div.product .up-sells h2,
.whizz_product_detail div.product .up-sells h2,
.single-product .product .related.products h2,
.whizz_product_detail .product .related.products h2,
.woocommerce ul.products li.product h3,
.whizz-woocommerce-pagination .nav-links a::before,
.mini-cart-wrapper .whizz-shop-icon:before,
.whizz_cart.shop_table .heading li,
.whizz_cart.shop_table ul .cart_item ul .product-name a,
.whizz_cart.shop_table ul .cart_item ul .product-name .variation dt,
.whizz_cart.shop_table .complement-cart .coupon .input-text:focus,
.whizz-cart-collaterals .cart_totals h2,
.woocommerce form.checkout_coupon .form-row input.input-text,
.woocommerce form.checkout h3,
.woocommerce form.login .form-row label,
.woocommerce form.checkout .form-row label,
.woocommerce form.login .form-row input,
.woocommerce form.login .form-row textarea,
.woocommerce form.checkout .form-row input,
.woocommerce form.checkout .form-row textarea,
.woocommerce form.login .form-row input:focus,
.woocommerce form.login .form-row textarea:focus,
.woocommerce form.checkout .form-row input:focus,
.woocommerce form.checkout .form-row textarea:focus,
.woocommerce form.checkout_coupon .form-row input.input-text:focus,
.woocommerce form.login .lost_password a,
.select2-drop-active,
.select2-results li.select2-highlighted,
.woocommerce table.shop_table thead .product-name,
.woocommerce table.shop_table thead .product-total,
.woocommerce table.shop_table .cart_item .product-name,
.woocommerce table.shop_table .cart_item .product-name .variation dt,
.woocommerce-checkout-review-order #payment div.payment_box,
.portfolio-single-content .portfolio-title,
.portfolio-single-content .whizz-portfolio-footer-line .portfolio-client .client-title,
.portfolio-single-content .whizz-portfolio-footer-line .portfolio-jop-type .title-job-type,
.portfolio-single-content .whizz-portfolio-footer-line .title-date,
.pricing-info .title,
.iframe-video-title,
.coming-page-wrapper .title,
.swipe-btn::before,
.skill-wrapper .main-title,
.flipto::before,
.portfolio-wrapper .pager-pagination a,
.portfolio-wrapper .pager-pagination span,
.fancybox-infobar .fancybox-button::before,
.popup-content-details .img-title,
.popup-content-details .caption-images-portfolio-item span,
.news.type-1 .news-type,
.news.type-1 .news-likes,
.news.type-1 .news-likes a,
.news h4 a,
.news .news-date,
code,
kbd,
caption,
a,
a:hover,
a:focus,
.a-btn.style-black,
.portfolio.grid .post-wrapper .item-portfolio-content .portfolio-title,
.portfolio.grid .post-wrapper .item-portfolio-content .excerpt p,
.portfolio.grid .item-portfolio-content .portfolio-title,
.filter ul li.active,
.team-member-wrap.default .team-member .social .wrap a,
.team-member-wrap.default .info .title,
.team-member .info .title,
.simple .post-box .text .post-box-title,
.services .content .title,
.single-post .single-content blockquote p,
.single-post .single-content .swiper-container .description,
.single-post .single-content .swiper-arrow-right,
.single-post .single-content .swiper-arrow-left,
.sm-wrap-post .content .title,
.contact-form .title,
form.wpcf7-form input,
form.wpcf7-form textarea,
.wpcf7 form input:focus,
form.wpcf7-form input:focus,
form.wpcf7-form textarea:focus,
#footer.white-footer .copyright a,
#footer.white-footer .social-links a,
#footer.white-footer .ContactWidget h3,
#footer.white-footer .ContactWidget div.contact_content,
#footer.white-footer .ContactWidget .contact_url,
#footer.white-footer .whizzInstagramWidget,
#footer.white-footer .ContactWidget a.fa,
#footer.white-footer .widget_text h5,
#footer.white-footer .widget_text .textwidget > p,
#footer.white-footer .widget_text .wpcf7-response-output,
#footer.white-footer .widget_text form input:not([type="submit"]),
#footer.white-footer .widget_text form::after,
#footer.white-footer .sidebar-item[class*='widget_'] h5,
.single-content.no-thumb .main-top-content .title,
.comments .content .comment-reply-link,
.comments .comment-reply-title,
.comments .person .author,
.comments-title,
.comments-title span,
#contactform textarea,
#contactform input:not([type="submit"]),
.comments-form textarea,
.comments-form input:not([type="submit"]),
.about-details .content .text h1,
.about-details .content .text h2,
.about-details .content .text h3,
.about-details .content .text h4,
.about-details .content .text h5,
.about-details .content .text h6,
.about-details .content .title,
.simple-details .content .title,
.about-details .content .text blockquote p,
.titles .title,
.portfolio-single-content,
.single-pagination > div a.content::before,
.albums-left-filter .button-group button:hover,
.albums-left-filter .button-group button.is-checked,
.portfolio-slider-wrapper .portfolio-title,
.portfolio-pagination::before,
.twitter-wrapper .name,
.twitter-wrapper .description,
.post-list .pager-pagination .page-numbers.next::before,
.post-list .pager-pagination .page-numbers.prev::before,
.pricing-gallery .images.content .title,
.pricing-gallery .images.content .price,
.pricing-gallery .images.content .description,
.events-single-content.protected-page form,
.single-portfolio .protected-page form,
.single-product .product #reviews #comments .commentlist .comment .comment-text .date_publish,
.whizz_product_detail .product #reviews #comments .commentlist .comment .comment-text .date_publish,
.whizz-cart-collaterals .cart_totals .shop_table ul li span,
.woocommerce table.shop_table .woocommerce-Price-amount,
.portfolio-single-content .portfolio-categories a,
.pricing-info .subtitle,
.coming-soon-descr li,
.swipe-btn:hover::before,
.flipto:hover::before,
.fancybox-infobar .fancybox-button:hover::before,
.news.type-1 .news-type:hover,
form.wpcf7-form label,
.contacts-info-wrap.style2 .title-main,
.contacts-info-wrap .title,
.contacts-info-wrap .content-item a:hover,
.exhibition-wrap .btn:hover,
.exhibition-wrap .btn--toggle.btn--active:hover,
.flow-slider .swiper-arrow-left::before,
.flow-slider .swiper-arrow-right::before,
.info-block-parallax-wrap .content-wrap blockquote,
.info-block-parallax-wrap .content-wrap blockquote p,
.insta-box .insta-box-follow,
.insta-box .insta-box-follow a,
.tax-portfolio-client .client-content .title,
.tax-portfolio-client .client-content .descr,
.single-content.modern h1,
.single-content.modern h2,
.single-content.modern h3,
.single-content.modern h4,
.single-content.modern h5,
.single-content.modern h6,
.single-content.modern blockquote div,
.single-content.modern blockquote p,
.col-md-3 .ContactWidget .contact_url,
.col-md-3 .ContactWidget div.contact_content,
.col-md-3 .ContactWidget a.fa,
.col-md-3 .whizzInstagramWidget,
.events-single-content .info-event-wrap .info-item .info a:hover,
.single-proof_gallery .pixproof-data .grid__item .entry__meta-box .meta-box__title,
.text-dark p,
.contact-info,
.outer-album-swiper .album-text-title,
.swiper-container-split .swiper-slide .slide-item.slide-text,
.fragment-wrapper .fragment-block .fragment-text .wrap-frag-text,
.fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .desc mark,
.fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .slide-text-more,
.monospace,
blockquote cite,
#back-to-top,
.about-details .content .text,
.simple-details .content .text,
.events-single-content.protected-page .protected-title,
.single-portfolio .protected-page .protected-title,
.select-for-hovers h5,
.select-for-hovers .hover > span,
.select-for-hovers .hover .list li,
.select-for-hovers .hover > span::after,
.woocommerce ul.products li.product a h2,
.woocommerce ul.products li.product span,
.km-radial-progressbar .inset .percentage,
.km-teammate-position,
.km-teammate-soc,
.km-teammate-content,
.testimonial-content-span,
.main-wrapper .col-md-3 .sidebar-item li,
.main-wrapper .col-md-3 .sidebar-item p,
.post.classic .title,
.post.modern .title,
.post.classic .post-description,
.post.modern .post-description,
.page-numbers,
.next.page-numbers:hover,
.col-md-3 .sidebar-item span,
.prev.page-numbers:hover,
.skill-wrapper .skill .label-skill,
.main-wrapper .col-md-3 .sidebar-item a,
.single-post .title,
.post-details .date-post,
.post-details .author,
.portfolio-pinterest .item-link h5,
.main-wrapper .col-md-3 .sidebar-item h5 {
    color: <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

.whizz_cart.shop_table ul .cart_item ul .product-remove .remove {
    color: <?php echo esc_html(cs_get_option( 'front_color_1')) ?> !important;
}

::-moz-selection {
    background: <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

::selection {
    background: <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

::-moz-selection {
    background: <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

.row.simple::-webkit-scrollbar-thumb {
    background: <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

.black,
.highlight,
.side-arrow:before,
.side-arrow:after,
.flex-control-paging li a.flex-active,
.banner-list li,
.ri-grid ul li,
.portfolio.classic.big .item-link,
.portfolio.masonry .item-overlay,
.portfolio.masonry .item-link:hover .item-overlay,
.portfolio.grid .item-overlay,
.portfolio.grid .item-link:hover .item-overlay,
.toggle-title:after,
.pagination a.img,
.woocommerce ul.products li.product .whizz-prod-list-image:after,
.fullview__image,
.main-album-anim-wrap,
.client-wrap .client-link:hover .client-overlay,
.bottom-line:after,
.a-btn-2,
#footer,
.header_trans-fixed.header_top_bg.bg-fixed-color,
.portfolio-wrapper .load-more.button,
.single-post .single-content .swiper-arrow-left div::before,
.wpcf7 form input[type="submit"],
form.wpcf7-form #submit,
#contactform #submit,
.comments-form #submit,
.post-info span a,
.single-pagination > div a.content::after,
.skill-wrapper .skill .line .active-line,
.portfolio-pagination::after,
.post-list .pager-pagination .page-numbers.next::after,
.post-list .pager-pagination .page-numbers.prev::after,
.portfolio-slider-wrapper.slider_classic .pagination .swiper-pagination-switch,
.post .post-wrap-item.text,
.widget_search form div::after,
.protected-page input[type="submit"],
.post-nav a,
.pages,
button,
html input[type=button],
input[type=reset],
input[type=submit],
.woocommerce-page.woocommerce-cart .woocommerce input.button,
.woocommerce-page.woocommerce-checkout .woocommerce input.button,
.woocommerce-page.woocommerce-cart a.button,
.woocommerce-page.woocommerce-checkout a.button,
.woocommerce-page.woocommerce a.button,
.woocommerce-page.woocommerce button.button.alt,
.woocommerce button.button.alt,
a.button.checkout,
.woocommerce-page.woocommerce-cart a.button:hover,
.woocommerce-page.woocommerce-checkout a.button:hover,
.woocommerce-page.woocommerce a.button:hover,
.woocommerce-page.woocommerce button.button.alt:hover,
.woocommerce button.button.alt:hover,
a.button.checkout:hover,
.woocommerce .whizz_images span.onsale,
.woocommerce ul.products li.product .whizz-prod-list-image .onsale,
.woocommerce .woocommerce-message,
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-error,
.single-product .product .summary .cart .variations .value ul li input:checked + label:before,
.whizz_product_detail .product .summary .cart .variations .value ul li input:checked + label:before,
.single-product .product .woocommerce-Reviews #review_form_wrapper .comment-form .form-submit input#submit,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper .comment-form .form-submit input#submit,
.woocommerce ul.products li.product .whizz_product_list_name .count,
.whizz-woocommerce-pagination .nav-links a::after,
.whizz_mini_cart,
#topmenu .whizz_mini_cart a.button,
.woocommerce form.login .form-row input[type="checkbox"]:checked + label.checkbox:before,
.woocommerce form.checkout .form-row input[type="checkbox"]:checked + label.checkbox:before,
.flow-slider .swiper-arrow-left::after,
.flow-slider .swiper-arrow-right::after,
.contacts-info-wrap.style4 .additional-content-wrap,
.insta-box .insta-img-wrap,
.tax-portfolio-client .client-content .title::before,
.single-content.modern .content-header .title::before,
.events-single-content .end-event,
.item .item-img .end-event,
.single-proof_gallery #pixproof_gallery .proof-photo.selected .meta__action.select-action,
.ri-grid ul li a,
#multiscroll-nav li .active span,
.single-proof_gallery .pixproof-data .grid__item .a-btn-2:hover,
.woocommerce-page.woocommerce-cart a.button:hover,
.woocommerce-page.woocommerce-checkout a.button:hover,
.woocommerce-page.woocommerce a.button:hover,
.woocommerce-page.woocommerce button.button.alt:hover,
.woocommerce button.button.alt:hover,
a.button.checkout:hover,
.single-proof_gallery .pixproof-data .grid__item .a-btn-2:hover,
.events-single-content.protected-page input[type="submit"],
.single-portfolio .protected-page input[type="submit"],
.woocommerce div.product form.cart .button,
.km-progressbar-container[data-style=style_1] .km-progressbar-tooltip,
.km-progressbar-thebar,
.km-modal-video-closer,
.km-close:focus,
.km-close:hover,
.whizz_copyright_overlay,
.post-nav a, .pages,
.pager-pagination .current,
.pager-pagination .page-numbers:hover,
.portfolio-pinterest .item-link .info-content i::before,
.portfolio-pinterest .item-link .info-content i::after,
.post-details.image .post-banner,
.portfolio-wrapper.adjusted .item-link .span-img-wrapper{
    background-color: <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

.page-numbers:not(.next, .prev) {
    background-color: <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

.next.page-numbers, .prev.page-numbers {
    background-color: <?php echo esc_html(cs_get_option( 'front_color_1')) ?> !important;
}

.a-btn.style-black,
#contactform textarea,
#contactform input:not([type="submit"]),
.comments-form textarea,
.comments-form input:not([type="submit"]),
#contactform textarea:focus,
#contactform input:focus,
.comments-form textarea:focus,
.comments-form input:focus,
.widget_tag_cloud .tagcloud a,
.single-product div.product .woocommerce-tabs ul.tabs.wc-tabs li.active,
.whizz_product_detail div.product .woocommerce-tabs ul.tabs.wc-tabs li.active,
.whizz_cart.shop_table .complement-cart .coupon .input-text:focus,
.woocommerce form.login .form-row input:focus,
.woocommerce form.login .form-row textarea:focus,
.woocommerce form.checkout .form-row input:focus,
.woocommerce form.checkout .form-row textarea:focus,
.woocommerce form.checkout_coupon .form-row input.input-text:focus,
.select2-drop-active,
form.wpcf7-form input:not([type="submit"]),
form.wpcf7-form textarea,
.contacts-info-wrap .content-item div,
.contacts-info-wrap .form input:not([type="submit"]):focus,
.contacts-info-wrap .form textarea:focus,
.events-single-content .info-event-wrap,
.swiper-container-split .swiper-slide .slide-item.slide-text .slide-text-more,
.fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .slide-text-more {
    border-bottom: 1px solid <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

.rsArrowLeft .rsArrowIcn {
    border-left: 2px solid <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

.a-btn.style-black::after,
.swiper-container-split .swiper-slide .slide-item.slide-text .slide-text-more::after,
.fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .slide-text-more::after {
    border-left: 4px solid <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

.flex-control-paging li,
#multiscroll-nav span,
.insta-box .insta-box-follow a,
.single-proof_gallery #pixproof_gallery .proof-photo.selected .meta__action.select-action,
.select-for-hovers .hover > span,
.widget_search input[type="submit"],
.select-for-hovers .hover .list {
    border: 1px solid <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

#footer.white-footer .widget_text form input[type="submit"] {
    border: 2px solid <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

.single-proof_gallery .pixproof-data .grid__item .a-btn-2,
.single-proof_gallery .pixproof-data .grid__item .a-btn-2 {
    border-bottom: 2px solid <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

.single-proof_gallery .pixproof-data .grid__item .a-btn-2,
.single-proof_gallery .pixproof-data .grid__item .a-btn-2 {
    border-top: 2px solid <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

.post-nav a,
.pages,
.single-content.modern .main-template-content,
.events-single-content .info-event-wrap {
    border-top: 1px solid <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

.page-numbers:not(.next, .prev) {
    border-top: 1px solid <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

button,
html input[type=button],
input[type=reset],
input[type=submit],
.flow-slider .swiper-arrow-left::before,
.flow-slider .swiper-arrow-right::before,
.post-nav a, .pages, .page-numbers,
.contacts-info-wrap .form input:not([type="submit"]):focus,
.contacts-info-wrap .form textarea:focus {
    border-color: <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

.woocommerce .woocommerce-message,
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-error {
    border-top: 4px solid <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
}

@media (min-width: 768px) {
    #topmenu ul ul,
    header:not(.aside-menu) #topmenu ul li.mega-menu:hover > ul::before,
    header:not(.aside-menu) #topmenu ul li.mega-menu > ul > li::before {
        background-color: <?php echo esc_html(cs_get_option( 'menu_font_color')) ?>;
    }
}

@media (max-width: 767px) {
    .header_trans-fixed.open .right-menu #topmenu .whizz-top-social .social li a {
        color: <?php echo esc_html(cs_get_option( 'menu_font_color')) ?>;
    }

    .all-posts-descr h6 {
        color: <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
    }
}

@media (max-width: 991px) {
    .all-posts-descr h5 {
        color: <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
    }

    .swiper-container-split .swiper-slide .slide-item.slide-img:before,
    .fragment-wrapper .fragment-block .fragment-img:before {
        background-color: <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
    }

    .contacts-info-wrap.style2 .content-wrap {
        border-bottom: 1px solid <?php echo esc_html(cs_get_option( 'front_color_1')) ?>;
    }
}

<?php endif; ?>

/*END FRONT COLOR 1*/

/* ======= FRONT COLOR 2 ======= */

<?php if (cs_get_option( 'front_color_2') && cs_get_option( 'front_color_2') !== '#b2b2b2') : ?>

.woocommerce #review_form #respond textarea::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.woocommerce #review_form #respond textarea::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.woocommerce #review_form #respond textarea:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.woocommerce #review_form #respond textarea:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.woocommerce #review_form #respond input::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.woocommerce #review_form #respond input::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.woocommerce #review_form #respond input:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.woocommerce #review_form #respond input:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

form.wpcf7-form input::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.wpcf7 form input::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

form.wpcf7-form input::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.wpcf7 form input::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

form.wpcf7-form input:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.wpcf7 form input:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

form.wpcf7-form input:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.wpcf7 form input:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

form.wpcf7-form textarea::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.wpcf7 form textarea::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

form.wpcf7-form textarea::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.wpcf7 form textarea::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

form.wpcf7-form textarea:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.wpcf7 form textarea:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

form.wpcf7-form textarea:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.wpcf7 form textarea:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.protected-page input[type="password"]::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.protected-page input[type="password"]::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.protected-page input[type="password"]:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.protected-page input[type="password"]:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

#contactform textarea::-moz-placeholder,
#contactform input::-moz-placeholder,
.comments-form textarea::-moz-placeholder,
.comments-form input::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

#contactform textarea::-webkit-input-placeholder,
#contactform input::-webkit-input-placeholder,
.comments-form textarea::-webkit-input-placeholder,
.comments-form input::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

#contactform textarea:-moz-placeholder,
#contactform input:-moz-placeholder,
.comments-form textarea:-moz-placeholder,
.comments-form input:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

#contactform textarea:-ms-input-placeholder,
#contactform input:-ms-input-placeholder,
.comments-form textarea:-ms-input-placeholder,
.comments-form input:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.about-section .descr,
.banner-gallery .content-wrap .description,
.top-banner.left_content .subtitle,
.category,
.contact-info .details a,
.contact-info .details h6,
.portfolio.grid .post-wrapper .item-portfolio-content .date,
.lg .lg-sub-html .dgwt-jg-item-desc,
.filter ul li,
.team-member-wrap.default .info .position,
.team-member .info .position,
.simple .post-box .text .post-box-date,
.simple .post-box .text .post-box-desc,
.simple .post-box .text .post-box-desc p,
.services .content .text,
.single-post p,
.sm-wrap-post .content .excerpt,
.sm-wrap-post .content .post-date .date,
#footer .copyright,
.comments .person .comment-date,
.post-info span a,
.post-info span,
.about-details.style1 .content .text,
.about-details .content .subtitle,
.simple-details .content .subtitle,
.titles .subtitle,
.single-pagination > div a.content,
.skill-wrapper .skill .value,
.thumb-slider-wrapp .thumb-slider-wrapp-arrow .hide-images,
.thumb-slider-wrapp .thumb-slider-wrapp-arrow .show-images,
.albums-left-filter .button-group button,
.twitter-wrapper .slug,
.post-list .pager-pagination .page-numbers.next,
.post-list .pager-pagination .page-numbers.prev,
.pricing-gallery .images.content .subtitle,
.protected-page input[type="password"],
.single-product .product .summary .woocommerce-product-rating .woocommerce-review-link,
.whizz_product_detail .product .summary .woocommerce-product-rating .woocommerce-review-link,
.single-product .product .summary .product_desc p,
.whizz_product_detail .product .summary .product_desc p,
.single-product .product .summary .product_meta a,
.whizz_product_detail .product .summary .product_meta a,
.single-product .product .summary .product_meta,
.whizz_product_detail .product .summary .product_meta,
.single-product div.product .woocommerce-tabs ul.tabs.wc-tabs li a,
.whizz_product_detail div.product .woocommerce-tabs ul.tabs.wc-tabs li a,
.single-product div.product .woocommerce-tabs .woocommerce-Tabs-panel p,
.whizz_product_detail div.product .woocommerce-tabs .woocommerce-Tabs-panel p,
.single-product .product #reviews #comments .commentlist .comment .comment-text .description,
.whizz_product_detail .product #reviews #comments .commentlist .comment .comment-text .description,
.single-product .product .woocommerce-Reviews #review_form_wrapper .comment-form-rating label,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper .comment-form-rating label,
.single-proof_gallery .pixproof-data .grid__item .entry__meta-box span,
.single-product .product .woocommerce-Reviews #review_form_wrapper input,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper input,
.single-product .product .woocommerce-Reviews #review_form_wrapper textarea,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper textarea,
.woocommerce ul.products li.product,
.woocommerce ul.products li.product .category-product a,
.whizz-woocommerce-pagination .nav-links .nav-previous a,
.whizz-woocommerce-pagination .nav-links .nav-next a,
#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_quantity,
.whizz_cart.shop_table .complement-cart .coupon .input-text,
.whizz-cart-collaterals .cart_totals .shop_table ul li,
.select2-container .select2-choice,
.select2-search:after,
.select2-search input,
.select2-results li,
.woocommerce table.shop_table .cart_item .product-name .variation dd p,
.woocommerce table.shop_table .cart-subtotal th,
.woocommerce table.shop_table .order-total th,
.woocommerce-checkout-review-order #payment .payment_methods.methods li,
.woocommerce-checkout-review-order #payment .payment_methods.methods li label,
.woocommerce-checkout-review-order #payment .payment_methods.methods li .about_paypal,
.portfolio-single-content p,
.portfolio-single-content .whizz-portfolio-footer-line .portfolio-client .client-value,
.portfolio-single-content .whizz-portfolio-footer-line .portfolio-jop-type .job-type-value,
.portfolio-single-content .whizz-portfolio-footer-line .date-value,
.portfolio-single-content .whizz-portfolio-footer-line .social-list a,
.pricing-info .pricing-list ul li,
.coming-page-wrapper .subtitle,
.popup-content-details .img-date,
.popup-content-details .caption-images-portfolio-item p,
.contacts-info-wrap.style2 .text,
.contacts-info-wrap .content-item div,
.contacts-info-wrap .content-item a,
.flow-slider .flow-title,
.wpb_text_column p,
.info-block-parallax-wrap .content-wrap p,
.single-content.modern .content-header .description,
.events-single-content .info-event-wrap .info-item .info,
.events-single-content .info-event-wrap .info-item .info a,
.events-single-content .content-main p,
.single-proof_gallery .pixproof-data .grid__item .entry__meta-box span,
.single-post dl dd,
.comments dl dd,
.text-light .monospace,
.single-proof_gallery .pixproof-data .grid__item .entry__meta-box .meta-box__title,
.single-product .product .summary .product_meta a,
.whizz-woocommerce-pagination .nav-links .nav-previous a:hover,
.whizz-woocommerce-pagination .nav-links .nav-next a:hover,
.news.type-1 .news-likes a:hover,
.single-proof_gallery .pixproof-data .grid__item .entry__meta-box .meta-box__title,
.woocommerce .woocommerce-message,
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-error,
.woocommerce .woocommerce-message:before,
.woocommerce .woocommerce-info:before,
.woocommerce .woocommerce-error:before,
.woocommerce .whizz_product_detail div.product p.price del,
.woocommerce .single-product div.product p.price del,
.woocommerce .whizz_product_detail div.product span.price del,
.woocommerce .single-product div.product span.price del,
.woocommerce ul.products.default li.product .price del,
.whizz_cart.shop_table ul .cart_item ul .product-price del,
.whizz_cart.shop_table ul .cart_item ul .product-subtotal del,
#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_price del,
.woocommerce table.shop_table .cart_item .product-total del,
.woocommerce .single-product .star-rating:before,
.woocommerce .whizz_product_detail .star-rating:before,
.single-product .product .summary .cart .variations .value ul li p,
.whizz_product_detail .product .summary .cart .variations .value ul li p,
.whizz_cart.shop_table ul .cart_item ul .product-name .variation dd p,
.portfolio-wrapper .pager-pagination .current,
.outer-album-swiper .album-text-desc,
.single-content.modern,
.km-progressbar-container[data-style=style_2] .km-progressbar-tooltip,
.km-socials-m-icon,
.events-single-content.protected-page input[type="password"],
.single-portfolio .protected-page input[type="password"],
.km-modal-video-closer,
.km-close,
.post.classic .post-info-modern .author a,
.post.classic .post-info-modern .category a,
.post.classic .post-info-modern .date a,
.post.modern .post-info-modern .author a,
.post.modern .post-info-modern .category a,
.post.modern .post-info-modern .date a,
.post.classic .post-info-modern .author,
.post.modern .post-info-modern .author,
.post.classic .post-big-letter,
.post.modern .post-big-letter,
.widget_search form div::after,
.main-wrapper .col-md-3 .sidebar-item strong,
.main-wrapper .col-md-3 .sidebar-item li:hover > a:not(.rsswidget),
.main-wrapper .col-md-3 .sidebar-item a:hover,
.main-wrapper .col-md-3 .sidebar-item a:hover {
    color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.grey,
.category::before,
.team-member-wrap.default .team-member::before,
.services::after,
.skill-wrapper .skill .line,
.twitter-wrapper span::after,
.about-section,
.contact-info,
.about-details-section,
.coming-soon-wrap .coming-soon-descr,
.swipe-btn,
.popup-content-details .img-date::before,
.news-entry .news,
.iframe-video.audio,
.post-info span.author,
code,
.single-product .product .summary .cart .variations .value ul li label:before,
.whizz_product_detail .product .summary .cart .variations .value ul li label:before,
.woocommerce form.login .form-row input:-webkit-autofill,
.woocommerce form.checkout .form-row input:-webkit-autofill,
.woocommerce form.login .form-row input:-webkit-autofill:hover,
.woocommerce form.checkout .form-row input:-webkit-autofill:hover,
.woocommerce form.login .form-row input:-webkit-autofill:focus,
.woocommerce form.checkout .form-row input:-webkit-autofill:focus,
.woocommerce form.login .form-row label.checkbox:before,
.woocommerce form.checkout .form-row label.checkbox:before,
.exhibition-wrap .room__side--back,
.flipto,
.fancybox-infobar .fancybox-button,
.fancybox-infobar .fancybox-button:hover,
.fancybox-infobar .fancybox-button::before,
.twitter-slider .flipster-carousel .flip-content,
.contacts-info-wrap.style2.over::before,
.kenburns-play,
#back-to-top,
#back-to-top:hover,
.stripped-wrapper .stripped-link .image-wrapper,
.fragment-wrapper .fragment-block .fragment-img,
.exhibition-wrap,
.exhibition-wrap .room__side--left,
.exhibition-wrap .room__side--right,
.exhibition-wrap .room__side--bottom,
.km-progressbar,
.km-radial-progressbar .inset .percentage,
.post-little-banner,
.services::before, .services::after {
    background-color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.coming-soon .svg .svgRect {
    fill: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.row.simple {
    border-right: 2px solid <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.post-info span {
    border-right: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.single-post .single-content .swiper-container,
.single-product .product .woocommerce-Reviews #review_form_wrapper input,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper input,
.single-product .product .woocommerce-Reviews #review_form_wrapper textarea,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper textarea,
.whizz_cart.shop_table .complement-cart .coupon .input-text,
.woocommerce form.checkout_coupon .form-row input.input-text,
.woocommerce form.login .form-row input,
.woocommerce form.login .form-row textarea,
.woocommerce form.checkout .form-row input,
.woocommerce form.checkout .form-row textarea,
.select2-container .select2-choice,
.select2-container.select2-dropdown-open.select2-drop-above .select2-choice,
.select2-search input,
.single-product .product .woocommerce-tabs .tabs.wc-tabs:before,
.whizz_product_detail .product .woocommerce-tabs .tabs.wc-tabs:before,
.whizz_cart.shop_table .heading,
.whizz_cart.shop_table .complement-cart,
.woocommerce table.shop_table thead,
.woocommerce table.shop_table tfoot,
.main-wrapper .col-md-3 .sidebar-item h5 {
    border-bottom: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

form.wpcf7-form input:not([type="submit"]),
form.wpcf7-form textarea,
.events-single-content.protected-page input[type="password"],
.single-portfolio .protected-page input[type="password"],
.events-single-content.protected-page input[type="password"]:focus,
.single-portfolio .protected-page input[type="password"]:focus,
.protected-page input[type="password"]:focus {
    border-bottom: 2px solid <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.comment-title,
.main-wrapper .col-md-3 .sidebar-item ul li {
    border-bottom: 1px dashed <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.single-product .product .summary .cart .variations .value fieldset,
.whizz_product_detail .product .summary .cart .variations .value fieldset,
.woocommerce form.checkout_coupon,
.woocommerce form.login,
.portfolio-single-content .whizz-portfolio-footer-line {
    border-bottom: 4px solid <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.sidebar-item input,
.empty-post-list input[type=search],
table,
th,
td,
.contacts-info-wrap .form input:not([type="submit"]),
.contacts-info-wrap .form textarea,
.widget_search input[type="text"],
.main-wrapper .col-md-3 .sidebar-item,
.single-proof_gallery #pixproof_gallery .proof-photo .meta__action.select-action {
    border: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.woocommerce .quantity .qty {
    border: 2px solid <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.woocommerce table.shop_table tfoot {
    border-top: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

.single-product .product .summary .cart .variations .value fieldset,
.whizz_product_detail .product .summary .cart .variations .value fieldset,
.portfolio-single-content .whizz-portfolio-footer-line {
    border-top: 4px solid <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
}

@media (min-width: 768px) {
    #topmenu .f-right > div:first-child::before,
    .right-menu .f-right > div:first-child::before,
    .aside-menu .aside-nav {
        background-color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
    }

    .aside-menu #topmenu {
        border-right: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
    }

    .aside-menu #topmenu ul > li > ul > li > ul {
        border-top: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
        border-bottom: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
    }
}

@media (max-width: 767px) {
    #topmenu > ul.menu > li > ul > li,
    #topmenu > ul.menu > li > ul > li > ul > li {
        border: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
    }

    .banner-gallery::before {
        background-color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
    }
}

@media (max-width: 991px) {
    .all-posts-descr p {
        color: <?php echo esc_html(cs_get_option( 'front_color_2')) ?>;
    }
}

<?php endif; ?>

/*END FRONT COLOR 2*/

/* ======= BASE WHITE COLOR ======= */

<?php if (cs_get_option( 'base_color') && cs_get_option( 'base_color') !== '#ffffff') : ?>

::-moz-selection {
    color: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

::selection {
    color: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

::-moz-selection {
    color: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

#footer .widget_text form input::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

#footer .widget_text form input::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

#footer .widget_text form input:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

#footer .widget_text form input:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

.text-light p,
.text-light a,
.text-light,
.highlight,
.a-btn,
.a-btn-2,
.a-btn-2:hover,
.a-btn-2:visited,
.a-btn-2:focus,
.a-btn-2:active,
.header_trans-fixed.header_top_bg .logo span,
.header_trans-fixed.header_top_bg #topmenu ul li a,
.header_trans-fixed .mob-nav i,
.header_trans-fixed .whizz-top-social .social-icon,
.header_trans-fixed .right-menu #topmenu .whizz-top-social .social li a,
.top-banner .subtitle,
.top-banner .title,
.top-banner .descr,
.about-section .a-btn-2:hover,
.gallery-item .info-content h5,
.modern .gallery-item .info-content h5,
.portfolio-wrapper .load-more.button,
.item-overlay > h5,
.classic .item-overlay h5,
.portfolio.big_gap .social-icon,
.portfolio.big_gap .portfolio-title,
.portfolio.big_gap .big_gap_share li button,
.single-proof_gallery .pixproof-data .grid__item .a-btn-2:hover,
.dgwt-jg-gallery.justified-gallery .dgwt-jg-caption span,
.lg .lg-sub-html h4,
.team-member .social .wrap a,
.team-member.fullheight .info .title,
.team-member.fullheight .info .description,
.post-box .text h6,
.post-box .text span,
.post-content h5,
.post-content .date,
.wpcf7 form input[type="submit"],
form.wpcf7-form #submit,
.a-btn-2.wpc-but::after,
.wpcf7 form input[type="submit"]:hover,
form.wpcf7-form #submit:hover,
#footer .copyright a,
#footer .social-links a,
.banner-slider-wrap .title,
.banner-slider-wrap .subtitle,
.banner-slider-wrap .descr,
.banner-slider-wrap .swiper-arrow-right,
#contactform #submit,
.comments-form #submit,
.post-info span a,
mark,
ins,
.post-nav a,
.pages,
button,
html input[type=button],
input[type=reset],
input[type=submit],
.woocommerce-page.woocommerce-cart a.button:hover,
.woocommerce-page.woocommerce-checkout a.button:hover,
.woocommerce-page.woocommerce a.button:hover,
.woocommerce-page.woocommerce button.button.alt:hover,
.woocommerce button.button.alt:hover,
a.button.checkout:hover,
.woocommerce ul.products li.product .whizz-prod-list-image .whizz-add-to-cart a,
.woocommerce-page.woocommerce .woocommerce-message a.button,
.woocommerce .whizz_images span.onsale,
.woocommerce ul.products li.product .whizz-prod-list-image .onsale,
.woocommerce .woocommerce-message .showcoupon,
.woocommerce .woocommerce-message a,
.woocommerce .woocommerce-info .showcoupon,
.woocommerce .woocommerce-info .showlogin,
.single-product .product .summary .cart .group_table td.label,
.whizz_product_detail .product .summary .cart .group_table td.label,
.single-product .product .summary .cart .button:hover,
.whizz_product_detail .product .summary .cart .button:hover,
.woocommerce ul.products li.product .whizz_product_list_name .count,
.header_trans-fixed .mini-cart-wrapper .whizz-shop-icon::before,
#topmenu .whizz_mini_cart .product_list_widget .empty,
#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_name,
#topmenu .whizz_mini_cart a.button,
.full_screen_slider .swiper-arrow-left,
.full_screen_slider .swiper-arrow-right,
.full-screen-slider__img .full-content-wrap,
.full_screen_slider .slider-click,
.full_screen_slider .slider-click.left .arrow::before,
.full_screen_slider .slider-click.right .arrow::before,
.whizz_copyright_overlay_text,
.whizz-sound-btn:before,
.iframe-video .video-content .play-button,
.iframe-video .video-content .play-button::before,
.iframe-video .video-content .video-close-button,
.multiscroll-tooltip,
.multiscroll-slider .descr,
.scroll-btn::before,
.multiscroll-slider .title a,
.error404 .hero-inner .bigtext,
.error404 .hero-inner .title,
.rsArrow,
.portfolio-single-content .gallery-single.infinite_full_gallery .item-single a .info-content h5,
.iframe-video.banner-video .video-content a,
.iframe-video.banner-video .video-content .play-button::before,
.kenburns-wrap .caption,
.kenburns-play::before,
.portfolio-slider-wrapper.slider_simple .info,
.portfolio-slider-wrapper.slider_simple .portfolio-title,
.caption-images-portfolio .close-btn,
.caption-images-portfolio span,
.caption-images-portfolio p,
.portfolio-pagination.slider_simple::before,
.main-header-testimonial .title,
.main-header-testimonial .content-slide .description h1,
.main-header-testimonial .content-slide .description h2,
.main-header-testimonial .content-slide .description h3,
.main-header-testimonial .content-slide .description h4,
.main-header-testimonial .content-slide .description h5,
.main-header-testimonial .content-slide .description h6,
.main-header-testimonial .content-slide .description p,
.main-header-testimonial .content-slide .author,
.sliphover-overlay div,
.parallax-window .content-parallax .title,
.parallax-window .content-parallax .category-parallax a,
.parallax-window .content-parallax .category-parallax a:hover,
.whizzInstagramWidget,
.ContactWidget h3,
.ContactWidget div.contact_content,
.ContactWidget .contact_url,
.ContactWidget a.fa,
#footer .widget_text h5,
#footer .widget_text .textwidget > p,
#footer .widget_text .wpcf7-response-output,
#footer .widget_text form::after,
.portfolio-slider-wrapper.slider_classic .content-wrap,
.portfolio-slider-wrapper.slider_classic .content-wrap .excerpt p,
.portfolio-slider-wrapper.slider_classic .content-wrap .a-btn:hover,
.pricing-gallery .hover-caption,
.swiper3-container.carousel-albums .swiper3-button-next::before,
.swiper3-container.carousel-albums .swiper3-button-prev::before,
.carousel-albums .image-wrap .caption .title,
.carousel-albums .image-wrap .caption .descr,
.events-single-content.protected-page .input_protected_wrapper::after,
.single-portfolio .protected-page .input_protected_wrapper::after,
.events-single-content.protected-page input[type="submit"],
.single-portfolio .protected-page input[type="submit"],
.stripped-wrapper .stripped-link .stripped-text .title,
.stripped-wrapper .stripped-link .stripped-text .subtitle,
.swiper-container-vert-slider .swiper-slide .container .wrap-text,
.swiper-container-vert-slider .swiper-slide .container .wrap-text .subtitle a,
.swiper-container-vert-slider .swiper-slide .container .wrap-text .slide-text-more,
.swiper-container-vert-slider .swiper-button::before,
.swiper-album .swiper3-slide .link-album-slide .title-wrap .title,
.main-album-anim-wrap,
.content__subtitle a,
.content__desc,
.content__link,
.content__link:hover,
.content__link:focus,
.single-proof_gallery .pixproof-data .grid__item .a-btn-2:hover,
.img-slider .flex-next,
.img-slider .flex-prev,
.post .post-wrap-item.text,
.post-wrap-item.text .post-content i,
.post-wrap-item.text .post-content blockquote,
.woocommerce div.product form.cart .button::after,
.input_post_wrapper::after,
.woocommerce-page.woocommerce-cart .woocommerce input.button,
.woocommerce-page.woocommerce-checkout .woocommerce input.button,
#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_price,
.single-product .product .woocommerce-Reviews #review_form_wrapper .comment-form .form-submit input#submit,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper .comment-form .form-submit input#submit,
.input_shop_wrapper::after,
.woocommerce ul.products li.product .whizz-prod-list-image .whizz-link,
#topmenu .whizz_mini_cart a.button,
form.wpcf7-form .input_protected_wrapper::after,
.landing_split .content-wrap .portfolio-title,
.landing_split .content-wrap .excerpt,
.landing_split .content-wrap .a-btn:hover,
.showcase_slider .slide-image .arrow::before,
.showcase_slider .slide-title,
.exhibition-wrap .btn::before,
.exhibition-wrap .btn--toggle.btn--active,
.exhibition-wrap .slide__name,
.exhibition-wrap .slide__title,
.exhibition-wrap .cat,
.exhibition-wrap .cat a,
.banner-slider .page-view .project .text h1,
.banner-slider .page-view .project .text p,
.flow-slider .swiper-slide-active .flow-title,
.contacts-info-wrap.style4 .additional-content-wrap,
.contacts-info-wrap.style4 .additional-content-wrap .content-item a:hover,
.contacts-info-wrap.style4 .additional-content-wrap .title,
.client-wrap .client-overlay,
.events-single-content .main-top-content h2,
.events-single-content .end-event,
.item .item-img .end-event,
.single-proof_gallery #pixproof_gallery .proof-photo .meta__action.select-action:before,
.single-proof_gallery #pixproof_gallery .proof-photo .proof-photo__bg .proof-photo__id,
#footer .sidebar-item[class*='widget_'] h5,
.iframe-video .video-close-button,
.portfolio-slider-wrapper.slider_classic .content-wrap .portfolio-title,
#topmenu .whizz_mini_cart a.button::after,
.wpcf7 form input[type="submit"],
form.wpcf7-form #submit, .woocommerce div.product form.cart .button,
.woocommerce-page.woocommerce-cart .woocommerce .shop-wrap::after,
.WhizzInstagramWidget,
.pager-pagination .current,
.next.page-numbers,
.prev.page-numbers,
.single-post .post-banner .title,
.portfolio-wrapper.adjusted .info-content,
.disortion-wrap .scene-nav,
.single-post .post-banner .date-post {
    color: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

a.page-numbers:hover {
    color: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

#footer .widget_text form input:not([type="submit"]) {
    color: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

.kenburns-wrap .whizz-sound-btn::before,
.single-product .product .summary .cart .button:hover,
.whizz_product_detail .product .summary .cart .button:hover,
.wc-proceed-to-checkout .a-btn-2:hover,
.wc-proceed-to-checkout .a-btn-2:visited,
.wc-proceed-to-checkout .a-btn-2:focus,
.wc-proceed-to-checkout .a-btn-2:active {
    color: <?php echo esc_html(cs_get_option( 'base_color')) ?> !important;
}

body,
.text-light .bottom-line:after,
.white,
.header_trans-fixed.header_top_bg.open,
.flex-control-paging li a,
.banner-gallery .content-wrap,
.action,
.portfolio-wrapper .portfolio.grid.grid_modern .item-portfolio-content,
.post-box .post-descr,
.img-slider .flex-next,
.img-slider .flex-prev,
.single-post .single-content .swiper-container .description,
.single-post .single-content .swiper-arrow-right,
.single-post .single-content .swiper-arrow-left,
#footer.white-footer,
.widget_search input[type="text"],
.black p.separator,
.mb_YTPPlaypause:before,
.whizz_images .pagination .swiper-pagination-switch,
.full_screen_slider .swiper-arrow-left::before,
.full_screen_slider .swiper-arrow-right::before,
.full_screen_slider .slider-click .arrow::after,
.pricing-item,
.ms-section,
.scroll-btn::after,
.thumb-slider-wrapp .sub-thumb-slider,
.thumb-slider-wrapp .thumb-slider-wrapp-arrow .hide-images,
.thumb-slider-wrapp .thumb-slider-wrapp-arrow .show-images,
.portfolio-pagination.slider_simple::after,
.main-header-testimonial .pagination span,
.main-header-testimonial .content-slide .logo-customer::before,
.popup-content-details .content,
.twitter-wrapper span::before,
.swiper3-container.carousel-albums .swiper3-button-next::after,
.swiper3-container.carousel-albums .swiper3-button-prev::after,
.line-of-images.logos2 a::before,
.swiper-container-vert-slider .swiper-button::after,
.pricing-gallery .images.content .content-wrap,
.swiper-album .swiper3-wrapper,
.swiper-album .swiper3-slide,
.swiper-album .swiper3-slide .link-album-slide .title-wrap::before,
.img-slider .flex-next,
.img-slider .flex-prev,
.showcase_slider .slide-image .arrow::after,
.exhibition-wrap .btn::after,
.gallery-single .pinterest .info-content h5::before,
.gallery-single .pinterest .info-content h5::after,
.select-for-hovers .hover .list,
.portfolio-slider-wrapper.slider_simple .info::before,
.caption-images-portfolio .close-btn::before,
.swiper-album .swiper3-slide::before,
.fullwidth .gallery-item .info-content::before,
.post-paper > .container,
.main-wrapper.footer-parallax,
.page-numbers,
.insta-wrapper .info-hover i::before,
.insta-wrapper .info-hover i::after,
.preloader-svg {
    background: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

.next.page-numbers:hover,
.prev.page-numbers:hover {
    background: <?php echo esc_html(cs_get_option( 'base_color')) ?> !important;
}

.pricing-item .mask-image .pricing_mask,
.coming-soon .svg .maskRect,
.banner-slider .page-view .arrows .arrow svg polygon {
    fill: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

.a-btn,
.content__link,
.woocommerce ul.products li.product .whizz-prod-list-image .whizz-add-to-cart a,
.woocommerce-page.woocommerce .woocommerce-message a.button,
.swiper-container-vert-slider .swiper-slide .container .wrap-text .slide-text-more {
    border-bottom: 1px solid <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

.a-btn::after,
.swiper-container-vert-slider .swiper-slide .container .wrap-text .slide-text-more::after,
.content__link::after,
.woocommerce ul.products li.product .whizz-prod-list-image .whizz-add-to-cart a::after,
.woocommerce-page.woocommerce .woocommerce-message a.button::after {
    border-left: 4px solid <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

.flex-control-paging li a,
#topmenu .whizz_mini_cart a.button {
    border: 1px solid <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

.portfolio.big_gap .social-icon::before,
.portfolio-slider-wrapper.slider_simple .info,
.caption-images-portfolio .close-btn,
#footer .widget_text form input[type="submit"] {
    border: 2px solid <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

.fullview .rsArrow .rsArrowIcn,
.scroll-btn::before {
    border-color: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
}

@media (min-width: 768px) {
    #topmenu ul ul li a,
    #topmenu ul ul li.current-menu-item > a {
        color: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
    }
}

@media (max-width: 991px) {
    .popup-content-details {
        background-color: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
    }

    .swiper-container-split .swiper-slide .slide-item.slide-text,
    .swiper-container-split .swiper-slide .slide-item.slide-text .slide-text-more,
    .swiper-container-split .swiper-slide .slide-item.slide-text .subtitle a,
    .fragment-wrapper .fragment-block .fragment-text .wrap-frag-text,
    .fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .desc mark,
    .fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .slide-text-more {
        color: <?php echo esc_html(cs_get_option( 'base_color')) ?>;
    }

    .swiper-container-split .swiper-slide .slide-item.slide-text .slide-text-more,
    .fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .slide-text-more {
        border-bottom: 1px solid <?php echo esc_html(cs_get_option( 'base_color')) ?>;
    }

    .swiper-container-split .swiper-slide .slide-item.slide-text .slide-text-more::after,
    .fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .slide-text-more::after {
        border-left: 4px solid <?php echo esc_html(cs_get_option( 'base_color')) ?>;
    }
}
.post-list .pager-pagination .page-numbers.next,
.post-list .pager-pagination .page-numbers.prev {
    background-color: transparent !important;
    border: none !important;
    padding-bottom: 0;
}

/*END BASE WHITE COLOR*/
<?php
endif;

}

//TYPOGRAPHY

$options = apply_filters( 'cs_get_option', get_option( CS_OPTION ) );

function get_str_by_number($str){
    $number = preg_replace("/[0-9|\.]/", '', $str);
    return $number;
}

foreach ($options as $key => $item) {
    if (is_array($item)) {
        if (!empty($item['variant']) && $item['variant'] == 'regular') {
            $item['variant'] = 'normal';
        }
    }
    $options[$key] = $item;
}

function calculateFontWeight( $fontWeight ) {
    $fontWeightValue = '';
    $fontStyleValue = '';

    switch( $fontWeight ) {
        case '100':
            $fontWeightValue = '100';
            break;
        case '100italic':
            $fontWeightValue = '100';
            $fontStyleValue = 'italic';
            break;
        case '300':
            $fontWeightValue = '300';
            break;
        case '300italic':
            $fontWeightValue = '300';
            $fontStyleValue = 'italic';
            break;
        case '500':
            $fontWeightValue = '500';
            break;
        case '500italic':
            $fontWeightValue = '500';
            $fontStyleValue = 'italic';
            break;
        case '700':
            $fontWeightValue = '700';
            break;
        case '700italic':
            $fontWeightValue = '700';
            $fontStyleValue = 'italic';
            break;
        case '900':
            $fontWeightValue = '900';
            break;
        case '900italic':
            $fontWeightValue = '900';
            $fontStyleValue = 'italic';
            break;
        case 'italic':
            $fontStyleValue = 'italic';
            break;
    }

    return array('weight' => $fontWeightValue, 'style' => $fontStyleValue);
}

$all_button_font = $options['all_button_font_family']; ?>

.a-btn, .a-btn-2 {
<?php
if(!empty($all_button_font['family'])){
	echo "font-family: \"{$all_button_font['family']}\" !important;";
}

$variant = calculateFontWeight( $all_button_font['variant'] );
if(!empty($variant['style'])) : ?> font-style: <?php echo esc_html( $variant['style']); ?> !important;
<?php endif;
if(!empty($variant['weight'])) : ?> font-weight: <?php echo esc_html( $variant['weight']); ?> !important;
<?php endif;

$button_font_style = get_str_by_number($all_button_font['variant']);
if(!empty($button_font_style) && !empty($all_button_font['family'])){
	echo "font-style:{$button_font_style} !important;";
}

$all_button_font_size = get_number_str($options['all_button_font_size']);
if(!empty($all_button_font_size)){
	echo "font-size: {$all_button_font_size}px !important;";
}

$all_button_line_height = get_number_str($options['all_button_line_height']);
if(!empty($all_button_line_height)){
   echo "line-height:{$all_button_line_height}px !important;";
}
if(!empty($options['all_button_letter_spacing'])){
	echo "letter-spacing:{$options['all_button_letter_spacing']} !important;";
} ?>
}

<?php $all_links_font= $options['all_links_font_family']; ?>
a {
<?php if(!empty($all_links_font['family'])){
	echo "font-family: \"{$all_links_font['family']}\" !important;";
}
$variant = calculateFontWeight( $all_links_font['variant'] );
if(!empty($all_links_font['family']) && !empty($variant['style'])) : ?> font-style: <?php echo esc_html( $variant['style']); ?> !important;
<?php endif;
if(!empty($variant['weight'])) : ?> font-weight: <?php echo esc_html( $variant['weight']); ?> !important;
<?php endif;

$links_font_family = get_str_by_number($all_links_font['variant']);
if(!empty($links_font_family) && !empty($all_links_font['family'])) {
	echo "font-style:{$links_font_family} !important;";
}

$all_links_font_size = get_number_str($options['all_links_font_size']);
if(!empty($all_links_font_size)){
	echo "font-size: {$all_links_font_size}px !important;" ;
}

$all_links_line_height = get_number_str($options['all_links_line_height']);
if(!empty($all_links_line_height)){
	echo "line-height:{$all_links_line_height}px !important;";
}

$all_links_letter_spacing = get_number_str($options['all_links_letter_spacing']);
if(!empty($all_links_letter_spacing)){
	echo "letter-spacing:{$all_links_letter_spacing} !important;";
} ?>
}

/*FOOTER*/
<?php function get_number_str($str){
    $number = preg_replace("/[^0-9|\.]/", '', $str);
    return $number;
}


/* FOR TITLE H1 - H6 */
if ( cs_get_option('heading') ) {
    foreach (cs_get_option('heading') as $title) {
        $font_family = $title['heading_family'];
        echo $title['heading_tag']; ?>
,
<?php echo $title['heading_tag']; ?>
a {
<?php if($font_family['family']){
	echo "font-family: {$font_family['family']} !important;";
}
$one_title_size = get_number_str($title['heading_size']);
if($one_title_size){
	echo "font-size: {$one_title_size}px !important;\n line-height: normal;";
}?>
}

<?php }
} ?>

#topmenu > ul > div > div > li > a,
#topmenu > ul > li > a {
<?php if ( cs_get_option('menu_item_family') ) {

	$font_family = cs_get_option('menu_item_family');
	if(!empty($font_family['family'])){ ?> font-family: "<?php echo esc_html( $font_family['family'] ); ?>", sans-serif;
<?php }

$variant = calculateFontWeight( $font_family['variant'] );
if(!empty($variant['style'])) : ?> font-style: <?php echo esc_html( $variant['style']); ?> !important;
<?php endif;
if(!empty($variant['weight'])) : ?> font-weight: <?php echo esc_html( $variant['weight']); ?> !important;
<?php endif;
}
if ( cs_get_option('menu_item_size') ) {
$menu_item_size = get_number_str(cs_get_option('menu_item_size'));  ?> font-size: <?php echo esc_html( $menu_item_size ); ?>px;
<?php }
if ( cs_get_option('menu_line_height') ) {
	$menu_line_height = get_number_str(cs_get_option('menu_line_height'));  ?> line-height: <?php echo esc_html( $menu_line_height ); ?>px;
<?php } ?>
}

#topmenu ul ul li a {
<?php if ( cs_get_option('submenu_item_family') ) {
	$font_family = cs_get_option('submenu_item_family');
	if(!empty($font_family['family'])){ ?> font-family: "<?php echo esc_html( $font_family['family'] ); ?>", sans-serif;
<?php }
$variant = calculateFontWeight( $font_family['variant'] );
if(!empty($variant['style'])) : ?> font-style: <?php echo esc_html( $variant['style']); ?> !important;
<?php endif;
if(!empty($variant['weight'])) : ?> font-weight: <?php echo esc_html( $variant['weight']); ?> !important;
<?php endif;
}
if ( cs_get_option('submenu_item_size') ) {
$submenu_item_size = get_number_str(cs_get_option('submenu_item_size')); ?> font-size: <?php echo esc_html( $submenu_item_size ); ?>px;
<?php }

if ( cs_get_option('submenu_line_height') ) {
	$submenu_line_height = get_number_str(cs_get_option('submenu_line_height'));  ?> line-height: <?php echo esc_html( $submenu_line_height ); ?>px;
<?php } ?>
}

<?php if( cs_get_option( 'preloader_image' ) ) : 
    $image_src = wp_get_attachment_image_url( cs_get_option( 'preloader_image' ), 'full', false );
?>

@-webkit-keyframes scaleout-image {
    0% {
        -webkit-transform: scale(0.5);
        -moz-transform: scale(0.5);
        -ms-transform: scale(0.5);
        -o-transform: scale(0.5);
        transform: scale(0.5);
    }
    100% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
        opacity: 0;
    }
}

@keyframes scaleout-image {
    0% {
        -webkit-transform: scale(0.5);
        -moz-transform: scale(0.5);
        -ms-transform: scale(0.5);
        -o-transform: scale(0.5);
        transform: scale(0.5);
    }
    100% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
        opacity: 0;
    }
}

.animsition-loading {
    background-color: white;
    z-index: 9999;
    background-image: url(<?php echo esc_url( $image_src ); ?>) !important;
    background-repeat: no-repeat !important;
    background-position: center center !important;

}

.animsition-loading:before {
    display: none;
}

<?php endif; ?>

<?php 
if ( cs_get_option( 'custom_css_styles' ) ) {
    $custom_css_styles = str_replace('&gt;','>', cs_get_option( 'custom_css_styles' ));
    echo $custom_css_styles;
} ?>


/**** BLACK VERSION   ****/

<?php if ( cs_get_option('enable_style_black') && cs_get_option('change_colors')) { ?>

.header_top_bg,
#topmenu,
#topmenu ul ul,
.header_trans-fixed.header_top_bg.bg-fixed-color,
header:not(.aside-menu) #topmenu ul li.mega-menu:hover > ul::before{
    background-color: <?php echo esc_html(cs_get_option( 'menu_bg_color_b')) ?>;
}

@media (max-width: 991px) {
    #topmenu,
    .header_trans-fixed.header_top_bg.open,
    #topmenu ul.menu{
        background: <?php echo esc_html(cs_get_option( 'menu_bg_color_b')) ?>!important;
    }
}
@media (min-width: 992px) {
    #topmenu .whizz-top-social .social,
    .aside-menu .topmenu,
    .aside-menu #topmenu::after {
        background-color: <?php echo esc_html(cs_get_option( 'menu_bg_color_b')) ?>;
    }
    .header_trans-fixed.header_top_bg.open{
        background: <?php echo esc_html(cs_get_option( 'menu_bg_color_b')) ?>;
    }
}

#topmenu ul li a,
.top-menu .logo span,
#topmenu .whizz-top-social .social li a,
a.mob-nav.active,
a.mob-nav:visited,
a.mob-nav:hover,
a.mob-nav,
a.socials-mob-but,
a.socials-mob-but:hover,
.mini-cart-wrapper .whizz-shop-icon:before,
.right-menu .logo span,
.mini-cart-wrapper .whizz-shop-icon .cart-contents-count,
#topmenu ul ul li a,
.mini-cart-wrapper .whizz-shop-icon:before,
#topmenu ul ul li.current-menu-item > a{
    color: <?php echo esc_html(cs_get_option( 'menu_font_color_b')) ?>;
}


<?php if (cs_get_option( 'menu_font_color_t') && cs_get_option('menu_font_color_t') !== '#ffffff' ) { ?>
    .header_trans-fixed .right-menu #topmenu .whizz-top-social .social li a,
    .header_trans-fixed.header_top_bg.open header .logo span,
    a.mob-nav.active,
    a.mob-nav:visited,
    a.mob-nav:hover,
    a.mob-nav,
    a.mob-nav i,
    a.socials-mob-but,
    a.socials-mob-but i,
    a.socials-mob-but:hover,
    .header_trans-fixed.header_top_bg.open header .socials-mob-but:hover i,
    .header_trans-fixed.header_top_bg.open header .socials-mob-but:active i,
    .header_trans-fixed.header_top_bg.open header .socials-mob-but:visited i,
    .header_trans-fixed .mini-cart-wrapper .whizz-shop-icon::before{
        color: <?php echo esc_html(cs_get_option( 'menu_font_color_t')) ?>!important;
    }
    #topmenu .f-right > div:first-child::before, .right-menu .f-right > div:first-child::before{
        background-color: <?php echo esc_html(cs_get_option( 'menu_font_color_t')) ?>!important;
    }

@media only screen and (min-width: 992px){
    .header_trans-fixed.header_top_bg .mini-cart-wrapper .whizz-shop-icon .cart-contents-count{
        color: <?php echo esc_html(cs_get_option( 'menu_font_color_t')) ?>;
    }
}
<?php } ?>



@media only screen and (max-width: 991px){
    .header_trans-fixed.header_top_bg.open header .logo span,
    .header_trans-fixed.header_top_bg.open header .mob-nav i,
    .header_trans-fixed.header_top_bg #topmenu ul li a,
    .header_trans-fixed.header_top_bg.open #topmenu ul li a,
    .header_trans-fixed.header_top_bg .mini-cart-wrapper .whizz-shop-icon .cart-contents-count{
        color: <?php echo esc_html(cs_get_option( 'menu_font_color_b')) ?>;
    }
    .header_trans-fixed.header_top_bg.open header .socials-mob-but i,
    .header_trans-fixed #topmenu .whizz-top-social .social li a,
    .header_trans-fixed .mini-cart-wrapper .whizz-shop-icon::before{
        color: <?php echo esc_html(cs_get_option( 'menu_font_color_b')) ?>!important;
    }
    .header_trans-fixed.open .right-menu #topmenu .whizz-top-social .social li a{
        color: <?php echo esc_html(cs_get_option( 'menu_font_color_b')) ?>!important;
    }
}

.whizz_cart.shop_table ul .cart_item ul .product-remove .remove{
    color: <?php echo esc_html(cs_get_option( 'menu_font_color_b')) ?>!important;
}

.contacts-info-wrap.style4 .additional-content-wrap,
.contacts-info-wrap.style2.over::before{
    background-color: <?php echo esc_html(cs_get_option( 'base_color_b')) ?>;
}


/* ======= FRONT COLOR 1 ======= */

.widget_text form input::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.widget_text form input::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.widget_text form input:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.widget_text form input:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.post.modern .post-info-modern span a:hover,
.post.classic .post-info-modern span a:hover,
.main-wrapper .col-md-3 .sidebar-item a:hover,
.main-wrapper .col-md-3 .sidebar-item li:hover > a:not(.rsswidget),
.main-wrapper .col-md-3 .sidebar-item a:hover{
    color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.main-wrapper .col-md-3 .sidebar-item li:hover{
    opacity: 1;
}

.main-wrapper .col-md-3 .sidebar-item{
    border: 1px solid #616161;
}

.main-wrapper .col-md-3 .sidebar-item h5,
.main-wrapper .col-md-3 .sidebar-item ul li{
    border-color: #616161;
}
.post-little-banner{
    background-color: #616161;
}


body,
.a-btn,
.text-dark,
.header_trans-fixed.header_top_bg.open #topmenu ul li a,
.mob-nav,
.whizz-top-social .social-icon,
.banner-gallery .content-wrap .title,
.action .title,
.action .subtitle,
.content__desc,
.content__link,
.content__subtitle a,
#topmenu .whizz_mini_cart .product_list_widget .empty,
.about-section .subtitle,
.content__title,
.about-section .title,
.about-section .a-btn-2,
.fullwidth .gallery-item .info-content h5,
.fullwidth .gallery-item .info-content .subtitle,
.portfolio.classic.big .portfolio-title,
.portfolio.masonry .item-portfolio-content .portfolio-title,
.single-proof_gallery .single-content > .title,
.single-proof_gallery .title,
.post-box .post-descr h6,
.post-box .post-descr p,
.post_list .post-box-img-wrapp .text .post-box-title,
.post_list .post-box-img-wrapp .text .post-box-date,
.recent-post-single .recent-title,
.contact-info .details h5,
.pagination.cs-pager .page-numbers.next:after,
.pagination.cs-pager .page-numbers.prev:after,
.widget_search input[type="text"],
.sidebar-item ul li a,
.protected-page .protected-title,
.protected-page form,
.protected-page input[type="password"]:focus,
.protected-page input[type="submit"],
.comments .content .comment-reply-link:hover,
.comments .content .text,
#contactform h3,
.comments-form h3,
.post-info span.author,
.post-info span.author a,
.post-nav a:hover,
.post-nav a:focus,
.page-numbers:hover,
.page-numbers:focus,
.next.page-numbers:hover,
.prev.page-numbers:hover,
.post-nav .pages,
.post-nav .current,
.pager-pagination .pages,
.woocommerce .whizz_product_detail div.product p.price,
.woocommerce .single-product div.product p.price,
.woocommerce .whizz_product_detail div.product span.price,
.woocommerce .single-product div.product span.price,
.woocommerce ul.products.default li.product .price,
.whizz_cart.shop_table ul .cart_item ul .product-price,
.whizz_cart.shop_table ul .cart_item ul .product-subtotal,
#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_price,
.woocommerce table.shop_table .cart_item .product-total,
.woocommerce .whizz_product_detail div.product p.price ins,
.woocommerce .single-product div.product p.price ins,
.woocommerce .whizz_product_detail div.product span.price ins,
.woocommerce .single-product div.product span.price ins,
.woocommerce ul.products.default li.product .price ins,
.whizz_cart.shop_table ul .cart_item ul .product-price ins,
.whizz_cart.shop_table ul .cart_item ul .product-subtotal ins,
#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_price ins,
.woocommerce table.shop_table .cart_item .product-total ins,
.woocommerce .single-product .star-rating,
.woocommerce .whizz_product_detail .star-rating,
.woocommerce .quantity .qty,
.single-product .product .summary .product_title,
.whizz_product_detail .product .summary .product_title,
.single-product .product .summary .cart .variations .label label,
.whizz_product_detail .product .summary .cart .variations .label label,
.single-product .product .summary .cart .variations .value ul li label,
.whizz_product_detail .product .summary .cart .variations .value ul li label,
.single-product div.product .woocommerce-tabs ul.tabs.wc-tabs li.active a,
.whizz_product_detail div.product .woocommerce-tabs ul.tabs.wc-tabs li.active a,
.single-product div.product .woocommerce-tabs .woocommerce-Tabs-panel h2,
.whizz_product_detail div.product .woocommerce-tabs .woocommerce-Tabs-panel h2,
.single-product .product #reviews #comments .commentlist .comment .comment-text .meta,
.whizz_product_detail .product #reviews #comments .commentlist .comment .comment-text .meta,
.single-product .product .woocommerce-Reviews #review_form_wrapper .comment-reply-title,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper .comment-reply-title,
.single-product div.product .up-sells h2,
.whizz_product_detail div.product .up-sells h2,
.single-product .product .related.products h2,
.whizz_product_detail .product .related.products h2,
.woocommerce ul.products li.product h3,
.whizz-woocommerce-pagination .nav-links a::before,
.whizz_cart.shop_table .heading li,
.whizz_cart.shop_table ul .cart_item ul .product-name a,
.whizz_cart.shop_table ul .cart_item ul .product-name .variation dt,
.whizz_cart.shop_table .complement-cart .coupon .input-text:focus,
.whizz-cart-collaterals .cart_totals h2,
.woocommerce form.checkout_coupon .form-row input.input-text,
.woocommerce form.checkout h3,
.woocommerce form.login .form-row label,
.woocommerce form.checkout .form-row label,
.woocommerce form.login .form-row input,
.woocommerce form.login .form-row textarea,
.woocommerce form.checkout .form-row input,
.woocommerce form.checkout .form-row textarea,
.woocommerce form.login .form-row input:not([type="submit"]):focus,
.woocommerce form.login .form-row textarea:focus,
.woocommerce form.checkout .form-row input:not([type="submit"]):focus,
.woocommerce form.checkout .form-row textarea:focus,
.woocommerce form.checkout_coupon .form-row input.input-text:focus,
.woocommerce form.login .lost_password a,
.select2-drop-active,
.select2-results li.select2-highlighted,
.woocommerce table.shop_table thead .product-name,
.woocommerce table.shop_table thead .product-total,
.woocommerce table.shop_table .cart_item .product-name,
.woocommerce table.shop_table .cart_item .product-name .variation dt,
.woocommerce-checkout-review-order #payment div.payment_box,
.portfolio-single-content .portfolio-title,
.portfolio-single-content .whizz-portfolio-footer-line .portfolio-client .client-title,
.portfolio-single-content .whizz-portfolio-footer-line .portfolio-jop-type .title-job-type,
.portfolio-single-content .whizz-portfolio-footer-line .title-date,
.pricing-info .title,
.iframe-video-title,
.coming-page-wrapper .title,
.swipe-btn::before,
.skill-wrapper .main-title,
.flipto::before,
.portfolio-wrapper .pager-pagination a,
.portfolio-wrapper .pager-pagination span,
.fancybox-infobar .fancybox-button::before,
.popup-content-details .img-title,
.popup-content-details .caption-images-portfolio-item span,
.news.type-1 .news-type,
.news.type-1 .news-likes,
.news.type-1 .news-likes a,
.news h4 a,
.scroll-btn::before,
.news .news-date,
code,
kbd,
caption,
a,
a:hover,
a:focus,
.a-btn.style-black,
.portfolio.grid .post-wrapper .item-portfolio-content .portfolio-title,
.portfolio.grid .post-wrapper .item-portfolio-content .excerpt p,
.portfolio.grid .item-portfolio-content .portfolio-title,
.filter ul li.active,
.team-member-wrap.default .info .title,
.team-member .info .title,
.simple .post-box .text .post-box-title,
.services .content .title,
.single-post .single-content blockquote p,
.single-post .single-content .swiper-container .description,
.single-post .single-content .swiper-arrow-right,
.single-post .single-content .swiper-arrow-left,
.sm-wrap-post .content .title,
.contact-form .title,
form.wpcf7-form input,
form.wpcf7-form textarea,
.wpcf7 form input:focus,
form.wpcf7-form input:focus,
form.wpcf7-form textarea:focus,
#footer .WhizzInstagramWidget,
#footer.white-footer .copyright a,
#footer.white-footer .social-links a,
#footer.white-footer .ContactWidget h3,
#footer.white-footer .ContactWidget div.contact_content,
#footer.white-footer .ContactWidget .contact_url,
#footer.white-footer .whizzInstagramWidget,
#footer.white-footer .ContactWidget a.fa,
#footer.white-footer .widget_text h5,
#footer.white-footer .widget_text .textwidget > p,
#footer.white-footer .widget_text .wpcf7-response-output,
#footer.white-footer .widget_text form input:not([type="submit"]),
#footer.white-footer .widget_text form::after,
.single-content.no-thumb .main-top-content .title,
.comments .content .comment-reply-link,
.comments .comment-reply-title,
.comments .person .author,
.comments-title,
.comments-title span,
#contactform textarea,
#contactform input:not([type="submit"]),
.comments-form textarea,
.comments-form input:not([type="submit"]),
.about-details .content .text h1,
.about-details .content .text h2,
.about-details .content .text h3,
.about-details .content .text h4,
.about-details .content .text h5,
.about-details .content .text h6,
.about-details .content .title,
.simple-details .content .title,
.about-details .content .text blockquote p,
.titles .title,
.portfolio-single-content,
.single-pagination > div a.content::before,
.albums-left-filter .button-group button:hover,
.albums-left-filter .button-group button.is-checked,
.portfolio-slider-wrapper .portfolio-title,
.portfolio-pagination::before,
.twitter-wrapper .name,
.twitter-wrapper .description,
.post-list .pager-pagination .page-numbers.next::before,
.post-list .pager-pagination .page-numbers.prev::before,
.pricing-gallery .images.content .title,
.pricing-gallery .images.content .price,
.pricing-gallery .images.content .description,
.events-single-content.protected-page form,
.single-portfolio .protected-page form,
.single-product .product #reviews #comments .commentlist .comment .comment-text .date_publish,
.whizz_product_detail .product #reviews #comments .commentlist .comment .comment-text .date_publish,
.whizz-cart-collaterals .cart_totals .shop_table ul li span,
.woocommerce table.shop_table .woocommerce-Price-amount,
.portfolio-single-content .portfolio-categories a,
.pricing-info .subtitle,
.coming-soon-descr li,
.swipe-btn:hover::before,
.flipto:hover::before,
.fancybox-infobar .fancybox-button:hover::before,
.news.type-1 .news-type:hover,
form.wpcf7-form label,
.contacts-info-wrap.style2 .title-main,
.contacts-info-wrap .title,
.contacts-info-wrap .content-item a:hover,
.exhibition-wrap .btn:hover,
.exhibition-wrap .btn--toggle.btn--active:hover,
.flow-slider .swiper-arrow-left::before,
.flow-slider .swiper-arrow-right::before,
.info-block-parallax-wrap .content-wrap blockquote,
.info-block-parallax-wrap .content-wrap blockquote p,
.insta-box .insta-box-follow,
.insta-box .insta-box-follow a,
.tax-portfolio-client .client-content .title,
.tax-portfolio-client .client-content .descr,
.single-content.modern h1,
.single-content.modern h2,
.single-content.modern h3,
.single-content.modern h4,
.single-content.modern h5,
.single-content.modern h6,
.single-content.modern blockquote div,
.single-content.modern blockquote p,
.col-md-3 .ContactWidget .contact_url,
.col-md-3 .ContactWidget div.contact_content,
.col-md-3 .ContactWidget a.fa,
.col-md-3 .whizzInstagramWidget,
.events-single-content .info-event-wrap .info-item .info a:hover,
.single-proof_gallery .pixproof-data .grid__item .entry__meta-box .meta-box__title,
.text-dark p,
.contact-info,
.outer-album-swiper .album-text-title,
.swiper-container-split .swiper-slide .slide-item.slide-text,
.fragment-wrapper .fragment-block .fragment-text .wrap-frag-text,
.fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .desc mark,
.fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .slide-text-more,
.monospace,
blockquote cite,
#back-to-top,
.about-details .content .text,
.simple-details .content .text,
.events-single-content.protected-page .protected-title,
.single-portfolio .protected-page .protected-title,
.select-for-hovers h5,
.select-for-hovers .hover > span,
.select-for-hovers .hover .list li,
.select-for-hovers .hover > span::after,
.woocommerce ul.products li.product a h2,
.km-radial-progressbar .inset .percentage,
.km-teammate-position,
.km-teammate-soc,
.km-teammate-content,
.testimonial-content-span,
.sidebar-item ul li,
.post.classic .title,
.post.modern .title,
.post.classic .post-description,
.post.modern .post-description,
.page-numbers,
.next.page-numbers:hover,
.prev.page-numbers:hover,
.exhibition-wrap .cat a,
.exhibition-wrap .btn,
.whizz-sound-btn:before,
.kenburns-wrap .caption,
.exhibition-wrap .slide__title,
.content__link:hover,
.main-wrapper .col-md-3 .sidebar-item h3,
.simple .post-box .text .post-box-date,
.exhibition-wrap .slide__name,
.exhibition-wrap .btn::before,
.single-proof_gallery .pixproof-data .grid__item .entry__meta-box span:first-child,
.filter ul li.is-checked,
.team-member-wrap.default .team-member .social .wrap a,
.main-wrapper .col-md-3 .sidebar-item h5,
.page-title-blog,
.portfolio-single-content .gallery-single.infinite_full_gallery .item-single a .info-content h5,
.portfolio.grid .post-wrapper .item-portfolio-content .date,
.sm-wrap-post .content .post-date .date,
.header_trans-fixed.header_top_bg.open header .logo span,
.header_trans-fixed.header_top_bg.open header .mob-nav i,
.multiscroll-slider .title a,
.parallax-window .content-parallax .category-parallax a,
.showcase_slider .slide-title,
.parallax-window .content-parallax .title,
.full_screen_slider .slider-click,
.flow-slider .swiper-slide-active .flow-title,
.swiper-album .swiper3-slide .link-album-slide .title-wrap .title,
.showcase_slider .slide-image .arrow::before,
.full_screen_slider .slider-click.right .arrow::before,
.full_screen_slider .slider-click.left .arrow::before,
footer .ContactWidget h3,
footer .ContactWidget .contact_url,
footer .ContactWidget a.fa,
.portfolio-slider-wrapper.slider_simple .portfolio-title,
.portfolio-slider-wrapper.slider_simple .info,
footer .ContactWidget div.contact_content,
#footer .widget_text form::after,
#footer .widget_text form input:not([type="submit"]),
#footer .sidebar-item[class*='widget_'] h5,
#footer .sidebar-item[class*='widget_'] a,
#footer .sidebar-item[class*='widget_'] label,
#footer .sidebar-item[class*='widget_'] p,
.landing_split .content-wrap .excerpt,
#footer .sidebar-item[class*='widget_'] strong,
#footer .sidebar-item[class*='widget_'] span,
#footer .sidebar-item[class*='widget_'] caption,
.portfolio-pagination.slider_simple::before,
.landing_split .content-wrap .portfolio-title,
.caption-images-portfolio .close-btn,
.caption-images-portfolio p,
.caption-images-portfolio span,
.banner-slider .page-view .project .text p,
.landing_split .content-wrap .a-btn:hover,
.banner-slider .page-view .project .text h1,
.top-banner .subtitle,
.text-light a,
.portfolio.big_gap .social-icon,
.top-banner .descr,
.top-banner .title,
.swiper3-container.carousel-albums .swiper3-button-next::before,
.swiper3-container.carousel-albums .swiper3-button-prev::before,
.portfolio.big_gap .big_gap_share li button,
.portfolio.big_gap .portfolio-title,
.pricing-gallery .hover-caption,
.carousel-albums .image-wrap .caption .title,
.carousel-albums .image-wrap .caption .descr,
.stripped-wrapper .stripped-link .stripped-text .title,
.stripped-wrapper .stripped-link .stripped-text .subtitle,
.portfolio-slider-wrapper.slider_classic .content-wrap .portfolio-title,
.portfolio-slider-wrapper.slider_classic .content-wrap .excerpt p,
.modern .gallery-item .info-content h5,
.iframe-video.banner-video .video-content a,
.portfolio-slider-wrapper.slider_classic .content-wrap .a-btn:hover,
.swiper-container-vert-slider .swiper-button::before,
.item-overlay > h5,
.gallery-item .info-content h5,
.dgwt-jg-gallery.justified-gallery .dgwt-jg-caption span,
.sliphover-overlay div,
.swiper-container-vert-slider .swiper-slide .container .wrap-text,
.swiper-container-vert-slider .swiper-slide .container .wrap-text .slide-text-more,
.swiper-container-vert-slider .swiper-slide .container .wrap-text .subtitle a,
.iframe-video.banner-video .video-content .play-button::before,
.main-header-testimonial .content-slide .description p,
.contacts-info-wrap.style4 .additional-content-wrap,
.single-post .title,
.post-details .date-post,
.post-content .date,
.post-details .author,
.post-content h5,
.main-header-testimonial .content-slide .author,
.post.modern .post-info-modern span a:hover,
.post.classic .post-info-modern span a:hover,
.main-wrapper .col-md-3 .sidebar-item a:hover,
.main-wrapper .col-md-3 .sidebar-item li:hover > a:not(.rsswidget),
.main-wrapper .col-md-3 .sidebar-item a:hover,
.contacts-info-wrap.style4 .additional-content-wrap .title,
.client-wrap .client-overlay,
.events-single-content .main-top-content h2,
.header_trans-fixed .mob-nav i,
.portfolio-pinterest .item-link h5,
#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_name,
.woocommerce ul.products li.product .whizz-prod-list-image .whizz-add-to-cart a,
.portfolio-wrapper.adjusted .info-content,
.disortion-wrap .scene-nav,
.skill-wrapper .skill .label-skill {
    color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.banner-slider .page-view .arrows .arrow svg polygon{
    fill:  <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.kenburns-wrap .whizz-sound-btn::before,
.team-member .social .wrap a{
    color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>!important;
}

footer form.wpcf7-form input:not([type="submit"])::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>!important;
}

footer form.wpcf7-form input:not([type="submit"]):-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>!important;
}

footer form.wpcf7-form input:not([type="submit"]):-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>!important;
}

footer form.wpcf7-form input:not([type="submit"])::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>!important;
}

*::-moz-selection {
    background: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

*::selection {
    background: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

*::-moz-selection {
    background: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.row.simple::-webkit-scrollbar-thumb {
    background: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.black,
.swiper3-container.carousel-albums .swiper3-button-next::after,
.swiper3-container.carousel-albums .swiper3-button-prev::after,
.highlight,
.showcase_slider .slide-image .arrow::after,
.side-arrow:before,
.side-arrow:after,
.gallery-single .pinterest .info-content h5::before,
.gallery-single .pinterest .info-content h5::after,
.portfolio-pagination.slider_simple::after,
.flex-control-paging li a.flex-active,
.banner-list li,
.ri-grid ul li,
.main-header-testimonial .pagination span,
.main-header-testimonial .content-slide .logo-customer::before,
.portfolio-slider-wrapper.slider_simple .info::before,
.full_screen_slider .slider-click .arrow::after,
.swiper-album .swiper3-slide .link-album-slide .title-wrap::before,
.portfolio.masonry .item-overlay,
.portfolio.masonry .item-link:hover .item-overlay,
.toggle-title:after,
.pagination a.img,
.fullview__image,
.client-wrap .client-link:hover .client-overlay,
.bottom-line:after,
.a-btn-2,
.scroll-btn::after,
.portfolio-wrapper .load-more.button,
.single-post .single-content .swiper-arrow-left div::before,
.wpcf7 form input[type="submit"],
form.wpcf7-form #submit,
#contactform #submit,
.comments-form #submit,
.post-info span a,
.single-pagination > div a.content::after,
.skill-wrapper .skill .line .active-line,
.portfolio-pagination::after,
.post-list .pager-pagination .page-numbers.next::after,
.post-list .pager-pagination .page-numbers.prev::after,
.portfolio-slider-wrapper.slider_classic .pagination .swiper-pagination-switch,
.post .post-wrap-item.text,
.protected-page input[type="submit"],
.post-nav a,
.pages,
button,
html input[type=button],
input[type=reset],
.single-post .single-content .swiper-arrow-right div::before,
.single-post .single-content .swiper-arrow-left div::before,
input[type=submit],
.woocommerce-page.woocommerce-cart .woocommerce input.button,
.woocommerce-page.woocommerce-checkout .woocommerce input.button,
.woocommerce-page.woocommerce-cart a.button,
.woocommerce-page.woocommerce-checkout a.button,
.woocommerce-page.woocommerce a.button,
.woocommerce-page.woocommerce button.button.alt,
.woocommerce button.button.alt,
a.button.checkout,
.woocommerce-page.woocommerce-cart a.button:hover,
.woocommerce-page.woocommerce-checkout a.button:hover,
.woocommerce-page.woocommerce a.button:hover,
.woocommerce-page.woocommerce button.button.alt:hover,
.woocommerce button.button.alt:hover,
a.button.checkout:hover,
.woocommerce .whizz_images span.onsale,
.woocommerce ul.products li.product .whizz-prod-list-image .onsale,
.woocommerce .woocommerce-message,
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-error,
.single-product .product .summary .cart .variations .value ul li input:checked + label:before,
.whizz_product_detail .product .summary .cart .variations .value ul li input:checked + label:before,
.single-product .product .woocommerce-Reviews #review_form_wrapper .comment-form .form-submit input#submit,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper .comment-form .form-submit input#submit,
.woocommerce ul.products li.product .whizz_product_list_name .count,
.whizz-woocommerce-pagination .nav-links a::after,
#topmenu .whizz_mini_cart a.button,
.woocommerce form.login .form-row input[type="checkbox"]:checked + label.checkbox:before,
.woocommerce form.checkout .form-row input[type="checkbox"]:checked + label.checkbox:before,
.flow-slider .swiper-arrow-left::after,
.flow-slider .swiper-arrow-right::after,
.tax-portfolio-client .client-content .title::before,
.single-content.modern .content-header .title::before,
.events-single-content .end-event,
.item .item-img .end-event,
.ri-grid ul li a,
#multiscroll-nav li .active span,
.single-proof_gallery .pixproof-data .grid__item .a-btn-2:hover,
.woocommerce-page.woocommerce-cart a.button:hover,
.woocommerce-page.woocommerce-checkout a.button:hover,
.woocommerce-page.woocommerce a.button:hover,
.woocommerce-page.woocommerce button.button.alt:hover,
.woocommerce button.button.alt:hover,
a.button.checkout:hover,
.single-proof_gallery .pixproof-data .grid__item .a-btn-2:hover,
.events-single-content.protected-page input[type="submit"],
.single-portfolio .protected-page input[type="submit"],
.woocommerce div.product form.cart .button,
.km-progressbar-container[data-style=style_1] .km-progressbar-tooltip,
.km-progressbar-thebar,
.km-modal-video-closer,
.km-close:focus,
.km-close:hover,
.whizz_copyright_overlay,
.post-nav a, .pages,
.pager-pagination .current,
.exhibition-wrap .btn::after,
.pager-pagination .page-numbers:hover,
.widget_product_search form::after,
.wpcf7 form input[type="submit"]:hover,
form.wpcf7-form #submit:hover,
.swiper-container-vert-slider .swiper-button::after,
.caption-images-portfolio .close-btn::before,
.woocommerce form.login .form-row input[type="submit"],
.contacts-info-wrap .form input:not([type="submit"]),
.contacts-info-wrap .form textarea,
.whizz_images .pagination .swiper-pagination-switch,
.portfolio-pinterest .item-link .info-content i::before,
.portfolio-pinterest .item-link .info-content i::after,
.portfolio-wrapper.adjusted .item-link .span-img-wrapper,
.insta-wrapper .info-hover i::before,
.insta-wrapper .info-hover i::after,
.widget_search form div::after{
    background-color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.page-numbers:not(.next, .prev) {
    background-color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.next.page-numbers, .prev.page-numbers {
    background-color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?> !important;
}

.a-btn.style-black,
#contactform textarea,
#contactform input:not([type="submit"]),
.comments-form textarea,
.comments-form input:not([type="submit"]),
#contactform textarea:focus,
#contactform input:focus,
.comments-form textarea:focus,
.comments-form input:focus,
.widget_tag_cloud .tagcloud a,
.single-product div.product .woocommerce-tabs ul.tabs.wc-tabs li.active,
.whizz_product_detail div.product .woocommerce-tabs ul.tabs.wc-tabs li.active,
.whizz_cart.shop_table .complement-cart .coupon .input-text:focus,
.woocommerce form.login .form-row input:focus,
.woocommerce form.login .form-row textarea:focus,
.woocommerce form.checkout .form-row input:focus,
.woocommerce form.checkout .form-row textarea:focus,
.woocommerce form.checkout_coupon .form-row input.input-text:focus,
.select2-drop-active,
form.wpcf7-form input:not([type="submit"]),
form.wpcf7-form textarea,
.contacts-info-wrap .content-item div,
.contacts-info-wrap .form input:not([type="submit"]):focus,
.contacts-info-wrap .form textarea:focus,
.events-single-content .info-event-wrap,
.swiper-container-split .swiper-slide .slide-item.slide-text .slide-text-more,
.a-btn,
.woocommerce ul.products li.product .whizz-prod-list-image .whizz-link,
.fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .slide-text-more,
.woocommerce ul.products li.product .whizz-prod-list-image .whizz-add-to-cart a,
.woocommerce-page.woocommerce .woocommerce-message a.button,
.swiper-container-vert-slider .swiper-slide .container .wrap-text .slide-text-more{
    border-bottom: 1px solid <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.rsArrowLeft .rsArrowIcn {
    border-left: 2px solid <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.a-btn.style-black::after,
.content__link::after,
.a-btn::after,
.swiper-container-vert-slider .swiper-slide .container .wrap-text .slide-text-more::after,
.swiper-container-split .swiper-slide .slide-item.slide-text .slide-text-more::after,
.woocommerce ul.products li.product .whizz-prod-list-image .whizz-add-to-cart a::after,
.woocommerce-page.woocommerce .woocommerce-message a.button::after,
.fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .slide-text-more::after {
    border-left: 4px solid <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.flex-control-paging li,
#multiscroll-nav span,
.insta-box .insta-box-follow a,
.select-for-hovers .hover > span,
.select-for-hovers .hover .list,
.sidebar-item.widget_search input,
.widget_search input[type="submit"]{
    border: 1px solid <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

#footer.white-footer .widget_text form input[type="submit"],
.portfolio-slider-wrapper.slider_simple .info,
.caption-images-portfolio .close-btn,
.portfolio.big_gap .social-icon::before,
#footer .widget_text form input[type="submit"]{
    border: 2px solid <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.single-proof_gallery .pixproof-data .grid__item .a-btn-2,
.single-proof_gallery .pixproof-data .grid__item .a-btn-2 {
    border-bottom: 2px solid <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.single-proof_gallery .pixproof-data .grid__item .a-btn-2,
.single-proof_gallery .pixproof-data .grid__item .a-btn-2 {
    border-top: 2px solid <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.post-nav a,
.pages,
.single-content.modern .main-template-content,
.events-single-content .info-event-wrap {
    border-top: 1px solid <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.page-numbers:not(.next, .prev) {
    border-top: 1px solid <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

button,
html input[type=button],
input[type=reset],
input[type=submit],
.flow-slider .swiper-arrow-left::before,
.flow-slider .swiper-arrow-right::before,
.post-nav a, .pages, .page-numbers,
.contacts-info-wrap .form input:not([type="submit"]):focus,
.contacts-info-wrap .form textarea:focus,
.content__link,
.a-btn.style-black,
.scroll-btn::before{
    border-color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

.woocommerce .woocommerce-message,
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-error {
    border-top: 4px solid <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
}

@media (max-width: 767px) {
    .header_trans-fixed.open .right-menu #topmenu .whizz-top-social .social li a,
    .all-posts-descr h6,
    .header_trans-fixed .socials-mob-but i{
        color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
    }
}

@media (max-width: 991px) {
    .all-posts-descr h5,
    .swiper-container-split .swiper-slide .slide-item.slide-text .subtitle a,
    .swiper-container-split .swiper-slide .slide-item.slide-text .slide-text-more:hover,
    .swiper-container-split .swiper-slide .slide-item.slide-text .slide-text-more{
        color: <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
    }
    .contacts-info-wrap.style2 .content-wrap {
        border-bottom: 1px solid <?php echo esc_html(cs_get_option( 'front_color_1_b')) ?>;
    }

}

/*END FRONT COLOR 1*/

/* ======= FRONT COLOR 2 ======= */
.woocommerce #review_form #respond textarea::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.woocommerce #review_form #respond textarea::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.woocommerce #review_form #respond textarea:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.woocommerce #review_form #respond textarea:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.woocommerce #review_form #respond input::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.woocommerce #review_form #respond input::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.woocommerce #review_form #respond input:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.woocommerce #review_form #respond input:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

#footer:not(.white-footer) {
    border-top: .5px solid #2d2d2d;
}

#footer.fix-bottom {
    border-top: none;
}

form.wpcf7-form input::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.wpcf7 form input::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

form.wpcf7-form input::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.wpcf7 form input::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

form.wpcf7-form input:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.wpcf7 form input:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

form.wpcf7-form input:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.wpcf7 form input:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

form.wpcf7-form textarea::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.wpcf7 form textarea::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

form.wpcf7-form textarea::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.wpcf7 form textarea::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

form.wpcf7-form textarea:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.wpcf7 form textarea:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

form.wpcf7-form textarea:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.wpcf7 form textarea:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.protected-page input[type="password"]::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.protected-page input[type="password"]::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.protected-page input[type="password"]:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.protected-page input[type="password"]:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

#contactform textarea::-moz-placeholder,
#contactform input::-moz-placeholder,
.comments-form textarea::-moz-placeholder,
.comments-form input::-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

#contactform textarea::-webkit-input-placeholder,
#contactform input::-webkit-input-placeholder,
.comments-form textarea::-webkit-input-placeholder,
.comments-form input::-webkit-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

#contactform textarea:-moz-placeholder,
#contactform input:-moz-placeholder,
.comments-form textarea:-moz-placeholder,
.comments-form input:-moz-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

#contactform textarea:-ms-input-placeholder,
#contactform input:-ms-input-placeholder,
.comments-form textarea:-ms-input-placeholder,
.comments-form input:-ms-input-placeholder {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.about-section .descr,
.banner-gallery .content-wrap .description,
.top-banner.left_content .subtitle,
.category,
.woocommerce ul.products.default li.product .price,
.woocommerce ul.products li.product span,
.main-wrapper .col-md-3 .sidebar-item p,
.contact-info .details a,
.contact-info .details h6,
.lg .lg-sub-html .dgwt-jg-item-desc,
.filter ul li,
.team-member-wrap.default .info .position,
.team-member .info .position,
.simple .post-box .text .post-box-desc,
.simple .post-box .text .post-box-desc p,
.services .content .text,
.single-post p,
.sm-wrap-post .content .excerpt,
#footer .copyright,
.comments .person .comment-date,
.post-info span a,
.post-info span,
.about-details.style1 .content .text,
.about-details .content .subtitle,
.simple-details .content .subtitle,
.titles .subtitle,
.single-pagination > div a.content,
.skill-wrapper .skill .value,
.thumb-slider-wrapp .thumb-slider-wrapp-arrow .hide-images,
.thumb-slider-wrapp .thumb-slider-wrapp-arrow .show-images,
.albums-left-filter .button-group button,
.twitter-wrapper .slug,
.post-list .pager-pagination .page-numbers.next,
.post-list .pager-pagination .page-numbers.prev,
.pricing-gallery .images.content .subtitle,
.protected-page input[type="password"],
.single-product .product .summary .woocommerce-product-rating .woocommerce-review-link,
.whizz_product_detail .product .summary .woocommerce-product-rating .woocommerce-review-link,
.single-product .product .summary .product_desc p,
.whizz_product_detail .product .summary .product_desc p,
.single-product .product .summary .product_meta a,
.whizz_product_detail .product .summary .product_meta a,
.single-product .product .summary .product_meta,
.whizz_product_detail .product .summary .product_meta,
.single-product div.product .woocommerce-tabs ul.tabs.wc-tabs li a,
.whizz_product_detail div.product .woocommerce-tabs ul.tabs.wc-tabs li a,
.single-product div.product .woocommerce-tabs .woocommerce-Tabs-panel p,
.whizz_product_detail div.product .woocommerce-tabs .woocommerce-Tabs-panel p,
.single-product .product #reviews #comments .commentlist .comment .comment-text .description,
.whizz_product_detail .product #reviews #comments .commentlist .comment .comment-text .description,
.single-product .product .woocommerce-Reviews #review_form_wrapper .comment-form-rating label,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper .comment-form-rating label,
.single-proof_gallery .pixproof-data .grid__item .entry__meta-box span,
.single-product .product .woocommerce-Reviews #review_form_wrapper input,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper input,
.single-product .product .woocommerce-Reviews #review_form_wrapper textarea,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper textarea,
.woocommerce ul.products li.product,
.woocommerce ul.products li.product .category-product a,
.whizz-woocommerce-pagination .nav-links .nav-previous a,
.whizz-woocommerce-pagination .nav-links .nav-next a,
#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_quantity,
.whizz_cart.shop_table .complement-cart .coupon .input-text,
.whizz-cart-collaterals .cart_totals .shop_table ul li,
.select2-container .select2-choice,
.select2-search:after,
.select2-search input,
.select2-results li,
.woocommerce table.shop_table .cart_item .product-name .variation dd p,
.woocommerce table.shop_table .cart-subtotal th,
.woocommerce table.shop_table .order-total th,
.woocommerce-checkout-review-order #payment .payment_methods.methods li,
.woocommerce-checkout-review-order #payment .payment_methods.methods li label,
.woocommerce-checkout-review-order #payment .payment_methods.methods li .about_paypal,
.portfolio-single-content p,
.portfolio-single-content .whizz-portfolio-footer-line .portfolio-client .client-value,
.portfolio-single-content .whizz-portfolio-footer-line .portfolio-jop-type .job-type-value,
.portfolio-single-content .whizz-portfolio-footer-line .date-value,
.portfolio-single-content .whizz-portfolio-footer-line .social-list a,
.pricing-info .pricing-list ul li,
.coming-page-wrapper .subtitle,
.popup-content-details .img-date,
.popup-content-details .caption-images-portfolio-item p,
.contacts-info-wrap.style2 .text,
.contacts-info-wrap .content-item div,
.contacts-info-wrap .content-item a,
.flow-slider .flow-title,
.wpb_text_column p,
.info-block-parallax-wrap .content-wrap p,
.single-content.modern .content-header .description,
.events-single-content .info-event-wrap .info-item .info,
.events-single-content .info-event-wrap .info-item .info a,
.events-single-content .content-main p,
.single-post dl dd,
.comments dl dd,
.text-light .monospace,
.single-proof_gallery .pixproof-data .grid__item .entry__meta-box .meta-box__title,
.single-product .product .summary .product_meta a,
.whizz-woocommerce-pagination .nav-links .nav-previous a:hover,
.whizz-woocommerce-pagination .nav-links .nav-next a:hover,
.news.type-1 .news-likes a:hover,
.single-proof_gallery .pixproof-data .grid__item .entry__meta-box .meta-box__title,
.woocommerce .whizz_product_detail div.product p.price del,
.woocommerce .single-product div.product p.price del,
.woocommerce .whizz_product_detail div.product span.price del,
.woocommerce .single-product div.product span.price del,
.woocommerce ul.products.default li.product .price del,
.whizz_cart.shop_table ul .cart_item ul .product-price del,
.whizz_cart.shop_table ul .cart_item ul .product-subtotal del,
#topmenu .whizz_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_price del,
.woocommerce table.shop_table .cart_item .product-total del,
.woocommerce .single-product .star-rating:before,
.woocommerce .whizz_product_detail .star-rating:before,
.single-product .product .summary .cart .variations .value ul li p,
.whizz_product_detail .product .summary .cart .variations .value ul li p,
.whizz_cart.shop_table ul .cart_item ul .product-name .variation dd p,
.portfolio-wrapper .pager-pagination .current,
.outer-album-swiper .album-text-desc,
.single-content.modern,
.km-progressbar-container[data-style=style_2] .km-progressbar-tooltip,
.km-socials-m-icon,
.events-single-content.protected-page input[type="password"],
.single-portfolio .protected-page input[type="password"],
.km-modal-video-closer,
.km-close,
.post.classic .post-info-modern .author a,
.post.classic .post-info-modern .category a,
.post.classic .post-info-modern .date a,
.post.modern .post-info-modern .author a,
.post.modern .post-info-modern .category a,
.post.modern .post-info-modern .date a,
.post.classic .post-info-modern .author,
.post.modern .post-info-modern .author,
.post.classic .post-big-letter,
.post.modern .post-big-letter,
.col-md-3 .sidebar-item a,
.col-md-3 .sidebar-item span,
.main-wrapper .col-md-3 .sidebar-item a,
.col-md-3 .sidebar-item p,
.main-wrapper .col-md-3 .sidebar-item li,
.col-md-3 .sidebar-item strong {
    color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.grey,
.category::before,
.team-member-wrap.default .team-member::before,
.services::after,
.skill-wrapper .skill .line,
.twitter-wrapper span::after,
.about-section,
.contact-info,
.about-details-section,
.coming-soon-wrap .coming-soon-descr,
.swipe-btn,
.popup-content-details .img-date::before,
.news-entry .news,
.iframe-video.audio,
.post-info span.author,
code,
.single-product .product .summary .cart .variations .value ul li label:before,
.whizz_product_detail .product .summary .cart .variations .value ul li label:before,
.woocommerce form.login .form-row input:-webkit-autofill,
.woocommerce form.checkout .form-row input:-webkit-autofill,
.woocommerce form.login .form-row input:-webkit-autofill:hover,
.woocommerce form.checkout .form-row input:-webkit-autofill:hover,
.woocommerce form.login .form-row input:-webkit-autofill:focus,
.woocommerce form.checkout .form-row input:-webkit-autofill:focus,
.woocommerce form.login .form-row label.checkbox:before,
.woocommerce form.checkout .form-row label.checkbox:before,
.flipto,
.fancybox-infobar .fancybox-button,
.fancybox-infobar .fancybox-button:hover,
.fancybox-infobar .fancybox-button::before,
.twitter-slider .flipster-carousel .flip-content,
.kenburns-play,
#back-to-top,
#back-to-top:hover,
.stripped-wrapper .stripped-link .image-wrapper,
.km-progressbar,
.post-little-banner,
header:not(.aside-menu) #topmenu ul li.mega-menu > ul > li::before,
.km-radial-progressbar .inset .percentage,
.services::before, .services::after {
    background-color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.post-paper > .container {
    box-shadow: 0 30px 50px 0 rgba(255, 236, 236, 0.15);
}

.coming-soon .svg .svgRect {
    fill: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.row.simple {
    border-right: 2px solid <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.post-info span {
    border-right: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.single-post .single-content .swiper-container,
.single-product .product .woocommerce-Reviews #review_form_wrapper input,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper input,
.single-product .product .woocommerce-Reviews #review_form_wrapper textarea,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper textarea,
.whizz_cart.shop_table .complement-cart .coupon .input-text,
.woocommerce form.checkout_coupon .form-row input.input-text,
.woocommerce form.login .form-row input,
.woocommerce form.login .form-row textarea,
.woocommerce form.checkout .form-row input,
.woocommerce form.checkout .form-row textarea,
.select2-container .select2-choice,
.select2-container.select2-dropdown-open.select2-drop-above .select2-choice,
.select2-search input,
.single-product .product .woocommerce-tabs .tabs.wc-tabs:before,
.whizz_product_detail .product .woocommerce-tabs .tabs.wc-tabs:before,
.whizz_cart.shop_table .heading,
.whizz_cart.shop_table .complement-cart,
.woocommerce table.shop_table thead,
.main-wrapper .col-md-3 .sidebar-item h5,
.woocommerce table.shop_table tfoot {
    border-bottom: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

form.wpcf7-form input:not([type="submit"]),
form.wpcf7-form textarea,
.events-single-content.protected-page input[type="password"],
.single-portfolio .protected-page input[type="password"],
.events-single-content.protected-page input[type="password"]:focus,
.single-portfolio .protected-page input[type="password"]:focus,
.protected-page input[type="password"]:focus {
    border-bottom: 2px solid <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.comment-title,
.main-wrapper .col-md-3 .sidebar-item ul li{
    border-bottom: 1px dashed <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

abbr,
acronym {
    border-bottom: 1px dotted <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.single-product .product .summary .cart .variations .value fieldset,
.whizz_product_detail .product .summary .cart .variations .value fieldset,
.woocommerce form.checkout_coupon,
.woocommerce form.login,
.portfolio-single-content .whizz-portfolio-footer-line {
    border-bottom: 4px solid <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.sidebar-item input,
.empty-post-list input[type=search],
table,
th,
td,
.contacts-info-wrap .form input:not([type="submit"]),
.contacts-info-wrap .form textarea,
.main-wrapper .col-md-3 .sidebar-item,
.single-proof_gallery #pixproof_gallery .proof-photo .meta__action.select-action {
    border: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.woocommerce .quantity .qty {
    border: 2px solid <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.woocommerce table.shop_table tfoot {
    border-top: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

.single-product .product .summary .cart .variations .value fieldset,
.whizz_product_detail .product .summary .cart .variations .value fieldset,
.portfolio-single-content .whizz-portfolio-footer-line {
    border-top: 4px solid <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
}

@media (min-width: 768px) {
    #topmenu .f-right > div:first-child::before,
    .right-menu .f-right > div:first-child::before {
        background-color: <?php echo esc_html(cs_get_option( 'menu_font_color_b')) ?>;
    }

    .aside-menu .aside-nav {
        background-color: <?php echo esc_html(cs_get_option( 'menu_bg_color_b')) ?>;
    }

    .aside-menu .aside-nav .aside-nav-line {
        background-color: <?php echo esc_html(cs_get_option( 'menu_font_color_b')) ?>;
    }

    .aside-menu #topmenu {
        border-right: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
    }

    .aside-menu #topmenu ul > li > ul > li > ul {
        border-top: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
        border-bottom: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
    }
}

@media (max-width: 767px) {
    #topmenu > ul.menu > li > ul > li,
    #topmenu > ul.menu > li > ul > li > ul > li {
        border: 1px solid <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
    }

    .banner-gallery::before {
        background-color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
    }
}

@media (max-width: 991px) {
    .all-posts-descr p {
        color: <?php echo esc_html(cs_get_option( 'front_color_2_b')) ?>;
    }
}

/*END FRONT COLOR 2*/

/* ======= BASE WHITE COLOR ======= */
.text-light p,
.text-light,
.highlight,
.a-btn-2,
.a-btn-2:hover,
.a-btn-2:visited,
.a-btn-2:focus,
.a-btn-2:active,
.header_trans-fixed .whizz-top-social .social-icon,
.about-section .a-btn-2:hover,
.portfolio-wrapper .load-more.button,
.classic .item-overlay h5,
.single-proof_gallery .pixproof-data .grid__item .a-btn-2:hover,
.team-member.fullheight .info .title,
.team-member.fullheight .info .description,
.post-box .text h6,
.post-box .text span,
.wpcf7 form input[type="submit"],
form.wpcf7-form #submit,
.a-btn-2.wpc-but::after,
.post-details .author,
.banner-slider-wrap .title,
.banner-slider-wrap .subtitle,
.banner-slider-wrap .descr,
.banner-slider-wrap .swiper-arrow-right,
#contactform #submit,
.comments-form #submit,
.post-info span a,
mark,
ins,
.post-nav a,
.pages,
button,
html input[type=button],
input[type=reset],
input[type=submit],
.woocommerce-page.woocommerce-cart a.button:hover,
.woocommerce-page.woocommerce-checkout a.button:hover,
.woocommerce-page.woocommerce a.button:hover,
.woocommerce-page.woocommerce button.button.alt:hover,
.woocommerce button.button.alt:hover,
a.button.checkout:hover,
.woocommerce .whizz_images span.onsale,
.woocommerce ul.products li.product .whizz-prod-list-image .onsale,
.woocommerce .woocommerce-message .showcoupon,
.woocommerce .woocommerce-message a,
.woocommerce .woocommerce-info .showcoupon,
.woocommerce .woocommerce-info .showlogin,
.single-product .product .summary .cart .group_table td.label,
.whizz_product_detail .product .summary .cart .group_table td.label,
.single-product .product .summary .cart .button:hover,
.whizz_product_detail .product .summary .cart .button:hover,
.woocommerce ul.products li.product .whizz_product_list_name .count,
#topmenu .whizz_mini_cart a.button,
.full_screen_slider .swiper-arrow-left,
.full_screen_slider .swiper-arrow-right,
.full-screen-slider__img .full-content-wrap,
.whizz_copyright_overlay_text,
.iframe-video .video-content .play-button,
.iframe-video .video-content .play-button::before,
.iframe-video .video-content .video-close-button,
.multiscroll-tooltip,
.multiscroll-slider .descr,
.scroll-btn::before,
.error404 .hero-inner .bigtext,
.error404 .hero-inner .title,
.rsArrow,
.kenburns-play::before,
.main-header-testimonial .title,
.main-header-testimonial .content-slide .description h1,
.main-header-testimonial .content-slide .description h2,
.main-header-testimonial .content-slide .description h3,
.main-header-testimonial .content-slide .description h4,
.main-header-testimonial .content-slide .description h5,
.main-header-testimonial .content-slide .description h6,
.events-single-content.protected-page .input_protected_wrapper::after,
.single-portfolio .protected-page .input_protected_wrapper::after,
.events-single-content.protected-page input[type="submit"],
.single-portfolio .protected-page input[type="submit"],
.single-proof_gallery .pixproof-data .grid__item .a-btn-2:hover,
.img-slider .flex-next,
.img-slider .flex-prev,
.post .post-wrap-item.text,
.post-wrap-item.text .post-content i,
.post-wrap-item.text .post-content blockquote,
.woocommerce div.product form.cart .button::after,
.input_post_wrapper::after,
.woocommerce-page.woocommerce-cart .woocommerce input.button,
.woocommerce-page.woocommerce-checkout .woocommerce input.button,
.single-product .product .woocommerce-Reviews #review_form_wrapper .comment-form .form-submit input#submit,
.whizz_product_detail .product .woocommerce-Reviews #review_form_wrapper .comment-form .form-submit input#submit,
.input_shop_wrapper::after,
#topmenu .whizz_mini_cart a.button,
form.wpcf7-form .input_protected_wrapper::after,
.exhibition-wrap .btn--toggle.btn--active,
.events-single-content .end-event,
.item .item-img .end-event,
.iframe-video .video-close-button,
#topmenu .whizz_mini_cart a.button::after,
.wpcf7 form input[type="submit"],
form.wpcf7-form #submit, .woocommerce div.product form.cart .button,
.woocommerce-page.woocommerce-cart .woocommerce .shop-wrap::after,
.WhizzInstagramWidget,
.pager-pagination .current,
.next.page-numbers,
.widget_product_search form::after,
.widget_search form div::after,
.wpcf7 form input[type="submit"]:hover,
form.wpcf7-form #submit:hover,
.woocommerce form.login .form-row input[type="submit"],
.whizz-cart-collaterals .cart_totals a.button,
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-error,
.woocommerce .woocommerce-info:before,
.woocommerce .woocommerce-error:before,
.woocommerce .woocommerce-message:before,
.woocommerce .woocommerce-message,
.woocommerce-page.woocommerce .woocommerce-message a.button,
.km-progressbar-container[data-style=style_1] .km-progressbar-tooltip,
.prev.page-numbers {
    color: <?php echo esc_html(cs_get_option( 'base_color_b')) ?>;
}

.client-wrap:hover .client-overlay {
    color: <?php echo esc_html(cs_get_option( 'base_color_b')) ?>;
}

a.page-numbers:hover {
    color: <?php echo esc_html(cs_get_option( 'base_color_b')) ?>;
}

.single-product .product .summary .cart .button:hover,
.whizz_product_detail .product .summary .cart .button:hover,
.wc-proceed-to-checkout .a-btn-2:hover,
.wc-proceed-to-checkout .a-btn-2:visited,
.wc-proceed-to-checkout .a-btn-2:focus,
.wc-proceed-to-checkout .a-btn-2:active {
    color: <?php echo esc_html(cs_get_option( 'base_color_b')) ?>!important;
}

body,
.text-light .bottom-line:after,
.white,
.header_trans-fixed.header_top_bg.open,
.flex-control-paging li a,
.banner-gallery .content-wrap,
.action,
.portfolio-wrapper .portfolio.grid.grid_modern .item-portfolio-content,
.post-box .post-descr,
.img-slider .flex-next,
.img-slider .flex-prev,
.single-post .single-content .swiper-container .description,
.single-post .single-content .swiper-arrow-right,
.single-post .single-content .swiper-arrow-left,
#footer.white-footer,
.widget_search input[type="text"],
.black p.separator,
.mb_YTPPlaypause:before,
.full_screen_slider .swiper-arrow-left::before,
.full_screen_slider .swiper-arrow-right::before,
.pricing-item,
.ms-section,
.thumb-slider-wrapp .sub-thumb-slider,
.thumb-slider-wrapp .thumb-slider-wrapp-arrow .hide-images,
.thumb-slider-wrapp .thumb-slider-wrapp-arrow .show-images,
.popup-content-details .content,
.twitter-wrapper span::before,
.line-of-images.logos2 a::before,
.pricing-gallery .images.content .content-wrap,
.swiper-album .swiper3-wrapper,
.swiper-album .swiper3-slide,
.img-slider .flex-next,
.img-slider .flex-prev,
.select-for-hovers .hover .list,
.swiper-album .swiper3-slide::before,
.post-paper > .container,
.main-wrapper.footer-parallax,
.page-numbers,
.whizz_mini_cart,
#footer,
.single-proof_gallery #pixproof_gallery .proof-photo.selected .meta__action.select-action,
.client-overlay,
.preloader-svg {
    background: <?php echo esc_html(cs_get_option( 'base_color_b')) ?>;
}

.next.page-numbers:hover,
.prev.page-numbers:hover {
    background: <?php echo esc_html(cs_get_option( 'base_color_b')) ?> !important;
}

.pricing-item .mask-image .pricing_mask{
    fill: <?php echo esc_html(cs_get_option( 'base_color_b')) ?>;
}

.flex-control-paging li a,
#topmenu .whizz_mini_cart a.button {
    border: 1px solid <?php echo esc_html(cs_get_option( 'base_color_b')) ?>;
}

.fullview .rsArrow .rsArrowIcn,
.single-proof_gallery #pixproof_gallery .proof-photo.selected .meta__action.select-action,
#footer:not(.white-footer){
    border-color: <?php echo esc_html(cs_get_option( 'base_color_b')) ?>;
}

.woocommerce-page.woocommerce .woocommerce-message a.button::after{
    border-left: 4px solid <?php echo esc_html(cs_get_option( 'base_color_b')) ?>;
}

@media (max-width: 991px) {
    .popup-content-details {
        background-color: <?php echo esc_html(cs_get_option( 'base_color_b')) ?>;
    }
    .fragment-wrapper .fragment-block .fragment-img:before{
        z-index: 999;
    }
}

<?php } ?>




/*END BASE WHITE COLOR*/