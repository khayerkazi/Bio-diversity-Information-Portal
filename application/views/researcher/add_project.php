<div id="wrapper">

   <!-- <div id="center_content">-->


        <!-- <?php // echo form_open_multipart('common_user/common_user/update');?> -->
     <?php echo form_open('researcher/researcher/add_project')?>
        <div class="project_list">
            <?php echo validation_errors();?>
        </div>

        <table  width="90%" border="0" allign="center" class="project_list" >
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
                        <input type="submit"   name="Submit" id="Submit" value="Submit"/>
                        <a href="<?php echo base_url()."/index.php/researcher/researcher/my_projects"?>">Cancel</a>
                    </center>
                </th>
            </tr>

        </table>
    <?php echo form_close();?>

   <!-- </div>-->

</div>