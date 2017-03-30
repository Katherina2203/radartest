<?php

?>
<section class="sidebar" >
    <div class="box-sidebar">
    <div class="box-header"><h3>Search by publications</h3></div>
        <div class="search">
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                  <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>
            </form>
        </div>
     </div>  
        <div class="box-sidebar">
          <div class="box-header"><h3>Years</h3></div>
            <?php common\widgets\YearWidget::begin(); ?>
            <?php common\widgets\YearWidget::end(); ?>
        </div>
</section>

