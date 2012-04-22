<div id="wrapper">

   <!-- <div id="center_content">-->


        <!-- <?php // echo form_open_multipart('common_user/common_user/update');?> -->

     <?php echo form_open_multipart('instructor/instructor/update_assignment/'.$ASSIGNMENTID)?>
        <div class="project_list">
            <?php echo validation_errors();?>
            <?php
                 if(isset($message))
                 {
                     echo $message;
                 }
            ?>
        </div>

        <table  width="90%" border="0" allign="center" class="project_list" >
            <tr class="project_list">
                <th class="project_list">
                    Assignment Id
                </th>
                <th class="project_list">
                    <?php echo $ASSIGNMENTID?>
                </th>
            </tr>
            <tr class="project_list">
                <th class="project_list">
                     Title
                </th>
                <th class="project_list">
                   <input type="text" name="title" id="title" value="<?php echo set_value('name')?>"/>
                </th>
            </tr>
            <tr class="project_list">
                <th class="project_list">
                     Description
                </th>
                <th class="project_list">
                     <textarea name="description" id="description" cols="100" rows="10" ></textarea>
                </th>
            </tr>
            <tr class="project_list">
                <th class="project_list">
                    Totak Marks
                </th>
                <th class="project_list">
                    <input type="text" name="total_marks"/>
                </th>
            </tr>
            <tr class="project_list">
                <th class="project_list">
                    Duration
                </th>
                <th class="project_list">
                    <input type="text" name="duration" id="duration" value="<?php echo set_value('duration');?>"/>
                    <br/>
                    date must be in 'dd-mm-yyyy' formate
                </th>
            </tr>
            <tr class="project_list">
                <th scope="col" class="project_list">
                    Assignment File
                </th>
                <th scope="col" class="project_list">
                    <input type="file" name="document" id="document"/>
                </th>
            </tr>

           <!-- <tr>
                <input type="file" name="document" id="document"/>
            </tr>-->
            <tr>
                <th>

                </th>
                <th class="project_list">
                    <center>
                        <input type="submit"   name="Submit" id="Submit" value="Submit"/>
                        <a href="<?php echo base_url()."/index.php/instructor/instructor/my_assignments"?>">Cancel</a>
                    </center>
                </th>
            </tr>

        </table>
    <?php echo form_close();?>

   <!-- </div>-->

</div>