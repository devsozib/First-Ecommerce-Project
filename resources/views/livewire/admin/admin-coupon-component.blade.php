<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>

<div class="container" style="padding:30px 0;">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            All Coupon
                              </div>
                              <div class="col-md-6">

                                  <a href="{{route('add.coupon')}}" class="btn btn-success pull-right">Add Coupon</a>
                              </div>
                    </div>

                </div>
                <div class="panel-body">
@if (Session::has('d_message'))
<div class="alert alert-danger">{{Session::get('d_message')}}</div>

@endif

                    <table class="table table-striped">

                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Coupon Code</th>
                                <th>Coupon Type</th>
                                <th>Coupon Value</th>
                                <th>Cart Value</th>
                                <th>Coupon Expiry Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coupons as $coupon)


                            <tr>
                                <td>{{$coupon->id}}</td>
                                <td>{{$coupon->code}}</td>
                                <td>{{$coupon->type}}</td>
                                @if ($coupon->type == 'fixed')
                                <td>${{$coupon->value}}</td>  
                                @else
                                <td>{{$coupon->value}}%</td>   
                                @endif
                             
                                <td>{{$coupon->cart_value}}</td>
                                <td>{{$coupon->expiry_date}}</td>
                                <td><a href="{{route('edit.coupon',['coupon_id'=>$coupon->id])}}">

                                    <i  class="fa fa-edit fa-2x"></i>
                                    </a>

                                  <a href="#" onclick="confirm('Are you sure, You want to delete this coupon?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCoupon('{{$coupon->id}}')">
                                    <i  class="fa fa-times text-danger fa-2x"></i>
                                  </a>

                                    </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
</div>
