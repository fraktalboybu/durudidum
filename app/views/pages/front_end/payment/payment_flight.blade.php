@extends('layouts.front_end.book_layout')
@section('content')


<section>
    <div class="container">
        <div class="row-fluid" style="padding-top:20px;">

            timeline
        </div>

    </div>
    <div class="container">
        <div class="row-fluid" style="padding-top:20px;">

            <h1>Pembayaran</h1>
            <div class="alert alert-success" role="alert">Mohon selesaikan pembayaran untuk menghindari pembatalan oleh maskapai.</div>
            <div class="col-md-8" >
                <div class="row">
                    <h3>Pilihlah Metode Pembayaran:</h3>

                    <div class="col-md-12">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                Paypal
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                Other
                            </label>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="priceSummaryContainer">
                            <h2>Rincian Harga</h2>
                            <table class="priceSummaryTable">
                                <tbody><tr>
                                        <td>Citilink (Dewasa) <span class="noPass">x1</span>:</td>
                                        <td><strong>Rp</strong></td>
                                        <td class="priceContent hargaDewasa"><strong>646.700</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Bagasi CGK - DPS:</td>
                                        <td><strong>Rp</strong></td>
                                        <td class="priceContent"><strong>0</strong></td>
                                    </tr>
                                    <tr style="display: none;" id="totalBaggageFeeContainer">
                                        <td>Harga Bagasi:</td>
                                        <td><strong>Rp</strong></td>
                                        <td class="priceContent" id="totalBaggageFee">0</td>
                                    </tr>
                                    <tr style="display: none;" id="transitServicePriceDetail">
                                        <td>Transit Service:</td>
                                        <td><strong>Rp</strong></td>
                                        <td class="priceContent" id="totalTransitServiceFee">0</td>
                                    </tr>
                                    <tr>
                                        <td class="paymentFeelabel">Convenience Fee:</td>
                                        <td><strong>Rp</strong></td>
                                        <td class="priceContent paymentFee"><strong>-965</strong></td>
                                    </tr>
                                </tbody></table>
                            <table class="priceTotalTable">
                                <tbody><tr>
                                        <td class="grandTotalLabel">Total:
                                        </td>
                                        <td class="grandTotal priceContent">Rp 645.735</td>
                                    </tr>
                                </tbody></table>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div id="paymentSubmitCntr">
                            <div id="via_TRANSFER_submit" class="paymentSubmitItem">
                                <span class="subtitle">Klik "Bayar Melalui Transfer" jika Anda benar memilih pembayaran via Transfer. Lakukan transfer sebelum batas waktu.</span>
                                <div class="termsAgreeText">Dengan klik tombol "Bayar", Anda telah setuju dengan <a target="_blank" href="#">Syarat &amp; Ketentuan</a> dan <a target="_blank" href="#">Kebijakan Privasi</a>.</div>
                                <button id="payNowTransferBtn" class="btn btn-danger">Bayar</button>
                            </div>


                        </div>

                    </div>
                </div>
            </div>




            <div class="col-md-4">

                <div id="right-review">
                    <div class="clearfix paymentGreyContainer">
                        <div class="paymentText">No. Pesanan</div>
                        <div class="paymentBookingId">35229138</div>
                    </div>
                    <div id="bookingRouteWidget">
                        <h2>Rincian Perjalanan</h2>
                        <h3>Citilink</h3>
                        <ul class="flightSegment">
                            <li><span class="tvItalic">Jakarta</span> ke <span class="tvItalic">Bali / Denpasar</span></li>
                            <li>
                                <ul class="flightSegmentDetails">
                                    <li>Selasa, 25 Nov 2014 [16:40 - 19:30]</li>
                                </ul>
                            </li>
                            
                        </ul>
                        <h2>Daftar Penumpang</h2>
                        <ul class="passSummaryList">
                            <li>
                                Mrs. tasvdhjawkd absdamw (dewasa)
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>

    </div>


    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-12">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>
</section>
@stop