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
                        <h4 class="card-title">Product table</h4> 
                        <p class="card-description"> All products are displayed in the table <code>bellow</code> </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="font-weight:bolder"> # </th>
                            <th style="font-weight:bolder"> Photo </th>
                            <th style="font-weight:bolder"> Product name </th>
                            <th style="font-weight:bolder"> Quantity</th>
                            <th style="font-weight:bolder"> Price </th>
                            <th style="font-weight:bolder"> Update On: </th>
                            <th style="font-weight:bolder"> Expired On: </th>
                            <th style="font-weight:bolder"> Actions </th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($data as $data)

                          <tr>
                            <td> {{$data->id}} </td>
                            <td class="py-1">
                              <img src="/product_images/{{$data->product_image}}" alt="image" />
                            </td>
                            <td> {{$data->product_title}} </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $ {{$data->product_price}} </td>
                            <td> {{$data->updated_at}} </td>
                            <td> {{$data->product_expiration}} </td>
                            <td>
                                <a href="{{url('updateprod', $data->id)}}" type="button" class="btn btn-outline-primary btn-icon-text"> Update <i class="mdi mdi-file-check btn-icon-append"></i></a>
                                <a href="{{url('delete_product', $data->id)}}" type="button" class="btn btn-outline-danger btn-icon-text"> Delete <i class="mdi mdi-file-check btn-icon-append"></i></a>
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

     