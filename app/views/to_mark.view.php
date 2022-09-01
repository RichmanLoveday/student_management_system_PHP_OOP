<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav_bar'); //show($to_mark); die; ?>
    <div class="container p-4 shadow mx-auto" style="margin-top: 80px; max-width: 1000px;">
        <?php $this->view("includes/crumps", $data); ?>
        <h4>Test to mark</h4>
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline ms-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="input-group-text" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;" id="basic-addon1"><i class="fa fa-search "></i>&nbsp;</button>
                        </div>
                        <input type="text" class="form-control" name="find" value="<?= get_Var('find') ?>"  placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                    </div>
                </form>
            </nav>
            <div class="card-group justify-content-center mx-auto w-auto">
                <?php include(view_path('to_mark')) ?>
            </div>
        </div>
<?php $this->view('includes/footer'); ?>
   