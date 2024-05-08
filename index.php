<?php require_once('partials/header.php'); ?>
  <div class="content">
      <div class="row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
              <h4>Individual Sent Emails</h4>
              <div class="card-body">
                <canvas id="mychart1"></canvas>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <h4>Group Sent Emails</h4>
              <div class="card-body">
                <canvas id="mychart2" style="width: 100%"></canvas>
              </div>
            </div>
          </div>
      </div><br>
      <div class="row">
          <div class="col">
            <div class="card">
              <h4>All Emails Sent</h4>
              <div class="card-body">
                <canvas id="mychart3"></canvas>
              </div>
            </div>
          </div>
      </div>
  </div>
<?php include_once('partials/footer.php'); ?>