          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="BookName">Book Name: </label>
                <input type="text" class="form-control" id="BookName" placeholder="Write down your book name" value="" required="">
                <div class="invalid-feedback">
                  Valid book name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="RentingPrice">Renting Price: </label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" id="RentingPrice" placeholder="What is renting price of your book?" required="">
                <div class="invalid-feedback" style="width: 100%;">
                  Fill the price of the book.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="Detail">Detail <span class="text-muted">(Optional)</span></label>
              <textarea type="text" class="form-control" id="textarea" placeholder="Simple summary of your book" rows="5"></textarea>
              <div class="invalid-feedback">
                Please write a simple summary.
              </div>
            </div>

            <div class="mb-3">
                <div class="For:?">
                  <div class="For:options?">
                    <label class="Options" for="Choosing">For:</label>
                      </div>
                    <select class="custom-select" id="inputGroupSelect01">
                      <option selected>Choose your Options</option>
                      <option value="Renting">Renting</option>
                      <option value="Exchanging">Exchanging</option>
                      <option value="Both">Both</option>
                    </select></br></br></br></br>
                  </div>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
                  </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                  </div>
            </div></br>

            <hr class="mb-4">
                <input type="button" value="Post" style="float: right;">
          </hr>
          </form>
