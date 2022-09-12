<div class="modal fade" id="updateproductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <h1>Update Product</h1>
            <form id="formUpdateproduct">
              <input type="hidden" name="id" id="id" value="">
              <div id="form1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Type</label>
                  <input type="text" class="form-control" id="type" name="type" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Price</label>
                  <input type="text" class="form-control" id="price" name="price" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Inventory</label>
                  <input type="text" class="form-control" id="inventory" name="inventory" value="">
                </div>
                
              </div>
              <div id="sub">
                <button type="submit" class="btn-update btn btn-primary">Submit</button>
              </div>
          </div>
          </form>
        </body>
      </div>
    </div>
  </div>
</div>