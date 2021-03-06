<?php
$isAddressBtc = App\AddressBtc::exists(Auth::user()->id);
$isAddressLtc = App\AddressLtc::exists(Auth::user()->id);
$isAddressDoge=App\AddressDoge::exists(Auth::user()->id);
?>

@extends("layaouts.contenido_dashboard")

@section("title")
    Wallet
@endsection
 
@section('header')
    @section('header_dash')
        @section('menu_nav')
            @include("layaouts.plantilla_navbar")
        @endsection
    endsection
@endsection

@if(strcmp($opcion,'send')==0)
    @section("opc2")
        select
    @endsection
@else
    @section("opc3")
        select
    @endsection
@endif

@section("redirect")
    {{ route('select.wallet') }}
@endsection


@section("body")
    @section("content")
        <div id="titulo_trans" class=" col-col-md-12">
            Selecciona tu Wallet
        </div>

        <div class="dash">
            <div class="row">
                @if($isAddressBtc)
                
                <div class="elegir_wallet col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <a class="wallet-select" href=" @yield('redirect') " onclick="event.preventDefault(); document.getElementById('btc-form').submit();">

                    <div class="btn-btc">
                            <img src="{{ asset('/Imagenes/bitlogo.svg') }}" height="50" width="50"/>
                             Bitcoin
                    </div>
                    </a>

                    <form id="btc-form" action="@yield('redirect')" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="wallet" value="btc"/>
                        <input type="hidden" name="opcion" value="<?php echo $opcion; ?>"/> 
                    </form>
                </div>
                @endif
                @if($isAddressLtc)
                <div class="elegir_wallet col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <a class="wallet-select" href=" @yield('redirect') " onclick="event.preventDefault(); document.getElementById('ltc-form').submit();">
                         <div class="btn-ltc">
                            <img src="{{ asset('/Imagenes/litelogo.svg') }}" height="50" width="50"/>Litecoin
                        </div>

                     </a>
                      
                    <form id="ltc-form" action="@yield('redirect')" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="wallet" value="ltc"/>
                        <input type="hidden" name="opcion" value="<?php echo $opcion; ?>"/> 
                    </form>
                </div>
                @endif
                @if($isAddressDoge)
                <div class="elegir_wallet col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <a class="wallet-select" href=" @yield('redirect') " onclick="event.preventDefault(); document.getElementById('doge-form').submit();">
                         <div class="btn-dgc">
                            <img src="{{ asset('/Imagenes/dogelogo.png') }}" height="60" width="60"/>Dogecoin
                        </div>
                    </a>

                    <form id="doge-form" action="@yield('redirect')" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="wallet" value="doge"/>
                        <input type="hidden" name="opcion" value="<?php echo $opcion; ?>"/> 
                    </form>
                </div>
                @endif
            </div>
        </div>
    @endsection
@endsection








