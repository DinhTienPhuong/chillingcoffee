<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Load các thẻ meta -->
    <?php 
        if(!empty($dataMeta)){
            $this->view('blocks.clients.meta', $dataMeta); 
        }  
     ?> 

    <!-- Title -->
    <title>
        <?php 
            echo !empty($page_title) ? $page_title : 'Trang chủ';
         ?>
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo _WEB_ROOT; ?>/public/frontend/images/favicon.ico">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>

    <!-- CSS Style -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/frontend/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/frontend/css/animate.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/frontend/css/magnific-popup.css">
   
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/frontend/css/aos.css">

    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/frontend/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/frontend/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/frontend/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/frontend/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/frontend/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/frontend/css/style.css">

    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/frontend/css/sweetalert.css">
  </head>

  <body class="cms-index-index">

    <!-- load header -->
    <?php 
        
        if(!empty($data_header)){
            $this->view('blocks.clients.header', $data_header); 
        }else{
            $this->view('blocks.clients.header'); 
        }
            
    ?>
    
    <!-- load content --> 
    <?php 

        if(!empty($sub_content)){
            $this->view($content, $sub_content); 
        }else{
            $this->view($content); 
        }
            
    ?>

    <!-- load footer -->
    <?php 

        if(!empty($data_footer)){
            $this->view('blocks.clients.footer', $data_footer); 
        }else{
            $this->view('blocks.clients.footer'); 
        }
            
    ?>

    <!-- load script thêm -->


    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/main.js"></script>
     
    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/jquery.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/popper.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/bootstrap.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/jquery.stellar.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/owl.carousel.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/aos.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/jquery.timepicker.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=true"></script>

    <script src="<?php echo _WEB_ROOT; ?>/public/frontend/js/sweetalert.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function () {
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                
                $.ajax({
                    url:'<?php echo _WEB_ROOT; ?>/luu-gio-hang',
                    method: 'POST',
                    data:{
                        cart_product_id:cart_product_id,
                        cart_product_name:cart_product_name,
                        cart_product_image:cart_product_image,
                        cart_product_price:cart_product_price,
                        cart_product_qty:cart_product_qty
                    },
                    success:function(data){
                        swal(
                            {
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "<?php echo _WEB_ROOT; ?>/gio-hang";
                            }
                        );
                        event.preventDefault();
                    }
                });
            })

            function total_item() {
                var products = document.querySelectorAll('.product_cart_item');
                products.forEach(product => {
                    var priceStr = product.querySelector('.cart_price_mini').innerHTML;
                    var a = priceStr.replaceAll(',','');
                    var price = Number(a);
                    var qty = Number(product.querySelector('.cart_quantity_input').value);
                    var total = price * qty;
                    product.querySelector('.cart_total_price').innerHTML = total;
                });
            }

            function total_cart() {
                var total_item = document.querySelectorAll('.cart_total_price');
                var result = 0;
                total_item.forEach(element => {
                    result += Number(element.innerHTML);
                });

                var sub_total = result;

                document.querySelector('.total_area .subtotal').innerHTML = sub_total + ".000 đ";
                document.querySelector('.total_area .grandtotal').innerHTML = result + ".000 đ";
            }

            total_item();
            total_cart();

            var qties = document.querySelectorAll('.cart_quantity_input');
            qties.forEach(element => {
                element.addEventListener('change', function() {
                    total_item();
                    var time = setTimeout(total_cart(), 1000);
                    var prod_id = element.dataset.id_prod;
                    $.ajax({
                        url: '<?php echo _WEB_ROOT; ?>/process-qty',
                        method: 'POST',
                        data: {
                            product: {
                                prod_id: prod_id,
                                prod_qty: element.value
                            }
                        },
                        success:function(data){
                            console.log(data);
                        }
                    })
                });
            });

            var del_items = document.querySelectorAll('.cart_quantity_delete');
            var table_cart = document.querySelector('.table_cart');
            del_items.forEach(element => {
                element.addEventListener('click', function() {
                    var del_id = element.dataset.delid;
                    $.ajax({
                        url: '<?php echo _WEB_ROOT; ?>/del-cart',
                        method: 'POST',
                        data:{
                            id:del_id
                        },
                        success:function(data){
                            // window.location.reload();
                            console.log("ok");
                        }
                    })
                });
            });
        });
    </script>


</body>
</html>