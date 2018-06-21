
<?php 
    include "../cms-admin/class/db_class.php" ;
    $obj= new db_class();

//$sub = $_POST['suggest'];
//if (!empty($sub)) {

    $career_postings = $obj->FlyQuery("SELECT * FROM `career_postings` WHERE `system_file_no`='1'");
    if (!empty($career_postings)) {
        foreach ($career_postings as $career):
            ?>
    <tr>
                <td><?php echo $career->system_file_no; ?></td>
                <td><?php echo $career->employee_id; ?></td>
                <td><?php echo $career->employee_name; ?></td>
                <td><?php echo $career->passport_no; ?></td>
                <td><?php echo $career->country_of_origin; ?></td>
                <td><?php echo $career->job_title; ?></td>
                <td><?php echo $career->employer_business_name; ?></td>
                <td><?php echo $career->business_address; ?></td>
                <td><?php echo $career->contract_period; ?></td>
    </tr>

            <?php
        endforeach;
    }

//}
?>




