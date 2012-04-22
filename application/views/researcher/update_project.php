<div id="wrapper">

   <!-- <div id="center_content">-->
        
        
        <!-- <?php // echo form_open_multipart('common_user/common_user/update');?> -->
     <?php echo form_open('researcher/researcher/update_project/'.$PROJECTID)?>
        <div class="project_list">
            <?php echo validation_errors();?>
            <br/>
            <?php echo $message?>
        </div>
       
        <table  width="90%" border="0" allign="center" class="project_list">
            <tr class="project_list">
                <th class="project_list">
                    Project Id
                </th>
                 <th class="project_list">
                    <?php echo $PROJECTID?>
                </th>
            </tr>

            <tr class="project_list">
                <th class="project_list">
                    Project Title
                </th>
                <th class="project_list">
                   <input type="text" name="title" id="title" value="<?php echo set_value('name')?>"/>
                </th>
            </tr>
            <tr class="project_list">
                <th class="project_list">
                    Project Description
                </th>
                <th class="project_list">
                     <textarea name="description" id="description" cols="100" rows="10" ></textarea>
                </th>
            </tr>
            <tr class="project_list">
                <th class="project_list">
                    Project Duration
                </th>
                <th class="project_list">
                    <input type="text" name="duration" id="duration" value="<?php echo set_value('duration');?>"/>
                    <br/>
                    date must be in 'dd-mm-yyyy' formate
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
                        <input type="submit"   name="Update" id="Update" value="Update"/>
                    </center>
                </th>
            </tr>
            
        </table>
    <?php echo form_close();?>

   <!-- </div>-->

</div>