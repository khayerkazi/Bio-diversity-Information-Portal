<div id="wrapper">

   <!-- <div id="center_content">-->
        
        
        <!-- <?php // echo form_open_multipart('common_user/common_user/update');?> -->
     <?php echo form_open('campaign/campaign/update_campaign/'.$CAMPAIGNID)?>
        <div class="project_list">
            <?php echo validation_errors();?>
            <br/>
            <?php echo $message?>
        </div>
       
        <table  width="90%" border="0" allign="center" class="project_list">
            <tr class="project_list">
                <th class="project_list">
                    Campaign Id
                </th>
                 <th class="project_list">
                    <?php echo $CAMPAIGNID?>
                </th>
            </tr>

            <tr class="project_list">
                <th class="project_list">
                    Campaign Title
                </th>
                <th class="project_list">
                   <input type="text" name="title" id="title" value="<?php echo set_value('title')?>"/>
                </th>
            </tr>
            <tr class="project_list">
                <th class="project_list">
                   Campaign Description
                </th>
                <th class="project_list">
                     <textarea name="description" id="description" cols="100" rows="10" ></textarea>
                </th>
            </tr>
            <tr class="project_list">
                <th class="project_list">
                   campaign Duration
                </th>
                <th class="project_list">
                    <input type="text" name="finishtime" id="finishtime" value="<?php echo set_value('finishtime');?>"/>
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