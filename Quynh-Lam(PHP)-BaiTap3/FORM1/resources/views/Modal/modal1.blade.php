<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <h1>Update Contact</h1>
            <form id="formUpdate">
              <input type="hidden" name="id" id="id" value="">
              <div id="form1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject" value="">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Content</label>
                  <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                </div>
              </div>
              <div id="sub">
                <button type="button" class="btn-save btn btn-primary">Submit</button>
              </div>
          </div>
          </form>
        </body>
      </div>
    </div>
  </div>
</div>