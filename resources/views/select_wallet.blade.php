<?php
$isAddressBtc = App\AddressBtc::exists(Auth::user()->id);
$isAddressLtc = App\AddressLtc::exists(Auth::user()->id);
$isAddressDoge=App\AddressDoge::exists(Auth::user()->id);
?>

@extends("layaouts.contenido_dashboard")

@section("title")
    Wallet
@endsection

@section("header")
@endsection

<?php if(strcmp($opcion,'send')==0){ ?>
    @section("opc2")
        select
    @endsection
<?php } else {?>
    @section("opc3")
        select
    @endsection
<?php } ?>

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
                <?php if($isAddressBtc){ ?>
                <div class="div_vent_dash col-xs-12 col-sm-4 col-md-4 col-lg-3">
                    <a class="wallet-select" href=" @yield('redirect') " onclick="event.preventDefault(); document.getElementById('btc-form').submit();">
                        <div class="div_btc_titulo">
                            Bitcoin
                        </div>
                        <div class="div_btc_body" id="r_btc">
                            <p>$<?php //echo $precio; ?></p>
                            <img src="{{ asset('/Imagenes/bitcoin.png') }}" height="50" width="50"/>
                        </div>
                    </a>

                    <form id="btc-form" action="@yield('redirect')" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="wallet" value="btc"/>
                        <input type="hidden" name="opcion" value="<?php echo $opcion; ?>"/> 
                    </form>
                </div>
                <?php } if($isAddressLtc){ ?>
                <div class="div_vent_dash col-xs-12 col-sm-4 col-md-4 col-lg-3">
                    <a class="wallet-select" href=" @yield('redirect') " onclick="event.preventDefault(); document.getElementById('ltc-form').submit();">
                        <div class="div_eth_titulo">
                            Litecoin
                        </div>
                        <div class="div_btc_body" id="r_btc">
                            <p>$<?php //echo $precio; ?></p>
                            <img src="{{ asset('/Imagenes/bitcoin.png') }}" height="50" width="50"/>
                        </div>
                    </a>

                    <form id="ltc-form" action="@yield('redirect')" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="wallet" value="ltc"/>
                        <input type="hidden" name="opcion" value="<?php echo $opcion; ?>"/> 
                    </form>
                </div>
                <?php } if($isAddressDoge){ ?>
                <div class="div_vent_dash col-xs-12 col-sm-4 col-md-4 col-lg-3">
                    <a class="wallet-select" href=" @yield('redirect') " onclick="event.preventDefault(); document.getElementById('doge-form').submit();">
                        <div class="div_trans_titulo">
                            Dogecoin
                        </div>
                        <div class="div_btc_body" id="r_btc">
                            <p>$<?php //echo $precio; ?></p>
                            <img src="{{ asset('/Imagenes/bitcoin.png') }}" height="50" width="50"/>
                        </div>
                    </a>

                    <form id="doge-form" action="@yield('redirect')" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="wallet" value="doge"/>
                        <input type="hidden" name="opcion" value="<?php echo $opcion; ?>"/> 
                    </form>
                </div>
                <?php } ?>
            </div>
        </div>
    @endsection
@endsection








