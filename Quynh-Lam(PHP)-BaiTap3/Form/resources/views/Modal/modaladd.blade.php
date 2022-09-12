<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <body>
          <div id="updateContent">
            <h1>Add Products</h1>
            <form id="formAdd" action="{{route('saveproduct')}}" method="POST">
                @csrf
              <input type="hidden" name="id" id="id" value="">
              <div id="form1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name Product</label>
                  <input type="text" class="form-control" id="name" name="name" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Type Product</label>
                  <input type="text" class="form-control" id="type" name="type" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Price Product </label>
                  <input type="text" class="form-control" id="price" name="price" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Inventory Product</label>
                  <input type="text" class="form-control" id="inventory" name="inventory" value="">
                </div>
                
              </div>
              <div id="sub">
                <button type="submit" class="btn-save btn btn-primary">Submit</button>
              </div>
          </div>
          </form>
        </body>
      </div>
    </div>
  </div>
</div>