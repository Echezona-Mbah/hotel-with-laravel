@include('admin.head')
@include('admin.sidebar')



<div class="nk-content">
    <div class="container-fluid">
      <div class="nk-content-inner">
        <div class="nk-content-body">
          <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
              <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Add Booking</h3>
              </div>
            </div>
          </div>
          @if(Session::has('success'))
          <div class="alert alert-success text-center">
              {{Session::get('success')}}
          </div>
      @endif
         <form method="POST" action="addRoom" enctype="multipart/form-data">
            @csrf
          <div class="nk-block">
            <div class="card card-bordered">
              <div class="card-inner">
                <div class="row gy-4">



                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="form-group">
                      <label class="form-label">Upload Photo</label>
                      <div class="form-control-wrap">
                        <div class="form-file">
                          <input name="images" type="file"multiple class="form-file-input" id="customFile"/>
                          <label class="form-file-label">Choose file</label
                          >
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="form-group">
                      <label class="form-label">Select Room Type</label>
                      <div class="form-control-wrap">
                        <select class="form-select js-select2" name="room">
                          <option value="default_option">
                            Select Room Type
                          </option>
                          <option >
                            Delux
                          </option>
                          <option>
                            Super Delux
                          </option>
                          <option >
                            Single
                          </option>
                          <option>
                            Double
                          </option>
                          <option>
                            classic suite
                          </option>
                          <option>
                            premium suite
                          </option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="form-group">
                      <label class="form-label">Amount</label>
                      <div class="form-control-wrap">
                        <div class="form">
                          <input name="amount" type="amount"multiple class="" id="amount"/>
                          <label class="">Amount</label
                          >
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label" for="default-textarea">Note</label>
                      <div class="form-control-wrap">
                        <textarea  name="description"
                          class="form-control no-resize"
                          id="default-textarea"
                        >
Large text area content</textarea
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">
                        Add Booking
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

  @include('admin.footer')
