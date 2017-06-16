<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="x_panel">
          <h3>Home page dirigente</h3>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-3 col-xs-12 widget widget_tally_box">
        <div class="x_panel">
          <div class="x_content">
            <div class="flex">
              <ul class="list-inline widget_profile_box text-center">
                <li class="text-center" style="float: none;">
                  <a style="float: none;" id="rivediPrevisioni">
                    <i class="fa fa-archive"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h3 class="name">Archivio previsioni</h3>
            <p>
              Rivedi tutte le previsioni presenti.
            </p>
          </div>
        </div>
      </div>  
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#rivediPrevisioni').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/Ricerche/ricerca_dirigente");
    })
  });
</script>

