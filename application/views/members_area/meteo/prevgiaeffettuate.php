<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="page-title">
        <div class ="col-md-9">
          <div class="title_left">
            <h3>Hai già effettuato le tue previsioni per oggi! </h3>
            <h5>Torna domani entro le ore 12:00</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
      <div class = "row">
       <div class="col-md-4 col-xs-12 widget widget_tally_box">
        <div class="x_panel">
          <div class="x_content">
            <div class="flex">
              <ul class="list-inline widget_profile_box text-center">
                <li class="text-center" style="float: none;">
                  <a style="float: none;" id="meteoHome">
                    <i class="fa fa-home"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Home</h3>
            <p>
              Torna alla tua homepage personale.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#meteoHome').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/site/members_area");
    })
  });
</script>