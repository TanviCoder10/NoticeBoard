<?php 
extract($_POST);
if(isset($add))
{

	if($details=="" || $sub=="" || $user=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		foreach($user as $v)
		{
mysqli_query($conn,"insert into notice values('','$v','$sub','$details',now())");
		}
		
		$err="<font color='green'>Notice added Successfully</font>";	
	}
}

?>
<h2>Add New Notice</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Subject</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4" style="padding-left: 30px;">Enter Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	

	<div class="row">
    <div class="col-sm-4" style="padding-left: 45px;">Select User</div>
    <div class="col-sm-5">
        <!-- Select All Button -->
        <button type="button" onclick="selectAllUsers()" class="btn btn-primary btn-sm" style="margin-bottom: 5px;">Select All</button>

        <!-- Multi-select box -->
        <select name="user[]" id="user-select" multiple="multiple" class="form-control">
            <?php 
            $sql = mysqli_query($conn,"select name,email from user");
            while($r = mysqli_fetch_array($sql))
            {
                echo "<option value='".$r['email']."'>".$r['name']."</option>";
            }
            ?>
        </select>
    </div>
</div>

<!-- JavaScript for selecting all options -->
<script>
function selectAllUsers() {
    let select = document.getElementById('user-select');
    for (let i = 0; i < select.options.length; i++) {
        select.options[i].selected = true;
    }
}
</script>

	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Notice" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	