@extends('layouts.purchase')

@section('content')

<form method="POST" action="{{ url('/purchase') }}">
  <div class="container">
     <table id="cart" class="table table-hover table-condensed">
           <thead>
              <tr>
                 <th style="width:44%" class="text-center">Fantasia</th>
                 <th style="width:24%" class="text-center">Fornecedor</th>
                 <th style="width:22%" class="text-center">Valor (R$)</th>
                 <th style="width:10%" class="text-center">Quantidade</th>
              </tr>
           </thead>
           @foreach($products as $product)
              <tbody>
                 <tr>
                    <td data-th="Product">
                       <div class="row">
                          <div class="col-sm-2 hidden-xs"><img src="{{ $product->getImg() }}" alt="..." class="img-responsive"/></div>
                          <div class="col-sm-10">
                             <h4 class="nomargin">{{ $product->getName() }}</h4>
                                <p>{{ $product->getDescription() }}</p>
                          </div>
                       </div>
                    </td>
                    <td data-th="Fornecedor" class="text-center">{{ $product->getUser()->getName() }}</td>
                    <td data-th="Valor" class="text-center">{{ $product->getValue() }}</td>
                    <td data-th="Quantidade" class="text-center">1</td>
                 </tr>
              </tbody>
           @endforeach
           <tfoot>
              <tr>
                 <td colspan="2" class="hidden-xs"></td>
                 <td class="hidden-xs text-center"><strong>Total + frete (R$ 42,00 por produto): R$ {{ $amount/100 }}</strong></td>
                 <td class="hidden-xs text-center"">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="amount_total" value="{{ $amount }}">
                        <script type="text/javascript"
                          src="https://assets.pagar.me/checkout/checkout.js"                        data-button-text="Checkout"
                          data-payment-methods="credit_card,boleto"
                          data-encryption-key="ek_test_JMB8d0usCv0ikD0WiEoCGnwH3tuqU2"
                          data-amount="{{ $amount }}" data-ui-color="#0f6beb">
                        </script>
                 </td>
              </tr>
           </tfoot>
     </table>
  </div>
</form>                  

@stop