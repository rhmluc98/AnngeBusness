<x-app-layout>
    
</x-app-layout>

     <base href="/public">
     @include("admin.adminHeader")
  
     
    <div class="container-scroller">
       @include("admin.sidenavbar")
        <div class="main-panel">
             <div class="content-wrapper">
             
              <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Update product ({{$data->product_title}})</h4>
                      <p class="card-description"> This is the form to update quantity of product in stock</p>

                      <form action="{{url('/apdateproduct', $data->id)}}" method="post" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group">
                             <label for="exampleInputName1">Product quantity</label>
                             <input type="number" name="update_prod_qty" value="{{$data->product_qty}}" class="form-control" id="exampleInputName1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Product new price</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-white">$</span>
                            </div>
                            <input type="number" name="update_prod_price" value="{{$data->product_price}}" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Expired On:</label>
                        <input type="date" name="update_date_exp" value="{{$data->product_expiration}}" class="form-control" placeholder=""/>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Save</button>
                      <a href="{{url('/products')}}" class="btn btn-dark">Cancel</a>
                    </form>

                  </div>
                </div>
              </div>
              

             </div>
            @include("admin.adminFooter")
        </div>
    </div>