@extends('layouts.app')

@section('content')

<link href='https://fonts.googleapis.com/css?family=Athiti' rel='stylesheet'>

<div id="modal-container" class="container">
    <h2>Add new project</h2>
    <!-- Trigger the modal with a button -->
    <button id="add-new-project" type="button" class="btn btn-info btn-lg" data-toggle="modal"
            data-target="#newProject">Add New
    </button>

    <!-- Modal -->
    <div class="modal fade" id="newProject" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New project</h4>
                </div>
                <div class="modal-body">
                    <p><i>Please fill all fields and upload picture</i></p>
                    <form id="add-new-project-form" class="form-horisontal" role="form" enctype="multipart/form-data"
                          action="{{route('projects.store')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name"
                                   placeholder="Enter project name" name="name">
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label for="description">Price</label>--}}
                            {{--<input type="number" class="form-control" id="project"--}}
                                   {{--placeholder="project's price" name="price">--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="description">project picture</label>--}}
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
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container latest-project-section">
    <div class="row text-center margin-b-40">
        <div class="col-sm-6 col-sm-offset-3">
            <h2>Latest projects</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
        </div>
    </div>
    <!--// end row -->

    <div class="row">
        <!-- Latest projects -->
        <div class="col-sm-4 sm-margin-b-50">
            <div class="margin-b-20">
                <img class="img-responsive" src="https://images.pexels.com/photos/288477/pexels-photo-288477.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Latest projects Image">
            </div>
            <h4><a href="#">Workspace</a> <span class="text-uppercase margin-l-20">Management</span></h4>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
            <a class="link" href="#">Read More</a>
        </div>
        <!-- End Latest projects -->

        <!-- Latest projects -->
        <div class="col-sm-4 sm-margin-b-50">
            <div class="margin-b-20">
                <img class="img-responsive" src="https://images.pexels.com/photos/288477/pexels-photo-288477.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Latest projects Image">
            </div>
            <h4><a href="#">Minimalism</a> <span class="text-uppercase margin-l-20">Developmeny</span></h4>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
            <a class="link" href="#">Read More</a>
        </div>
        <!-- End Latest projects -->

        <!-- Latest projects -->
        <div class="col-sm-4 sm-margin-b-50">
            <div class="margin-b-20">
                <img class="img-responsive" src="https://images.pexels.com/photos/288477/pexels-photo-288477.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Latest projects Image">
            </div>
            <h4><a href="#">Cleant Style</a> <span class="text-uppercase margin-l-20">Design</span></h4>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
            <a class="link" href="#">Read More</a>
        </div>
        <!-- End Latest projects -->
    </div>
    <!--// end row -->
</div>
@endsection