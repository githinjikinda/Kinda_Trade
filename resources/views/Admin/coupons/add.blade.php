@extends('layouts.admin')
@section('title')
    {{Helper::webinfo()->site_title}} | {{ trans('labels.coupons') }}
@endsection
@section('css')

@endsection
@section('content')
    <div class="content-wrapper">
        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content-header">{{ trans('labels.add_coupons') }}</div>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            @if(Session::has('danger'))
                            <div class="alert alert-danger">
                                {{ Session::get('danger') }}
                                @php
                                    Session::forget('danger');
                                @endphp
                            </div>
                            @endif
                            <div class="px-3">
                                <form class="form" method="post" action="{{ route('admin.coupons.store') }}" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label for="coupon_name">{{ trans('labels.coupon_name') }}</label>
                                            <input type="text" id="coupon_name" class="form-control" name="coupon_name" placeholder="{{ trans('placeholder.coupon_name') }}">
                                            @error('coupon_name')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="type">{{ trans('labels.type') }}</label>
                                            <select name="type" id="type" class="form-control" onchange="showType(this)">
                                                <option value="">{{ trans('placeholder.select_type') }}</option>
                                                <option value="0">{{ trans('labels.discount_by_percentage') }}</option>
                                                <option value="1">{{ trans('labels.discount_by_amount') }}</option>
                                            </select>
                                            @error('type')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="form-group" id="show_percentage" style="display:none;">
                                            <label for="percentage">{{ trans('labels.percentage') }}</label>
                                            <input type="text" id="percentage" class="form-control" name="percentage" placeholder="{{ trans('placeholder.percentage') }}">
                                            @error('percentage')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="form-group" id="show_amount" style="display:none;">
                                            <label for="amount">{{ trans('labels.amount') }}</label>
                                            <input type="text" id="amount" class="form-control" name="amount" placeholder="{{ trans('placeholder.amount') }}">
                                            @error('amount')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="quantity">{{ trans('labels.quantity') }}</label>
                                            <select name="quantity" id="quantity" class="form-control" onchange="showQuantity(this)">
                                                <option value="">{{ trans('placeholder.select_quantity') }}</option>
                                                <option value="0">{{ trans('labels.unlimited') }}</option>
                                                <option value="1">{{ trans('labels.limited') }}</option>
                                            </select>
                                            @error('quantity')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="form-group" id="show_times" style="display:none;">
                                            <label for="times">{{ trans('labels.value') }}</label>
                                            <input type="text" id="times" class="form-control" name="times" placeholder="{{ trans('placeholder.value') }}">
                                            @error('times')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="start_date">{{ trans('labels.start_date') }}</label>
                                                    <input type="date" id="start_date" class="form-control" name="start_date" placeholder="{{ trans('placeholder.start_date') }}">
                                                    @error('start_date')<span class="text-danger">{{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="end_date">{{ trans('labels.end_date') }}</label>
                                                    <input type="date" id="end_date" class="form-control" name="end_date" placeholder="{{ trans('placeholder.end_date') }}">
                                                    @error('end_date')<span class="text-danger">{{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="min_amount">{{ trans('labels.min_order_amount') }}</label>
                                            <input type="text" id="min_amount" class="form-control" name="min_amount" placeholder="{{ trans('labels.min_order_amount') }}" value="{{old('min_amount')}}">
                                            @error('min_amount')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>

                                    </div>

                                    <div class="form-actions center">
                                        <a href="{{ route('admin.coupons') }}" class="btn btn-raised btn-warning mr-1">
                                            <i class="ft-x"></i> {{ trans('labels.cancel') }}
                                        </a>
                                        @if (env('Environment') == 'sendbox')
                                            <button type="button" class="btn btn-raised btn-primary" onclick="myFunction()"> <i class="fa fa-check-square-o"></i> {{ trans('labels.save') }}</button>
                                        @else
                                            <button type="submit" id="btn_add_category" class="btn btn-raised btn-primary"> <i class="fa fa-check-square-o"></i> {{ trans('labels.save') }}</button>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripttop')
@endsection
@section('script')
<script type="text/javascript">
    function showType(select){
       if(select.value==0){
        document.getElementById('show_percentage').style.display = "block";
        document.getElementById('show_amount').style.display = "none";
       } else{
        document.getElementById('show_percentage').style.display = "none";
        document.getElementById('show_amount').style.display = "block";
       }
    };

    function showQuantity(select){
       if(select.value==1){
        document.getElementById('show_times').style.display = "block";
       } else{
        document.getElementById('show_times').style.display = "none";
       }
    };
</script>
@endsection