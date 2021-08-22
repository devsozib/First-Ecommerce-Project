
<div class="container" style="padding:30px 0;">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                           All Slides
                              </div>
                              <div class="col-md-6">

                                  <a href="{{route('add.slider')}}" class="btn btn-success pull-right">Add New Slide</a>
                              </div>
                    </div>

                </div>
                <div class="panel-body">
@if (Session::has('message'))
<div class="alert alert-danger">{{Session::get('message')}}</div>

@endif
                    <table class="table table-striped">

                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Price</th>
                                <th>Link</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slide)


                            <tr>
                                <td>{{$slide->id}}</td>
                                <td><img src="{{asset('frontend')}}/assets/images/sliders/{{$slide->image}}" width="50px" alt=""></td>
                                <td>{{$slide->title}}</td>
                                <td>{{$slide->subtitle}}</td>
                                <td>{{$slide->price}}</td>
                                <td>{{$slide->link}}</td>
                                <td>{{$slide->status ==1? 'Active':'Inactive'}}</td>
                                <td>{{$slide->created_at}}</td>
                                <td><a href="{{route('edit.slider',['slider_id'=>$slide->id])}}">

                                    <i  class="fa fa-edit fa-2x" ></i>
                                    </a>

                                  <a href="#" >
                                    <i  class="fa fa-times text-danger fa-2x" wire:click.prevent="deleteSlider('{{$slide->id}}')"></i>
                                  </a>

                                    </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

