<?php
	include("../connection/index.php");
        $conn = mysqli_connect("localhost","root","","ecart_db")or die("Database Error..!");
        $cpname = $_POST['p_id'];
        $sql = "SELECT * FROM product WHERE id='".$cpname."'";
        $result = mysqli_query($conn,$sql) or die("SQL Query error...!");
        $output="";
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
            $output .= "
            <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title'>UPDATE</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>
            <form>
            <div class='form-row'>
                <div class='form-group col-2'>
                    <input type='email' class='form-control' value='{$row['ID']}' disabled>
                </div>
                <div class='form-group col-2'>
                    <input type='email' class='form-control' value='{$row['username']}' disabled>
                </div>
                <div class='form-group col-3'>
                    <input type='email' class='form-control' value='{$row['uid']}' disabled>
                </div>
            </div>
            <div class='form-group'>
                <label>Name</label>
                <input type='text' class='form-control' value='{$row['pname']}'>
            </div>
            <div class='form-group'>
                <label>Price</label>
                <input type='text' class='form-control' value='{$row['pprice']}'>
            </div>
            <div class='form-row'>
                <div class='form-group col-md-6'>
                    <label>Offerce</label>
                    <textarea class='form-control' cols='30' rows='5'>{$row['pofferce']}</textarea>
                </div>
                <div class='form-group col-md-6'>
                    <label>Information</label>
                    <textarea class='form-control' cols='30' rows='5'>{$row['pinfo']}</textarea>
                </div>
                <div class='form-group col-md-6'>
                    <label>Description</label>
                    <textarea class='form-control' cols='30' rows='5'>{$row['pdescription']}</textarea>
                </div>
                <div class='form-group col-md-4'>
                    <label for='inputState'>Type</label>
                    <select id='inputState' class='form-control'>
                        <option value='Bread/Bakery'>Bread/Bakery</option>
                        <option value='Dry/Baking Goods'>Dry/Baking Goods</option>
                        <option value='Frozen Foods'>Frozen Foods</option>
                        <option value='Produce'>Produce</option>
                        <option value='Cleaners'>Cleaners</option>
                        <option value='Paper Goods'>Paper Goods</option>
                        <option value='Other'>Other</option>
                    </select>
                </div>
                <div class='form-group col-md-2'>
                    <label for='inputZip'>Seller</label>
                    <input type='text' class='form-control' value='{$row['pseller']}'>
                </div>
            </div>
            <div class='form-group'>
                <input type='file' class='form-control-file' value = '{$row['pimage']}'>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                <button type='button' class='btn btn-primary'>Save changes</button>
            </div>
            </form>
            </div>
        </div>
        ";
    }
    echo $output;
}else{
    echo "<script> alert('Invalid Action ...!')<script>";
}
?>