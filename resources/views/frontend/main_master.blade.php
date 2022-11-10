<!DOCTYPE html>
<html lang="en">

@php
$seo = App\Models\Seo::find(1);
@endphp
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="{{ $seo->meta_description }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="author" content="{{ $seo->meta_author }}">
<meta name="keywords" content="{{ $seo->meta_keyword }}">
<meta name="robots" content="all">


<!-- /// Google Analytics Code // -->
<script>
    {{ $seo->google_analytics }}
</script>
<!-- /// Google Analytics Code // -->
<link rel="icon" href="{{asset('fronten/asset/images/fg.png')}}">
<title>@yield('title') </title>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css"
        integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="{{asset('fronten/assets/css/style.css')}}" />
    
        <link rel="stylesheet" type="text/css" href="{{asset('fronten/assets/css/shop.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('fronten/assets/css/fgstyle.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('fronten/assets/css/profileview.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('fronten/assets/css/product_detail.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('fronten/assets/css/atl.css')}}" />
   <link rel="stylesheet" type="text/css" href="{{asset('fronten/assets/css/tailwind.css')}}" />  
   <link rel="stylesheet" type="text/css" href="{{asset('fronten/assets/css/video-player.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
      <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

  




</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
@include('frontend.body.header')

<!-- ============================================== HEADER : END ============================================== -->
@yield('content')
<!-- /#top-banner-and-menu --> 

<!-- ============================================================= FOOTER ============================================================= -->
@include('frontend.body.footer')
<!-- ============================================================= FOOTER : END============================================================= --> 

<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
 <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script type="text/javascript"
        scr="https://cdnjs.cloudflare.com/ajax/libs/animateCSS/1.2.2/jquery.animatecss.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
   


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"
        integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>





<!-- Add to Cart Product Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong><span id="pname"></span> </strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModel">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <div class="row free-section">


        <div class="col-md-6 col-6" style="padding-top:25px;">

       <div class="free-course "><p><span>Congratualations! </span>with this kit you are getting <span>Robotics Starter </span>course <span>FREE.</span></p></div>

      <p class="free-course-price">Product Price: <strong><span>₹ 0 </span></strong>
     <del> ₹ 1299</del>


      </p>

            
        </div><!-- // end col md -->

        <div class="col-md-6 col-6">
            <div class="card">
              <img src=" " class="card-img-top" alt="..." style="height: 200px; width: 100%;" id="cimage"> 
            </div>
        </div><!-- // end col md -->
        </div> <!-- // end row -->
 
     <div class="row">

        <div class="col-md-6 col-6">

            <div class="card">

  <img src=" " class="card-img-top" alt="..." style="height: 200px; width: 100%;" id="pimage">
  
</div>
            
        </div><!-- // end col md -->


        <div class="col-md-6 col-6">

     <ul class="list-group">
  <li class="list-group-item">Product Price: <strong class="text-info">₹<span id="pprice"></span></strong>
<del id="oldprice">₹</del>
   </li>


  <li class="list-group-item">Brand: <strong id="pbrand"></strong></li>
  <li class="list-group-item">Stock: <span class="badge badge-pill badge-success" id="aviable" style="background: green; color: white;"></span> 
<span class="badge badge-pill badge-danger" id="stockout" style="background: red; color: white;"></span> 

  </li>
</ul>

    <div class="form-group">
    <label for="qty">Quantity</label>
    <input type="number" class="form-control" id="qty" value="1" min="1" >
  </div> <!-- // end form group -->

<input type="hidden" id="product_id">

<a href="{{ route('mycart') }}" type="submit" class="btn btn-primary mb-2" onclick="addToCart()">Proceed to Buy</a>
            
        </div><!-- // end col md -->


           
       </div> <!-- // end row -->



      </div> <!-- // end modal Body -->
      
    </div>
  </div>
</div>
<!-- End Add to Cart Product Modal -->

    

<!-- Cart model end -->

<script type="text/javascript">
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })

// Start Product View with Modal 

function productView(id){
    // alert(id)
    $.ajax({
        type: 'GET',
        url: '/product/view/modal/'+id,
        dataType:'json',
        success:function(data){
            // console.log(data)
            $('#pname').text(data.product.product_name_en);
            $('#price').text(data.product.selling_price);
            $('#pcode').text(data.product.product_code);
            $('#pcategory').text(data.product.category.category_name_en);
            $('#pbrand').text(data.product.brand.brand_name_en);
            $('#pimage').attr('src','/'+data.product.product_thambnail);

            $('#product_id').val(id);
            $('#qty').val(1);
            $('#cimage').attr('src','/'+data.course.course_thambnail);

            // Product Price 
            if (data.product.discount_price == null) {
                $('#pprice').text('');
                $('#oldprice').text('');
                $('#pprice').text(data.product.selling_price);


            }else{
                $('#pprice').text(data.product.discount_price);
                $('#oldprice').text(data.product.selling_price);

            } // end prodcut price 

            // Start Stock opiton

            if (data.product.product_qty > 0) {
                $('#aviable').text('');
                $('#stockout').text('');
                $('#aviable').text('aviable');

            }else{
                $('#aviable').text('');
                $('#stockout').text('');
                $('#stockout').text('stockout');
            } // end Stock Option 

            // Color
    $('select[name="color"]').empty();        
    $.each(data.color,function(key,value){
        $('select[name="color"]').append('<option value=" '+value+' ">'+value+' </option>')
    }) // end color

     // Size
    $('select[name="size"]').empty();        
    $.each(data.size,function(key,value){
        $('select[name="size"]').append('<option value=" '+value+' ">'+value+' </option>')
        if (data.size == "") {
            $('#sizeArea').hide();
        }else{
            $('#sizeArea').show();
        }

    }) // end size
 

        }

    })
 

}
// Eend Product View with Modal 


 // Start Add To Cart Product 

    function addToCart(){
        var product_name = $('#pname').text();
        var id = $('#product_id').val();
        var color = $('#color option:selected').text();
        var size = $('#size option:selected').text();
        var quantity = $('#qty').val();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data:{
                color:color, size:size, quantity:quantity, product_name:product_name
            },
            url: "/cart/data/store/"+id,
            success:function(data){

                miniCart()
                $('#closeModel').click();
                // console.log(data)

                // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })

                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })

                }

                // End Message 
            }
        })

    }
  
// End Add To Cart Product 

</script>

<script type="text/javascript">
     function miniCart(){
        $.ajax({
            type: 'GET',
            url: '/product/mini/cart',
            dataType:'json',
            success:function(response){

                $('span[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartQty').text(response.cartQty);
                var miniCart = ""

                $.each(response.carts, function(key,value){
                    miniCart += `<div class="cart-item product-summary">
          <div class="row">
            <div class="col-xs-4">
              <div class="image"> <a href="detail.html"><img src="/${value.options.image}" alt=""></a> </div>
            </div>
            <div class="col-xs-7">
              <h3 class="name"><a href="index.php?page-detail">${value.name}</a></h3>
              <div class="price"> ${value.price} * ${value.qty} </div>
            </div>
            <div class="col-xs-1 action"> 
            <button type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"><i class="fa fa-trash"></i></button> </div>
          </div>
        </div>
        <!-- /.cart-item -->
        <div class="clearfix"></div>
        <hr>`
        });
                
                $('#miniCart').html(miniCart);
            }
        })

     }
 miniCart();

 /// mini cart remove Start 
    function miniCartRemove(rowId){
        $.ajax({
            type: 'GET',
            url: '/minicart/product-remove/'+rowId,
            dataType:'json',
            success:function(data){
            miniCart();

             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })

                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })

                }

                // End Message 

            }
        });

    }

 //  end mini cart remove 


</script>

<!--  /// Start Add Wishlist Page  //// -->

<script type="text/javascript">
    
function addToWishList(product_id){
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: "/add-to-wishlist/"+product_id,

        success:function(data){

             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })

                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })

                }

                // End Message 


        }

    })

} 

</script> 

 <!--  /// End Add Wishlist Page  ////   -->

<!-- /// Load Wishlist Data  -->


<script type="text/javascript">
     function wishlist(){
        $.ajax({
            type: 'GET',
            url: '/user/get-wishlist-product',
            dataType:'json',
            success:function(response){

                var rows = ""
                $.each(response, function(key,value){
                    rows += `<tr>
                    <td class="col-md-2"><img src="/${value.product.product_thambnail} " alt="imga"></td>
                    <td class="col-md-7">
                        <div class="product-name"><a href="#">${value.product.product_name_en}</a></div>
                         
                        <div class="price">
                        ${value.product.discount_price == null
                            ? `₹ ${value.product.selling_price}`
                            :
                            `₹ ${value.product.discount_price} <span>₹ ${value.product.selling_price}</span>`
                        }

                            
                        </div>
                    </td>
        <td class="col-md-2">
            <button class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="${value.product_id}" onclick="productView(this.id)"> Add to Cart </button>
        </td>
        <td class="col-md-1 close-btn">
            <button type="submit" class="" id="${value.id}" onclick="wishlistRemove(this.id)"><i class="fa fa-times"></i></button>
        </td>
                </tr>`
        });
                
                $('#wishlist').html(rows);
            }
        })

     }
 wishlist();



 ///  Wishlist remove Start 
    function wishlistRemove(id){
        $.ajax({
            type: 'GET',
            url: '/user/wishlist-remove/'+id,
            dataType:'json',
            success:function(data){
            wishlist();

             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })

                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })

                }

                // End Message 

            }
        });

    }

 // End Wishlist remove   


 </script>  

<!-- /// End Load Wisch list Data  -->


<!-- /// Load My Cart /// -->

<script type="text/javascript">
     function cart(){
        $.ajax({
            type: 'GET',
            url: '/user/get-cart-product',
            dataType:'json',
            success:function(response){

    var rows = ""
    $.each(response.carts, function(key,value){
        rows += `      <div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                   
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                        data-mdb-ripple-color="light">
                                        <img src="${value.options.image}"
                                            class="w-100" alt="Blue Jeans Jacket" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                    </div>
                                 
                                </div>

                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                               
                                    <p><strong>${value.name}</strong></p>
                                   
                                    <button type="button" class="btn btn-primary btn-sm me-1 mb-2"
                                        id="${value.rowId}" data-mdb-toggle="tooltip" title="Remove item" onclick="cartRemove(this.id)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                  
                                  
                                </div>


                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                           
                                    <div class="d-flex mb-4" style="max-width: 300px">
        
             ${value.qty > 1

            ? `<button type="submit" class="btn btn-primary px-3 me-2" id="${value.rowId}" onclick="cartDecrement(this.id)" ><i class="fas fa-minus"></i></button> `

            : `<button type="submit" class="btn btn-primary px-3 me-2" disabled ><i class="fas fa-minus"></i></button> `
            }
                                         
                                         <div class="form-outline">
                                            <input id="form1" min="1" max="10" name="quantity" value="${value.qty}" type="number" disabled="" class="form-control" />
                                            <label class="form-label" for="form1">Quantity</label>
                                        </div>

                

         <button type="submit" class="btn btn-primary px-3 ms-2" id="${value.rowId}" onclick="cartIncrement(this.id)" ><i class="fas fa-plus"></i></button> 


                                    </div>
                                   

                                
                                    <p class="text-start text-md-center">
                                    
                                            <strong>Price: </strong>
                                            ₹ ${value.subtotal}
                                       
                                    </p>
                                   
                                </div>
                            </div>
                            

                            <hr class="my-4" />



                `
        });
                
                $('#cartPage').html(rows);
            }
        })

     }
 cart();



 ///  Cart remove Start 
    function cartRemove(id){
        $.ajax({
            type: 'GET',
            url: '/user/cart-remove/'+id,
            dataType:'json',
            success:function(data){
            couponCalculation();
            cart();
            miniCart();
             $('#couponField').show();

            $('#coupon_name').val('');

             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })

                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })

                }

                // End Message 

            }
        });

    }

 // End Cart remove   


 // -------- CART INCREMENT --------//

    function cartIncrement(rowId){
        $.ajax({
            type:'GET',
            url: "/cart-increment/"+rowId,
            dataType:'json',
            success:function(data){
                couponCalculation();
                cart();
                miniCart();
            }
        });
    }


 // ---------- END CART INCREMENT -----///



 // -------- CART Decrement  --------//

    function cartDecrement(rowId){
        $.ajax({
            type:'GET',
            url: "/cart-decrement/"+rowId,
            dataType:'json',
            success:function(data){
                couponCalculation();
                cart();
                miniCart();
            }
        });
    }


 // ---------- END CART Decrement -----///
 

 </script>  

<!-- //End Load My cart / -->



<!--  //////////////// =========== Coupon Apply Start ================= ////  -->
<script type="text/javascript">
  function applyCoupon(){
    var coupon_name = $('#coupon_name').val();
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {coupon_name:coupon_name},
        url: "{{ route('couponApply') }}",
        success:function(data){

             couponCalculation();
              if (data.validity == true) {
                $('#couponField').hide();
               
               }             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                // End Message 
        }
    })
  }  




   function couponCalculation(){
    $.ajax({
        type: 'GET',
        url: "{{ route('couponCalculation') }}",
        dataType: 'json',
        success:function(data){



              if (data.total) {
                $('#couponCalField').html(
                    ` <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                     Subtotal
                                    <span>₹ ${data.total}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>FREE</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including All Tax)</p>
                                        </strong>
                                    </div>
                                    <span><strong>₹ ${data.total}</strong></span>
                                </li>
                            </ul>

                                
                            <a href="{{route('checkout')}}" type="submit" class="btn btn-primary btn-lg btn-block">PROCCED TO CHEKOUT</a>




            `
            )
            }else{
                 $('#couponCalField').html(
                    `<ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                  Subtotal
                                    <span>₹ ${data.subtotal}</span>
                                </li>
                                  <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Coupon
                                    <span>${data.coupon_name} <button type="submit" class="btn btn-primary btn-sm me-1 mb-2"onclick="couponRemove()"> <i class="fas fa-trash"></i></button></span>
                                    
                                </li>
                                   <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                   Discount Amount
                                    <span>₹ ${data.discount_amount}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>FREE</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including All Tax)</p>
                                        </strong>
                                    </div>
                                    <span><strong>₹ ${data.total_amount}</strong></span>
                                </li>
                            </ul>

                                
                            <a href="{{route('checkout')}}" type="submit" class="btn btn-primary btn-lg btn-block">PROCCED TO CHEKOUT</a>








            `
            )
            }
        }
    });
  }

 couponCalculation();
</script>
<!--  //////////////// =========== End Coupon Apply Start ================= ////  -->



<!--  //////////////// =========== Start Coupon Remove================= ////  -->

<script type="text/javascript">
     
     function couponRemove(){
        $.ajax({
            type:'GET',
            url: "{{ route('couponRemove') }}",
            dataType: 'json',
            success:function(data){
                couponCalculation();
                $('#couponField').show();
                
                $('#coupon_name').val('');
                 // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                // End Message 
            }
        });
     }
</script>


<!--  //////////////// =========== End Coupon Remove================= ////  -->
 
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous">
    </script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
 <script src="{{asset('fronten/assets/js/script.js')}}"></script>

<script src="{{asset('fronten/assets/js/dom.js')}}"></script>
 <script src="{{asset('fronten/assets/js/atl.js')}}"></script>
    <script src="{{asset('fronten/assets/js/video-list.js')}}" type="text/javascript"></script>
    @yield('scripts')
</body>
</html>