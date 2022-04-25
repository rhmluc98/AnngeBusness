<x-app-layout>
    
</x-app-layout>

     @include("admin.adminHeader")

    <div class="container-scroller">
       @include("admin.sidenavbar")
        <div class="main-panel">
             <div class="content-wrapper">
             
              <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add new product</h4>
                      <p class="card-description"> This is the form to insert new product </p>
                      <form action="{{url('/uploadproduct')}}" method="post" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputName1">Product title</label>
                          <input type="text" name="prod_title" class="form-control" id="exampleInputName1" placeholder="Title">
                        </div>
                        <div class="form-group">
                          <label>Product image</label>
                          <div class="input-group">
                            <input type="file" name="prod_image" class="form-control" placeholder="Upload Image">
                          </div>
                        </div>
                        <div class="form-group">
                        <label>Product price</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">$</span>
                          </div>
                          <input type="text" name="prod_price" class="form-control" aria-label="Amount (to the nearest dollar)">
                          <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Product quantity</label>
                        <input type="number" name="prod_qty" class="form-control" id="exampleInputName1" placeholder="Quantity">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Exp date</label>
                        <input type="date" name="date_exp" class="form-control" placeholder=""/>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Product description</label>
                        <textarea name="prod_desc" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Save</button>
                      <a href="{{url('/redirects')}}" class="btn btn-dark">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
              

             </div>
            @include("admin.adminFooter")
        </div>
    </div>