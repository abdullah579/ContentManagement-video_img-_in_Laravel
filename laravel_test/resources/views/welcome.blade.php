@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-md-8">
            <h4>Section 1</h4>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/dummy_img/beautiful_scenery.jpg" alt="image" width="350px" height="200px">
                    <i class="fa fa-youtube-play" style="font-size: 26px;margin-top: 177px;margin-left: -27px;position: absolute;color: antiquewhite;"></i>
                    <h6 style="padding-top: 5px;">Title</h6>
                    <p>Description</p>
                </div>
                <div class="col-md-3">
                    <img src="images/dummy_img/blue-mountains.jpg" alt="image" width="150px" height="85px">
                    <h6 style="padding-top: 5px;">Title</h6>
                    <img src="images/dummy_img/beautiful_scenery.jpg" alt="image" width="150px" height="85px">
                    <h6 style="padding-top: 5px;">Title</h6>
                </div>
                <div class="col-md-3">
                    <img src="images/dummy_img/blue-mountains.jpg" alt="image" width="150px" height="85px">
                    <h6 style="padding-top: 5px;">Title</h6>
                    <img src="images/dummy_img/beautiful_scenery.jpg" alt="image" width="150px" height="85px">
                    <h6 style="padding-top: 5px;">Title</h6>
                </div>
            </div>                        
        </div>
        
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-1">
                    <div style="border-left: 1px solid green; height: 600px;"></div>
                </div>
                <div class="col-md-11">
                <h4>Section 2</h4>
                    <img src="images/dummy_img/blue-mountains.jpg" alt="image" width="350px" height="200px">
                    <h6 style="padding-top: 5px;">Title</h6>
                    <p>Description</p>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/dummy_img/blue-mountains.jpg" alt="image" width="150px" height="85px">
                            <h6 style="padding-top: 5px;">Title</h6>
                        </div>
                        <div class="col-md-6">
                            <img src="images/dummy_img/beautiful_scenery.jpg" alt="image" width="150px" height="85px">
                            <h6 style="padding-top: 5px;">Title</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/dummy_img/blue-mountains.jpg" alt="image" width="150px" height="85px">
                            <h6 style="padding-top: 5px;">Title</h6>
                        </div>
                        <div class="col-md-6">
                            <img src="images/dummy_img/beautiful_scenery.jpg" alt="image" width="150px" height="85px">
                            <h6 style="padding-top: 5px;">Title</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
