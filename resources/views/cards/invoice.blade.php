@extends('layouts.master')
@section('css')
    <style>
        @media print {
            #print_Button {
                display: none;
            }
        }
    </style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Profile</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Invoice</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-12 col-xl-12">
						<div class=" main-content-body-invoice" id="print">
							<div class="card card-invoice">
								<div class="card-body">
									<div class="invoice-header">
                                        <h2 class="invoice-title text-center"></h2>
										<div class="billed-from">
											<p><h2 class="invoice-title text-center">SAMA <br/><i style="font-size: 18px;">BAHRAIN CARD</i></h2></p>
										</div><!-- billed-from -->
									</div><!-- invoice-header -->
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
									<div class="row mg-t-20">
										<div class="col-md">
											<label class="tx-gray-600">Billed To</label>
											<div class="billed-to" >
												<h4>{{$invoice->name}}</h4>
												<p style="font-size: 15px">{{$invoice->house}} House, {{$invoice->road}} Road, {{$invoice->block}} Block, {{$invoice->place}} Place<br>
                                                    Mobile: {{$invoice->mobile}}<br>
                                                    Phone: {{$invoice->phone}}<br>
												Email: {{$invoice->email}}<br></p>
											</div>
										</div>
										<div class="col-md">
											<label class="tx-gray-600">Invoice Information</label>
											<p class="invoice-info-row"><span>Invoice ID</span> <span><script>document.write((Math.random() + 1).toString(36).substring(2));</script></span></p>
                                            <p class="invoice-info-row"><span class="tx-uppercase tx-bold" style="font-size: 20px">Issue Date:</span> <span style="font-size: 18px" class="tx-uppercase tx-bold">{{$invoice->date}}</span></p>
                                            <br/>
                                           <b> <p class="invoice-info-row" style="text-decoration: underline; text-decoration-style: wavy;font-size: 16px"><span style="font-size: 20px">Balance Due:</span> <span style="font-size: 25px">{{$invoice->balance}} BD</span></p></b>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>

                                    <div class="table-responsive mg-t-40">
										<table class="table table-invoice border text-md-nowrap mb-0">
											<thead>
												<tr>
													<th class="wd-20p">Type</th>
													<th class="wd-20p">Policy No.</th>
													<th class="tx-center">QNTY</th>
													<th class="tx-right">Unit Price</th>
												</tr>
											</thead>
											<tbody>

                                                @if(isset($invoice1))
                                                    @foreach($invoice1 as $invoice1)
												<tr>
                                                    <td>{{$invoice1->Type->name ?? ' '}}</td>
                                                    <td class="tx-12">SHC222{{$invoice1->id}}</td>
                                                    <td class="tx-center">1</td>
                                                    <td class="tx-right">{{$invoice1->Package->package_prices}} BD</td>
                                                </tr>
                                                    @endforeach
                                                @elseif(isset($invoice))


                                                        <tr>
                                                            <td>{{$invoice->Type->name ?? ' '}}</td>
                                                            <td class="tx-12">SHC222{{$invoice->id}}</td>
                                                            <td class="tx-center">1</td>
                                                            <td class="tx-right">{{$invoice->price}} BD</td>
                                                        </tr>

                                                @else

                                                @endif


											</tbody>
										</table>
									</div>

                                    <div class="table-responsive mg-t-40">
										<table class="table table-invoice border text-md-nowrap mb-0">
											<thead>
												<tr>
													<th class="wd-20p" style="font-weight: bold;font-size: 20px;color: black">Delivery</th>
													<th class="wd-20p tx-dark" style="font-weight: bold;font-size: 20px;color: black">Total</th>
													<th class="wd-20p" style="font-weight: bold;font-size: 20px;color: black">Balance</th>

												</tr>
											</thead>
											<tbody>
												<tr>

                                                    <td class="tx-bold" style="font-weight: bold;font-size: 19px;color: black;text-decoration: underline;text-decoration-style:solid;text-decoration-thickness:0.2em;  "><b>{{$invoice->delivery  ?? ' '}} BD</b></td>
                                                    @if(isset($invoice1))
													<td class="" style="font-weight: bold;font-size: 19px;color: black;text-decoration: underline;text-decoration-style:solid;text-decoration-thickness:0.2em;  ">{{$invoice->total}} BD</td>
                                                    @else
                                                        <td class="" style="font-weight: bold;font-size: 19px;color: black;text-decoration: underline;text-decoration-style:solid;text-decoration-thickness:0.2em;  ">{{$invoice->price + $invoice->delivery ?? ' '}}  BD</td>

                                                    @endif
													<td class="" style="font-weight: bold;font-size: 19px;color: black;text-decoration: underline;text-decoration-style:solid;text-decoration-thickness:0.2em;  ">{{$invoice->balance}} BD</td>

												</tr>
											</tbody>
										</table>
									</div>

                                    <button class="btn btn-outline-info float-right mt-3 mr-2" style="color: black">
                                        <b style="font-size: 21px" class="tx-uppercase">
                                        Payment Method : {{$invoice->payment_method}}
                                        </b>
                                    </button>
                                    <br/>
									<hr class="mg-b-40">
                                    <button onclick="printDiv();" id="print_Button" class="btn btn-danger float-left mt-3 mr-2">
                                        <i class="mdi mdi-printer ml-1"></i>Print
                                    </button>
                                    <a href="{{route('single_invoice_pdf',$invoice->id)}}">
                                    <button  id="print_Button" class="btn btn-primary float-left mt-3 mr-2">
                                        Send To Email
                                    </button>
                                    </a>

                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <div class="card-footer row">
                                        <p> <b>I have received the cards from SAMA BAHRAIN CARD</b> <i class="fas fa-question"></i><br/><br/>
                                            <b>-----------------------</b>
                                        </p>
                                    </div>
								</div>

							</div>
						</div>
					</div><!-- COL-END -->
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<script>
    function printDiv(print) {
        var printContents = document.getElementById('print').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
        location.reload();

    }
</script>
@endsection
