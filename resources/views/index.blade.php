@extends('layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back!</h2>
						  <p class="mg-b-0">SAMA BAHREAIN CARD DASHBOARD .</p>
						</div>
					</div>
                    <div class="d-flex my-xl-auto right-content">
                        @can('add card')
                        <div class="pr-1 mb-3 mb-xl-0">
                            <a class="  btn btn-primary-gradient btn-block" href="{{ route('add_cards') }}" title="card register" ><i class="fas fa-user-plus"></i> Card Register</a>
                        </div>
                        @endcan
                        @can('add-hospital')

                        <div class="pr-1 mb-3 mb-xl-0">
                            <a class="  btn btn-danger-gradient btn-block" href="{{ route('show') }}" title="hospital register" ><i class="fas fa-hospital"></i> Provider Register</a>
                        </div>
                            @endcan
                    </div>
                    </div>
				<!-- /breadcrumb -->
@endsection
@section('content')
@can('home')
				<!-- row -->
				<div class="row row-sm" >
					<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
                            <a href="">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
                                    <a href="/show_cards">
									<h6 class="mb-3 tx-12 text-white">All Created Cards</h6>
                                    </a>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Card::count()}}</h4>
											<p class="mb-0 tx-12 text-white op-7">Total of sum all cards</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7">
                                                {{number_format(\App\Card::sum('price'),2)}}
                                            </span>
										</span>
									</div>
								</div>
							</div>
                            </a>

						</div>
					</div>

					<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
                                    <a href="{{route('show_cards_draft','draft')}}"><h6 class="mb-3 tx-12 text-white">Total Draft Cards</h6></a>

                                </div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Card::where('status','draft')->count()}}</h4>
											<p class="mb-0 tx-12 text-white op-7">Total of sum all draft cards</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7"> {{number_format(\App\Card::where('status','draft')->sum('price'),2)}}</span>
										</span>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-purple-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
                                    <a href="{{route('show_cards_draft','pending')}}">
									<h6 class="mb-3 tx-12 text-white">Total Pending Cards</h6>
                                    </a>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Card::where('status','pending')->count()}}</h4>
											<p class="mb-0 tx-12 text-white op-7">Total of sum all pending cards</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7">{{number_format(\App\Card::where('status','pending')->sum('price'),2)}}</span>
										</span>
									</div>
								</div>
							</div>

						</div>
					</div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                        <div class="card overflow-hidden sales-card bg-warning-gradient">
                            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                                <div class="">
                                    <a href="{{route('show_cards_draft','done')}}">
                                    <h6 class="mb-3 tx-12 text-white">Total Done Cards</h6>
                                    </a>
                                </div>
                                <div class="pb-0 mt-0">
                                    <div class="d-flex">
                                        <div class="">
                                            <h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Card::where('status','done')->count()}}</h4>
                                            <p class="mb-0 tx-12 text-white op-7">Total of sum all done cards</p>
                                        </div>
                                        <span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7"> {{number_format(\App\Card::where('status','done')->sum('price'),2)}}</span>
										</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                        <div class="card overflow-hidden sales-card bg-purple-gradient">
                            <a href="">
                                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                                    <div class="">
                                        <a href="{{route('show_cards_draft','paid')}}">

                                        <h6 class="mb-3 tx-12 text-white">Total Paid Cards</h6>
                                        </a>
                                    </div>
                                    <div class="pb-0 mt-0">
                                        <div class="d-flex">
                                            <div class="">
                                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Card::where('status','paid')->count()}}</h4>
                                                <p class="mb-0 tx-12 text-white op-7">Total of sum all paid cards</p>
                                            </div>
                                            <span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7">
                                                {{number_format(\App\Card::where('status','paid')->sum('price'),2)}}
                                            </span>
										</span>

                                        </div>
                                    </div>

                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                        <div class="card overflow-hidden sales-card bg-primary-gradient">
                            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                                <div class="">
                                    <a href="{{route('show_cards_draft','expired')}}">

                                    <h6 class="mb-3 tx-12 text-white">Total Renewal Cards</h6>
                                    </a>
                                </div>
                                <div class="pb-0 mt-0">
                                    <div class="d-flex">
                                        <div class="">
                                            <h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Card::where('status','expired')->count()}}</h4>
                                            <p class="mb-0 tx-12 text-white op-7">Total of sum all pending cards</p>
                                        </div>
                                        <span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7">{{number_format(\App\Card::where('status','expired')->sum('price'),2)}}</span>
										</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
				</div>
				<!-- row closed -->

                <!-- row 2 -->
				<div class="row row-sm">

                    <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                        <div class="card overflow-hidden sales-card bg-success-gradient">
                            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                                <div class="">
                                    <h6 class="mb-3 tx-12 text-white">Total Today Sales Cards</h6>

                                </div>
                                <div class="pb-0 mt-0">
                                    <div class="d-flex">
                                        <div class="">
                                            <h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Card::where([['date',date('Y-m-d')],['status','done']])->count() + \ App\Card::where([['date',date('Y-m-d')],['status','paid']])->count()}}</h4>
                                            <p class="mb-0 tx-12 text-white op-7">Total of sum today sales cards</p>
                                        </div>
                                        <span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7"> {{number_format(\App\Card::where([['date',date('Y-m-d')],['status','paid']])->sum('price'),2) + number_format(\App\Card::where([['date',date('Y-m-d')],['status','done']])->sum('price'),2)}}</span>
										</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                        <div class="card overflow-hidden sales-card bg-danger-gradient">
                            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                                <div class="">
                                    <a href="{{route('show_cards_draft',1)}}">

                                    <h6 class="mb-3 tx-12 text-white">Total Online Cards</h6>
                                    </a>
                                </div>
                                <div class="pb-0 mt-0">
                                    <div class="d-flex">
                                        <div class="">
                                            <h4 class="tx-20 font-weight-bold mb-1 text-white">{{\ App\Card::where('online',1)->count()}}</h4>
                                            <p class="mb-0 tx-12 text-white op-7">Total of sum online cards</p>
                                        </div>
                                        <span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7"> {{number_format(\App\Card::where('online',1)->sum('price'),2)}}</span>
										</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
				</div>
				<!-- row closed -->
                @endcan

			</div>
		</div>
		<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>
@endsection
