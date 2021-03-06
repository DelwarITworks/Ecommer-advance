@extends('layouts.app')

@section('title','Electro Home')
@section('customlink')
  <!-- Material Design Bootstrap -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/styles/mdb.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('public/front/styles/shop_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/styles/shop_responsive.css') }}">
@endsection
@section('content')

  <!--Main layout-->
  <main class="mt-2 pt-1">
    <div class="container wow fadeIn">


      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">
          <div class="card-body">
              <h3>Delevery Information</h3>
            </div>
          <!--Card-->
          <div class="card">
            <!-- Cart -->

                <table class="table table-bordered">
                    <tr>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Color</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Total</th>
                      <th>Action</th>
                    </tr>

                    @foreach($viewcarts as $data)
                    <tr>
                      <td><?php foreach(array(json_decode($data->options->image)) as $image){?>
                                          <img src="{{ asset('public/file/'.$image[0]) }}" height="50px" width="50px">
                                           <?php }?>
                                      </td>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->options->color }}</td>
                      <td><form action="{{ url('/cartupdate/'.$data->rowId) }}" method="POST">
                          @csrf
                          <input type="number" name="qty" value="{{ $data->qty }}" class="form-control-sm" style="width:70px; float:left;">
                          <button type="submit" class="btn-sm">+</button>
                        </form>
                      </td>
                      <td>???{{ $data->price }}</td>
                      <td>???{{ $data->qty * $data->price }}</td>
                      <td><a class="btn btn-sm btn-danger" href="{{ route('cart.delete',$data->rowId) }}"><i class="fas fa-trash-alt"></i></a>
                      </td>
                    </tr>

                    @endforeach

                    

            
            <!-- Order Total -->
                    <tr>
                      <td colspan="5" class="text-right font-weight-bold">Order Total = </td>
                      <td>
                        @if(Session::has('coupon'))
                          ???{{ Session::get('coupon')['balance'] }}
                        @else
                          {{ Cart::subtotal() }}
                        @endif
                      </td>
                      <td></td>
                    </tr>
                  </table>

          </div>

              @if(Session::has('coupon'))
              <div class="card-body">
              <h3 class="text-default">Coupon Added Successfully</h3>
            </div>
          <div class="card">
            <table class="table table-bordered">
              <tr>
                <th colspan="5">Coupon Name : {{ Session::get('coupon')['name'] }}</th>
                <td>-???{{ Session::get('coupon')['discount'] }}</td>
                <td><a href="{{ route('remove.coupon') }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a></td>
              </tr>
              
            </table>
            
          </div>
          @else

              @endif
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3 mt-5">
            <span class="text-muted">Your cart</span><a href="{{ URL::to('cartview') }}">
            <span class="badge badge-secondary badge-pill">{{ Cart::count() }}</span></a>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
            
            <button class="btn btn-primary btn-block mb-0" >Proceed to pay</button>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h5 class="" style="border-bottom:1px solid gray; font-size: 1rem; ">Shipping & Billing</h5>
              </div>
              <div class="">
                <span class="text-muted" style="text-align:left;"><a href="{{ URL::to('checkoutedit') }}">Edit</a></span>
              </div>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-condensed" style=" padding: 5px 20px;">
              <div class="">
              <span class="text-muted font-weight-bold" style="text-align:left;">???<i class="fas fa-map-marker-alt text-primary" style="margin-right: 5px; font-weight: 0px; font-size: 13px;"></i>{{ $data->name }}</span>
            </div>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-condensed" style=" padding: 5px 20px;">
              <div>
              <span class="text-muted" style="text-align:left;">???{{ $userdetail->address }}</span>
            </div>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-condensed" style=" padding: 5px 20px;">
              <div class="">
              <span class="text-muted" style="text-align:left;">???<i class="fas fa-phone  text-primary" style="margin-right: 5px; font-weight: 0px; font-size: 13px;"></i></i>{{ $userdetail->phone }}</span>

            </div>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-condensed" style=" padding: 5px 20px;">
              <div class="">
              <span class="text-muted" style="text-align:left;">???<i class="fas fa-envelope text-primary" style="margin-right: 5px; font-weight: 0px; font-size: 13px;"></i>{{ Auth::user()->email }}</span>
            </div>
            </li>
            
            @if(Session::has('coupon'))
            <a href="{{ route('remove.coupon') }}" class="btn btn-secondary btn-block mb-0" >Destroy Coupon</a>
            @else
            <button class="btn btn-secondary btn-block mb-0" >Simple Advertisement</button>
            @endif

            <li class="list-group-item d-flex justify-content-between lh-condensed" sy>
              <div>
                <h5 class="" style="border-bottom:1px solid gray;">Order Summery</h5>
              </div>
              <div class="">
              </div>
            </li>

            <li class="list-group-item d-flex justify-content-between">
              <span  class="text-muted">Subtotal({{ Cart::count() }} Items)</span>
              <strong>??????{{ str_replace(',', '', Cart::subtotal()) }}</strong>
            </li>

            <li class="list-group-item d-flex justify-content-between">
              <span class="text-muted">Shipping fee</span>
              <strong>??????100</strong>
            </li>

            <li class="list-group-item d-flex justify-content-between">
              <span  class="text-muted">Vat</span>
              <strong>??????5</strong>
            </li>

            
              
          <!-- Promo code -->
          @if(Session::has('coupon'))
          <li class="list-group-item d-flex justify-content-between bg-light">
          <span  class="text-muted">Coupon Discount</span>
          <strong>???-???{{ Session::get('coupon')['discount'] }}</strong>
          @else
          <li class="list-group-item d-flex justify-content-between">
          <form action="{{ route('apply.coupon') }}" class="card p-2" method="post">
            @csrf
            <div class="input-group">
              <input type="text" name="coupon" class="form-control" placeholder="Enter coupon name..">
              <div class="input-group-append">
                <button class="btn btn-secondary btn-md waves-effect m-0" type="submit">Redeem</button>
              </div>
            </div>
          </form>
          @endif
          <!-- Promo code -->
            </li>

            <li class="list-group-item d-flex justify-content-between">
              <span class="">Total (BDT)</span>
              @if(Session::has('coupon'))
              <strong style="color:#FF7049;">??????{{ Session::get('coupon')['balance'] + 100 +5}}</strong>
              @else
              <strong style="color:#FF7049;">??????{{ str_replace(',', '', Cart::subtotal()) + 100 +5}}</strong>
              @endif
              
            </li>
            <button class="btn btn-primary btn-block mb-0" >Proceed to pay</button>
          </ul>
          <!-- Cart -->


        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
@endsection

@section('customscript')
  <!-- MDB core JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/popper.min.js" integrity="sha256-O17BxFKtTt1tzzlkcYwgONw4K59H+r1iI8mSQXvSf5k=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="{{ asset('public/front/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('public/front/js/shop_custom.js') }}"></script>
<script src="{{ asset('public/front/js/mdb.min.js') }}"></script>
@endsection