<header class="header">
  <div class="topbar">
    <div class="container">
      <div>
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 a-left">
            <div class="list-inline f-left topbar-left">
              <span class="icon-login">
                <img src="{{ asset('/public/files/front/icon_login.png') }}" alt="icon login">
              </span>              
              <span class="li hidden-md hidden-sm hidden-xs"><a href="" data-toggle="modal" data-target="#dangky" title="Đăng ký">Đăng ký</a></span>
              {{-- <span class="li hidden-lg"><a href="{{ url('/auth/register') }}" title="Đăng ký">Đăng ký</a></span> --}}
              hoặc
              <span class="li hidden-md hidden-sm hidden-xs"><a href="" data-toggle="modal" data-target="#dangnhap" onclick="dangnhap();return false;" title="Đăng nhập">Đăng nhập</a></span>
              <span class="li hidden-lg"><a href="/login" title="Đăng nhập">Đăng nhập</a></span>                
            </div>
          </div>
          <div class="col-sm-8 col-md-8 col-lg-8 a-right hidden-xs">
            <div class="topbar-right f-right">              
              <nav>
                <ul id="nav" class="nav">    
                  <li class="nav-item active"><a class="nav-link" href="/">Trang chủ</a></li>               
                  {{-- @foreach($cates as $cate)
                  <li class="nav-item "><a class="nav-link" href="/{{ $cate['slug']}}">{{ $cate['name']}}</a></li>   
                  @endforeach  --}}             
                  {{-- <li class="nav-item active"><a class="nav-link" href="/">Trang chủ</a></li>                  
                  <li class="nav-item "><a class="nav-link" href="/gioi-thieu">Giới thiệu</a></li>                  
                  <li class="nav-item "><a class="nav-link" href="/collections/all">Sản phẩm</a></li>                  
                  <li class="nav-item "><a class="nav-link" href="/tin-tuc">Tin tức</a></li>                  
                  <li class="nav-item "><a class="nav-link" href="/lien-he">Liên hệ</a></li>  --}}                 
                </ul> 
              </nav>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="header-main">
      <div class="row">
        <div class="nav-mobile-button hidden-md hidden-lg">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 head_logo">
          <div class="logo">            
            <a href="/" class="logo-wrapper ">          
              <img src="public/files/logo.png" alt="logo ">         
            </a>                        
          </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 hidden-xs hidden-sm">
          <div class="service_header">
            <div class="section-policy">
              <div class="policy-content ">
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="policy">
                      <div class="policy-icon">
                        <img src="{{ asset('/public/files/front/service_1.png') }}" alt="Miễn phí vận chuyển trên toàn quốc">
                      </div>
                      <div class="policy-text">
                        <h4>Miễn phí vận chuyển trên toàn quốc</h4>
                      </div>
                    </div><!-- /.policy -->
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="policy">
                      <div class="policy-icon">
                        <img src="{{ asset('/public/files/front/service_2.png') }}" alt="Đổi trả hàng trong 30 ngày đầu">
                      </div>
                      <div class="policy-text">
                        <h4>Đổi trả hàng trong 30 ngày đầu</h4>
                      </div>
                    </div><!-- /.policy -->
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="policy">
                      <div class="policy-icon">
                        <img src="{{ asset('/public/files/front/service_3.png') }}" alt="Hỗ trợ khách hàng:">
                      </div>
                      <div class="policy-text">
                        <h4>Hỗ trợ khách hàng:</h4>
                        <a href="tel:19006750">
                        19006750</a>
                      </div>
                    </div><!-- /.policy -->
                  </div>
                </div><!-- /.row -->
              </div><!-- /.policy-wrapper -->
            </div>
          </div>
        </div>
        {{-- <div class="col-lg-1 style-b-header1 ">
          <div class="wishlist_header">            
            <a class="iWishView" href="javascript:;" title="Danh sách yêu thích" data-customer-id="0">
              <img alt="Wishlist" src="{{ asset('files/front/icon_wishlist.png') }}">
              <span class="hidden-xs-l">Yêu thích</span></a>            
          </div>    
        </div> --}}
        <div class="col-lg-1 style-b-header2">
          <div class="top-cart-contain f-right">
            <div class="mini-cart text-xs-center">
              <div class="heading-cart">
                <a class="bg_cart" href="/cart" title="Giỏ hàng">
                  <img alt="Giỏ hàng" src="{{ asset('/public/files/front/icon_cart.png') }}">
                  <span class="count_item count_item_pr">0</span>
                  <div class="under-cart">
                    <span class="text-giohang hidden-xs">Giỏ hàng</span>
                  </div>                  
                </a>
              </div>  
              <div class="top-cart-content">          
                <ul id="cart-sidebar" class="mini-products-list count_li"><div class="no-item"><p>0.</p></div></ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>