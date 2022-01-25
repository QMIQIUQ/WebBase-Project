@extends('layouts.frontend')
@section('content')

<script>
    function cal() {

        var names = document.getElementsByName('subtotal[]');

        var subtotal = 0;

        var cboxes = document.getElementsByName('cid[]');

        var len = cboxes.length; //get number  of cid[] checkbox inside the page

        for (var i = 0; i < len; i++) {

            if (cboxes[i].checked) { //calculate if checked

                subtotal = parseFloat(names[i].value) + parseFloat(subtotal);

            }

        }

        document.getElementById('sub').value = subtotal.toFixed(2); //convert 2 decimal place      

    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<form action="{{ route('payment.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
    @csrf
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br><br>
            <table class="table table-striped table-light">
                <thead>
                    <tr>
                        <td scope="col">&#128526;</td>
                        <td scope="col">Name</td>
                        <td scope="col">Price</td>
                        <td scope="col">Quantity</td>
                        <td scope="col">Subtotal</td>
                        <td scope="col">&nbsp;</td>

                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td scope="row">
                            <input type="checkbox" name="cid[]" id="cid[]" value="{{$product->cid}}" onclick="cal()">

                            <input type="hidden" name="subtotal[]" id="subtotal[]" value="{{$product->price*$product->cartQty}}">

                            <img src="{{asset('images/')}}/{{$product->image}}" alt="" width="100" class="img-fluid">
                        </td>

                        <td>{{$product->name}}</td>
                        <td>RM {{$product->price}}</td>
                        <td>{{$product->cartQty}}</td>
                        <td>{{$product->price*$product->cartQty}}</td>
                        <td>
                            <a href="{{ url('delete-cart/'.$product->cid) }}" class="btn btn-sm btn-danger" >Remove</a>
                        </td>
                       
                    </tr>
                    @endforeach

                    <tr align="right">

                        <td colspan="4">&nbsp;</td>

                        <td>RM<i> </i> <input class='form-control' type="text" value="0" name="sub" id="sub" size="7" readonly /></td>

                        <td>&nbsp;</td>

                    </tr>
                </tbody>
            </table>

        </div>

        <div class="col-sm-2"></div>

    </div>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            {{$products->links('pagination::bootstrap-4')}}

        </div>

        <div class="col-sm-2"></div>
    </div>

    <br>
    <br>



    <div class="container">

    <div class="row bg-light ">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <h3 class="text-dark">Address</h3>
            <input type="text" class='form-control mb-3' id="Address" name="Address" required1>
            </div>
            <div class="col-sm-2"></div>
    </div>

    <hr>

    <div class="row bg-light">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading mt-3">
                    <div class="row">
                        <h3 class="text-dark">Card Payment</h3>

                    </div>
                </div>
                <div class="panel-body">

                    <br>

                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-6 form-group required'>
                            <label class='control-label text-dark'>Name on Card</label>
                            <input class='form-control' size='4' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-6 form-group required'>
                            <label class='control-label text-dark'>Card Number</label>
                            <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                        </div>
                    </div>
                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class='control-label text-dark'>CVC</label>
                            <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label text-dark'>Expiration Month</label>
                            <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label text-dark'>Expiration Year</label>
                            <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                        </div>
                    </div>
                    {{-- <div class='form-row row'>
                         <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>Please correct the errors and try
                               again.
                            </div>
                         </div>
                      </div> --}}
                    <div class="form-row row mb-3">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-2"></div>
    </div>
    </div>
</form>






<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    $(function() {
        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=text]', 'input[type=file]', 'textarea'].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });
            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }
        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });
</script>

@endsection