<template>
  <div class="container">
    <form action="">
      <div class="row mb-4">
        <div class="col-md-6">
          <div class="form-group">
            <div class="d-flex align-items-center mb-3">
              <label for="disease-history" class="mr-3 mb-0">Do you have disease history ?</label>
              <select class="form-control-sm">
                <option value="yes">Yes, I have</option>
                <option value="no">No</option>
              </select>
            </div>
            <textarea
              id="disease-history"
              class="form-control"
              cols="30"
              rows="10"
              placeholder="Describe your disease history"
            ></textarea>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-6">
          <div class="form-group">
            <div class="d-flex align-items-center mb-3">
              <label for="current-symptoms" class="mr-3 mb-0">Do you have symptoms now ?</label>
              <select class="form-control-sm">
                <option value="yes">Yes, I have</option>
                <option value="no">No</option>
              </select>
            </div>
            <textarea
              id="current-symptoms"
              class="form-control"
              cols="30"
              rows="10"
              placeholder="Describe your current symptoms"
            ></textarea>
          </div>
        </div>
      </div>

      <button class="btn btn-primary">Send Request</button>
    </form>
  </div>
</template>
