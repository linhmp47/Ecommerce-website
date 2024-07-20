<?php
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);
definE('TITLE', 'HOME');
require_once DOC_ROOT . '/common/php/common.php';
// print_r($_SERVER);//thay doi duong dan localhost document root de load project file httpd.conf
// define('TITLE', 'abcd');//khai bao tieu de hoac ko
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?= insertHeadInfo(); ?>
    <?= insertCSS('/top/css/style.css'); ?>
</head>

<body>
    <header>
        <div class="Responsive">
            <div class="Menu">
                <div class="Menu-branch">
                    <div class="Menu-branch__logo">
                        <img src="/common/img/logo.png">
                    </div>
                    <div class="Menu-branch-search">
                        <div class="Menu-branch-search-location">
                            <p class="Menu-branch-search-location__txt">Hà Nội</p>
                        </div>
                        <div class=Menu-branch-search-input>
                            <input type="text" placeholder="tìm kiếm">
                        </div>
                        <div class=Menu-branch-search-btn>
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
                <div class="Menu-list">
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content__txt">ĐIỆN THOẠI</p>
                        </div>
                    </div>

                    <div class="Menu-list-item">

                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content__txt">TABLET</p>
                        </div>
                        <!-- <div class="js-menuListItem Menu-list-item-content">
                            <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content__txt">TABLET</p>
                        </div> -->

                        <div class="Menu-list-item-sub">
                            <div class="Menu-list-item-sub-list">
                                <div class="Menu-list-item-sub-item">
                                    <p class="Menu-list-item-sub-item__txt">Ipad Pro</p>
                                </div>
                                <div class="Menu-list-item-sub-item">
                                    <p class="Menu-list-item-sub-item__txt">Ipad Pro</p>
                                </div>
                                <div class="Menu-list-item-sub-item">
                                    <p class="Menu-list-item-sub-item__txt">Ipad Pro</p>
                                </div>
                                <div class="Menu-list-item-sub-item">
                                    <p class="Menu-list-item-sub-item__txt">Ipad Pro</p>
                                </div>
                                <div class="Menu-list-item-sub-item">
                                    <p class="Menu-list-item-sub-item__txt">Ipad Pro</p>
                                </div>
                                <div class="Menu-list-item-sub-item">
                                    <p class="Menu-list-item-sub-item__txt">Ipad Pro</p>
                                </div>
                                <div class="Menu-list-item-sub-item">
                                    <p class="Menu-list-item-sub-item__txt">Ipad Pro</p>
                                </div>
                                <div class="Menu-list-item-sub-item">
                                    <p class="Menu-list-item-sub-item__txt">Ipad Pro</p>
                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content__txt">PHỤ KIỆN</p>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content__txt">ĐỒNG HỒ</p>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content__txt">ÂM THANH</p>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content__txt">LAPTOP</p>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content__txt">SIM THẺ</p>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content__txt">HÀNG CŨ</p>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content__txt">TRẢ GÓP</p>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content__txt">DỊCH VỤ</p>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content__txt">CÔNG NGHỆ</p>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content__txt">ƯU ĐÃI</p>
                        </div>
                    </div>
                    <div class="Menu-list-item">
                        <div class="Menu-list-item-content">
                            <div class="Menu-list-item-content__ico"><i class="fas fa-mobile-alt"></i></div>
                            <p class="Menu-list-item-content__txt">KHUYỄN MÃI</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </header>
    <?= insertJS('/top/js/script.js'); ?>
</body>

</html>