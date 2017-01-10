@extends('layouts.purchase')

@section('content')


<div class="container" align="center">
    <div class="row">
        <div class="col-sm-16 col-md-16">
            <div class="alert alert-success">
               <span class="glyphicon"></span> <strong>Transação capturada e realizada com sucesso!</strong>
                <hr class="message-inner-separator">
                @foreach($users as $user)
                <p>{{ $user->getName() }} lucrou R$ {{ $user->getProfit() }} nesta compra!</p>
                @endforeach
            </div>
        </div>
    </div>
</div>

@stop