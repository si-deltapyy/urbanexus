
@extends('layout.user-master')


@section('content')

      <!--  BEGIN CONTENT AREA  -->
      <div id="content" class="main-content">
        <div class="container">
          <div class="container">
            <form action="">
            <div class="row">
              <div class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                  <div class="widget-content widget-content-area">

                      <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Example label</label>
                        <input
                          type="text"
                          class="form-control"
                          id="formGroupExampleInput"
                          placeholder="Example input"
                        />
                      </div>
                      <div class="form-group mb-4">
                        <label for="formGroupExampleInput2"
                          >Another label</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="formGroupExampleInput2"
                          placeholder="Another input"
                        />
                      </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                  <div class="widget-header">
                    <div class="row">
                      <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Select Field</h4>
                      </div>
                    </div>
                  </div>
                  <div class="widget-content widget-content-area">
                    <div class="row">
                      <div class="col-xl-4 mb-xl-0 mb-2">
                        <select class="form-select">
                          <option>Default select</option>
                          <option>One</option>
                          <option>Two</option>
                          <option>Three</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                  <div class="widget-header">
                    <div class="row">
                      <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>File Upload</h4>
                      </div>
                    </div>
                  </div>
                  <div class="widget-content widget-content-area">
                    <div class="mb-3">
                      <input
                        class="form-control file-upload-input"
                        type="file"
                        id="formFile"
                      />
                    </div>
                  </div>
                </div>
              </div>
            <div class="row layout-spacing">
              <div class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                  <div class="widget-header">
                    <div class="row">
                      <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Checkboxes</h4>
                      </div>
                    </div>
                  </div>
                  <div class="widget-content widget-content-area">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="customCheck1"
                      />
                      <label class="form-check-label" for="customCheck1"
                        >Check this custom checkbox</label
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                  <div class="widget-header">
                    <div class="row">
                      <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Inline radio</h4>
                      </div>
                    </div>
                  </div>
                  <div class="widget-content widget-content-area">
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="flexRadioDefault"
                        id="flexRadioDefault1"
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Default radio
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="flexRadioDefault"
                        id="flexRadioDefault2"
                        checked
                      />
                      <label class="form-check-label" for="flexRadioDefault2">
                        Default checked radio
                      </label>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                  <div class="widget-header">
                    <div class="row">
                      <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Select menu</h4>
                      </div>
                    </div>
                  </div>
                  <div class="widget-content widget-content-area">
                    <select
                      class="form-select"
                      aria-label="Default select example"
                    >
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
              </div>




            </div>
        </div>
        <button class="btn btn-primary w-25">Submit</button>
    </form>
        </div>
      </div>
      <!--  END CONTENT AREA  -->

      @endsection
