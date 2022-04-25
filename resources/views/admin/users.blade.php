<x-app-layout>
    
</x-app-layout>

     @include("admin.adminHeader")

    <div class="container-scroller">

       @include("admin.sidenavbar")

        <div class="main-panel">
          <div class="content-wrapper">
             <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All users registered</h4>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="font-weight:bolder"> # </th>
                            <th style="font-weight:bolder"> First name </th>
                            <th style="font-weight:bolder"> Email or Phone number </th>
                            <th style="font-weight:bolder"> Roll </th>
                            <th style="font-weight:bolder"> Registered on: </th>
                            <th style="font-weight:bolder">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($data as $data)
                          <tr>
                            <td> {{$data->id}} </td>
                            <td> {{$data->name}} </td>
                            <td> {{$data->email}} </td>
                            <td> 
                                @if($data->usertype == 1)
                                  {{'Admin'}}
                                @else
                                  {{'Client'}}
                                @endif
                            </td>
                            <td>{{$data->created_at}}</td>
                            <td>
                               @if($data->usertype == 1)
                               <a type="button" class="btn btn-outline-secondary btn-fw">No action</a>
                               @else
                                 <a type="button" href="{{url('/delete_user', $data->id)}}" class="btn btn-outline-danger btn-fw">Delete</a>
                               @endif

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
            @include("admin.adminFooter")
            </div>

    </div>

     