@extends('layouts.app')

@section('content')

<link href='https://fonts.googleapis.com/css?family=Athiti' rel='stylesheet'>

<div id="modal-container" class="container">
    <h2>Add new company</h2>
    <!-- Trigger the modal with a button -->
    <button id="add-new-company" type="button" class="btn btn-info btn-lg" data-toggle="modal"
            data-target="#newCompany">Add New
    </button>

    <!-- Modal -->
    <div class="modal fade" id="newCompany" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New company</h4>
                </div>
                <div class="modal-body">
                    <p><i>Please fill all fields and upload picture</i></p>
                    <form id="add-new-company-form" class="form-horisontal" role="form" enctype="multipart/form-data"
                          action="{{route('companies.store')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name"
                                   placeholder="Enter company name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="description">Price</label>
                            <input type="number" class="form-control" id="company"
                                   placeholder="company's price" name="price">
                        </div>
                        <div class="form-group">
                            <label for="description">company picture</label>
                            <div class="input-group input-file" name="prod_pic_upload">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default btn-choose" type="button">Choose</button>
                                            </span>
                                <input type="text" class="form-control" placeholder='Choose a file...'/>
                                <span class="input-group-btn">
       			                                 <button class="btn btn-warning btn-reset" type="button">Reset</button>
    		                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container latest-company-section">
    <div class="row text-center margin-b-40">
        <div class="col-sm-6 col-sm-offset-3">
            <h2>Latest companys</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
        </div>
    </div>
    <!--// end row -->
    @if($companies)
            <div class="row">
            @foreach($companies as $company)
                <!-- Latest companys -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <img class="img-responsive" src="https://images.pexels.com/photos/288477/pexels-photo-288477.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Latest companys Image">
                    </div>
                    <h4><a href="{{route('companies.show', $company->id) }}">{{$company->name}}</a> <span class="text-uppercase margin-l-20"></span></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                    <a class="link" href="#">Read More</a>
                </div>
                <!-- End Latest companys -->
                @endforeach
            </div>
    <!--// end row -->
    @endif

    <!--// end row -->
</div>
@endsection

{{--@extends('layouts.app')--}}

{{--@section('content')--}}



    {{--<div class="container-fluid text-center">--}}
        {{--<div id="modal-container" class="container">--}}
            {{--<h2>Add new company</h2>--}}
            {{--<!-- Trigger the modal with a button -->--}}
            {{--<button id="add-new-company" type="button" class="btn btn-info btn-lg" data-toggle="modal"--}}
                    {{--data-target="#newCompany">Add New--}}
            {{--</button>--}}

            {{--<!-- Modal -->--}}
            {{--<div class="modal fade" id="newCompany" role="dialog">--}}
                {{--<div class="modal-dialog modal-lg">--}}
                    {{--<div class="modal-content">--}}
                        {{--<div class="modal-header">--}}
                            {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                            {{--<h4 class="modal-title">New company</h4>--}}
                        {{--</div>--}}
                        {{--<div class="modal-body">--}}
                            {{--<p><i>Please fill all fields and upload picture</i></p>--}}
                            {{--<form id="add-new-company-form" class="form-horisontal" role="form" enctype="multipart/form-data"--}}
                                  {{--action="{{route('companies.store')}}" method="post">--}}
                                {{--{{ csrf_field() }}--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="name">Name:</label>--}}
                                    {{--<input type="text" class="form-control" id="name"--}}
                                           {{--placeholder="Enter company name" name="name">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="description">Price</label>--}}
                                    {{--<input type="number" class="form-control" id="company"--}}
                                           {{--placeholder="company's price" name="price">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="description">company picture</label>--}}
                                    {{--<div class="input-group input-file" name="prod_pic_upload">--}}
                                            {{--<span class="input-group-btn">--}}
                                                {{--<button class="btn btn-default btn-choose" type="button">Choose</button>--}}
                                            {{--</span>--}}
                                        {{--<input type="text" class="form-control" placeholder='Choose a file...'/>--}}
                                        {{--<span class="input-group-btn">--}}
       			                                 {{--<button class="btn btn-warning btn-reset" type="button">Reset</button>--}}
    		                                {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<button type="submit" class="btn btn-default">Submit</button>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row content">--}}
            {{--<div class="col-sm-12 text-center">--}}
                {{--<div class="layout">--}}
                    {{--<section class="inner">--}}
                        {{--<ul class="grid">--}}
                            {{--@if($companies)--}}
                            {{--@foreach($companies as $company)--}}
                                {{--<li class="grid-tile">--}}
                                    {{--<div class="item">--}}
                                        {{--<div class="item-img" style="background-image: url({{ URL::asset('companys_images/'.$company->picture) }}); background-size: 50% 50%;"></div>--}}
                                        {{--<div class="item-pnl">--}}
                                            {{--<div class="pnl-wrapper">--}}
                                                {{--<div class="pnl-description">--}}
                                                    {{--<span class="pnl-label">{{$company->name}}</span>--}}
                                                    {{--<span class="pnl-price">$00</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="pnl-favorites">--}}
                                                    {{--<div class="pnl-ic-wrapper">--}}
                                                        {{--<a href="#"><span class="pnl-ic"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve"><g><path d="M25.4,29H6.6c-1.7,0-3-1.4-2.8-2.9l1.9-13.8C5.9,11,6.6,10,8,10h16c1.4,0,2.1,1,2.3,2.3l1.9,13.8 C28.4,27.6,27.1,29,25.4,29z"></path><path d="M10.6,12.7V8.4C10.6,5.4,13,3,16,3h0c3,0,5.4,2.4,5.4,5.4v4.3"></path></g></svg></span></a>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="pnl-tocart">--}}
                                                    {{--<div class="pnl-ic-wrapper" data-company="{{$company}}">--}}
                                                        {{--<a href="#" class="add-to-cart"><span class="pnl-ic"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve"><g><path d="M25.4,29H6.6c-1.7,0-3-1.4-2.8-2.9l1.9-13.8C5.9,11,6.6,10,8,10h16c1.4,0,2.1,1,2.3,2.3l1.9,13.8 C28.4,27.6,27.1,29,25.4,29z"></path><path d="M10.6,12.7V8.4C10.6,5.4,13,3,16,3h0c3,0,5.4,2.4,5.4,5.4v4.3"></path></g></svg></span></a>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--@endforeach--}}
                            {{--@endif--}}
                        {{--</ul>--}}
                    {{--</section>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}

