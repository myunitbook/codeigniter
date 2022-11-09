<div class="container my-2">
    <div class="row justify-content-center">
        <div class="col-lg-4 bg-light py-2 border border-primary">
            <div class="h3 bg-primary text-white p-2">Insert Employee Record</div>
            <img src="<?php echo base_url('src/image/server.svg')?>" style="width:100%; height:30vh;" class="mb-2">
            <form method="post">
                <div>
                    <input type="text" name="emp_name" placeholder="Enter Emp Name" class="form-control mb-2">
                    <input type="text" name="emp_email" placeholder="Enter Emp Email" class="form-control mb-2">
                    <input type="text" name="emp_pass" placeholder="Enter Emp Passsowrd" class="form-control mb-2">
                    <input type="submit" name="emp_ins" value="Insert Data" class="btn btn-primary mb-2">
                </div>
            </form>
        </div>
    </div>
</div>
