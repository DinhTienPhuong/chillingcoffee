<?php
$routes['default_controller'] = 'home';
/*
     * Đường dẫn ảo => Đường dẫn thật
     *
    * */

// routes clients

$routes['trang-chu'] = 'home/index';
$routes['tim-kiem'] = 'home/search';

$routes['chi-tiet-sp/.+-(\d+)'] = 'products/product_details/$1'; 

$routes['lien-he'] = 'feedback/add';

//gio hang
$routes['gio-hang'] = 'cart/show_cart'; 

$routes['luu-gio-hang'] = 'cart/add_cart'; 

$routes['process-qty'] = 'cart/process_qty';

$routes['del-cart'] = 'cart/del_cart';

$routes['xac-nhan-don-hang'] = 'bill/add'; 
// menu

$routes['thuc-don'] = 'home/menu';

$routes['bai-viet'] = 'postmanage/blog';

$routes['bai-viet-trang-(\d+)'] = 'postmanage/client_post_pages/$1';

$routes['ve-chung-toi'] = 'home/about';

$routes['dat-hang-thanh-cong'] = 'home/successful';

$routes['product-detail/.+-(\d+)'] = 'drinkmanage/detail/$1';

// menu

/* ----------------------------------------------------------------------------------------- */
$routes['trang-quan-tri'] = 'dashboard/index';

$routes['change-pw'] = 'changepw/index';

// routes customer

$routes['dang-nhap'] = 'logincus/index';

$routes['dang-nhap-khach-hang'] = 'logincus/login';

$routes['dang-xuat'] = 'logoutcus/logout';

$routes['quen-mat-khau'] = 'logincus/repass';

// $routes['khach-hang'] = 'customer/index';

$routes['dang-ky'] = 'customer/add';

$routes['customer-save'] = 'customer/save';

$routes['cap-nhat-thong-tin/.+-(\d+)'] = 'customer/edit/$1';

$routes['customer-update/.+-(\d+)'] = 'customer/update/$1';

// routes cus info // casi rouste nafy ddung chuaw

$routes['cus-info'] = 'cusinfo/index';

$routes['cus-info-add'] = 'cusinfo/add';

$routes['cus-info-status'] = 'cusinfo/status';

$routes['cus-info-save'] = 'cusinfo/save'; 

$routes['cus-info-update/.+-(\d+)'] = 'cusinfo/update/$1';

// routes drink category

$routes['drink-category'] = 'drinkcategory/index';

$routes['drink-category-add'] = 'drinkcategory/add';

$routes['drink-category-save'] = 'drinkcategory/save';

$routes['drink-category-edit/.+-(\d+)'] = 'drinkcategory/edit/$1';

$routes['drink-category-update/.+-(\d+)'] = 'drinkcategory/update/$1';

$routes['drink-category-status'] = 'drinkcategory/status';

$routes['drink-category-destroy/.+-(\d+)'] = 'drinkcategory/destroy/$1';

// routes post manage

$routes['post-manage'] = 'postmanage/index';

$routes['post-manage-trang-(\d+)'] = 'postmanage/post_pages/$1';

$routes['post-manage-add'] = 'postmanage/add';

$routes['post-manage-save'] = 'postmanage/save';

$routes['post-manage-edit/.+-(\d+)'] = 'postmanage/edit/$1';

$routes['post-manage-update/.+-(\d+)'] = 'postmanage/update/$1';

$routes['post-manage-destroy/.+-(\d+)'] = 'postmanage/destroy/$1';

$routes['post-manage-detail/.+-(\d+)'] = 'postmanage/detail/$1';
// end routes post manage



// routes post category

$routes['post-category'] = 'postcategory/index';

$routes['post-category-add'] = 'postcategory/add';

$routes['post-category-status'] = 'postcategory/status';

$routes['post-category-save'] = 'postcategory/save';

$routes['post-category-edit/.+-(\d+)'] = 'postcategory/edit/$1';

$routes['post-category-update/.+-(\d+)'] = 'postcategory/update/$1';

$routes['post-category-destroy/.+-(\d+)'] = 'postcategory/destroy/$1';


// end routes post category


// routes pers info

$routes['pers-info'] = 'persinfo/index';

$routes['pers-info-add'] = 'persinfo/add';

$routes['pers-info-status'] = 'persinfo/status';

$routes['pers-info-save'] = 'persinfo/save';

$routes['pers-info-edit/.+-(\d+)'] = 'persinfo/edit/$1';

$routes['pers-info-update/.+-(\d+)'] = 'persinfo/update/$1';

$routes['pers-info-destroy/.+-(\d+)'] = 'persinfo/destroy/$1';


// end routes pers info






// routes drink mangage

$routes['drink-manage'] = 'drinkmanage/index';

$routes['drink-manage-trang-(\d+)'] = 'drinkmanage/product_pages/$1';

$routes['drink-manage-filter'] = 'drinkmanage/find';

$routes['tim-kiem-san-pham-trang-(\d+)'] = 'drinkmanage/find_product_pages/$1';

$routes['drink-manage-add'] = 'drinkmanage/add';

$routes['drink-manage-save'] = 'drinkmanage/save';

$routes['drink-manage-edit/.+-(\d+)'] = 'drinkmanage/edit/$1';

$routes['drink-manage-update/.+-(\d+)'] = 'drinkmanage/update/$1';

$routes['drink-manage-destroy/.+-(\d+)'] = 'drinkmanage/destroy/$1';

$routes['drink-manage-status'] = 'drinkmanage/status';

// images

$routes['them-anh'] = 'images/saveForPost';

$routes['sua-anh-edit/.+-(\d+)'] = 'images/updateForPost/$1';

$routes['them-anh-thuc-uong'] = 'images/saveForProduct';

$routes['sua-anh-thuc-uong-edit/.+-(\d+)'] = 'images/updateForProduct/$1';

// routes supplier

$routes['supplier-category'] = 'suppliercategory/index';

$routes['supplier-category-add'] = 'suppliercategory/add';

$routes['supplier-category-save'] = 'suppliercategory/save'; 

$routes['supplier-category-edit/.+-(\d+)'] = 'suppliercategory/edit/$1';

$routes['supplier-category-update/.+-(\d+)'] = 'suppliercategory/update/$1';

$routes['supplier-category-destroy/.+-(\d+)'] = 'suppliercategory/destroy/$1';

        
// routes staff manage

$routes['staff-manage'] = 'staffmanage/index';

$routes['staff-manage-add'] = 'staffmanage/add';

$routes['staff-manage-save'] = 'staffmanage/save'; 

$routes['staff-manage-edit/.+-(\d+)'] = 'staffmanage/edit/$1';

$routes['staff-manage-update/.+-(\d+)'] = 'staffmanage/update/$1';

$routes['staff-manage-destroy/.+-(\d+)'] = 'staffmanage/destroy/$1';


// routes login and
$routes['login'] = 'login/index';
$routes['admin-login'] = 'login/login';


// routes login and
$routes['register'] = 'register/index';
$routes['register-save'] = 'register/save'; 
$routes['admin-register'] = 'register/register';


// routes logout and
$routes['admin-logout'] = 'logout/logout';

// controller: products -> show_detail($id)
    // đường dẫn thật: products/show_detail/id
    // biểu thức chính quy: .+ -> 1 dãy ký tự: prodid 
    //                      - -> dấu: - 
    //                      (\d+) -> số: 1, 2, 3
    // khai báio: chi-tiet-sp/prodid-2


// routes staff payment menthod

$routes['payment-methods'] = 'paymentmethods/index';

$routes['payment-methods-add'] = 'paymentmethods/add';

$routes['payment-methods-save'] = 'paymentmethods/save'; 

$routes['payment-methods-edit/.+-(\d+)'] = 'paymentmethods/edit/$1';

$routes['payment-methods-update/.+-(\d+)'] = 'paymentmethods/update/$1';

$routes['payment-methods-destroy/.+-(\d+)'] = 'paymentmethods/destroy/$1';

$routes['payment-methods-status'] = 'paymentmethods/status';

// routes bill manage menthod

$routes['bill-manage'] = 'bill/index';

$routes['bill-manage-add'] = 'bill/add';

$routes['bill-manage-save'] = 'bill/save'; 

$routes['bill-manage-trang-(\d+)'] = 'billmanage/bill_pages/$1';

$routes['bill-manage-edit/.+-(\d+)'] = 'bill/edit/$1';

$routes['bill-manage-update/.+-(\d+)'] = 'bill/update/$1';

$routes['bill-manage-destroy/.+-(\d+)'] = 'bill/destroy/$1';


// routes bill detail menthod

$routes['bill-detail'] = 'billdetail/index';

$routes['bill-detail-add'] = 'billdetail/add';

$routes['bill-detail-save'] = 'billdetail/save'; 

$routes['bill-status-save'] = 'billstatus/save'; 

$routes['bill-status-update/.+-(\d+)'] = 'billstatus/update/$1'; 

$routes['bill-detail-edit/.+-(\d+)'] = 'billdetail/edit/$1';

$routes['bill-detail-update/.+-(\d+)'] = 'billdetail/update/$1';

$routes['bill-detail-destroy/.+-(\d+)'] = 'billdetail/destroy/$1';

// routes customer

$routes['khach-hang'] = 'customer/index';

$routes['khach-hang-trang-(\d+)'] = 'customer/cus_post_pages/$1';

$routes['customer-manage-add'] = 'customer/add';

$routes['customer-manage-save'] = 'customer/save';


// routes import category

$routes['import-category'] = 'importcategory/index';

$routes['import-category-add'] = 'importcategory/add';

$routes['import-category-save'] = 'importcategory/save'; 

$routes['import-category-edit/.+-(\d+)'] = 'importcategory/edit/$1';

$routes['import-category-update/.+-(\d+)'] = 'importcategory/update/$1';

$routes['import-category-destroy/.+-(\d+)'] = 'importcategory/destroy/$1';

// routes import manage

$routes['import-manage.+-(\d+)'] = 'importmanage/index/$1';

$routes['import-manage-add'] = 'importmanage/add';

$routes['import-manage-save'] = 'importmanage/save'; 

$routes['import-manage-edit/.+-(\d+)'] = 'importmanage/edit/$1';

$routes['import-manage-update/.+-(\d+)'] = 'importmanage/update/$1';

$routes['import-manage-destroy/.+-(\d+)'] = 'importmanage/destroy/$1';

// routes store

$routes['store'] = 'store/index';

$routes['store-add'] = 'store/add';

$routes['store-save'] = 'store/save'; 

$routes['store-status'] = 'store/status';

$routes['store-edit/.+-(\d+)'] = 'store/edit/$1';

$routes['store-update/.+-(\d+)'] = 'store/update/$1';

$routes['store-destroy/.+-(\d+)'] = 'store/destroy/$1';


// routes ingredient

$routes['ingredient'] = 'ingredient/index';

$routes['ingredient-add'] = 'ingredient/add';

$routes['ingredient-save'] = 'ingredient/save'; 

$routes['ingredient-edit/.+-(\d+)'] = 'ingredient/edit/$1';

$routes['ingredient-update/.+-(\d+)'] = 'ingredient/update/$1';

$routes['ingredient-destroy/.+-(\d+)'] = 'ingredient/destroy/$1';
