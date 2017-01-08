@extends('layouts.purchase')

@section('content')

<div class="container">
   <table id="cart" class="table table-hover table-condensed">
         <thead>
            <tr>
               <th style="width:44%" class="text-center">Fantasia</th>
               <th style="width:24%" class="text-center">Fornecedor</th>
               <th style="width:22%" class="text-center">Valor</th>
               <th style="width:10%"></th>
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
               </tr>
            </tbody>
         @endforeach
         <tfoot>
            <tr class="visible-xs">
               <td class="text-center" ><strong>{{ $total }}</strong></td>
            </tr>
            <tr>
               <td colspan="2" class="hidden-xs"></td>
               <td class="hidden-xs text-center"><strong>Total + frete: R$ {{ $total }}</strong></td>
               <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
         </tfoot>
   </table>
</div>
@stop