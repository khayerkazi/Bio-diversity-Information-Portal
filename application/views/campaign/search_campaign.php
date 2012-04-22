<div id="wrapper">

    <div id ="center_content">

        
        <?php echo form_open('campaign/campaign/search_campaign');?>
        <div class="project_list">
        </div>
        <table class="project_list" width="90%" border="0" allign="center">

            <tr class="project_list">
                <th class="project_list">
                    <?php
                    if(isset($message))
                    {
                        echo $message;
                    }
                   ?>
                </th>
            </tr>

            <tr class="project_list">

                <th scope="col" class="project_list">
                     Campaign Id
                </th>
                <th scope="col" class="project_list">
                    <input type="text" name="campaignid" id="campaignid" value=""/>
                </th>

            </tr>
            <tr class="project_list">

                <th scope="col" class="project_list">
                  Campaign Title
                </th>
                <th scope="col" class="project_list">
                    <input type="text" name="title" value=""/>
                </th>
            </tr>
            <!--<tr class="project_list">
                <th scope="col" class="project_list">
                    Project Description
                </th>
                <th scope="col" class="project_list">
                    <textarea name="description" col="" />
                </th>
            </tr>-->
            <tr class="project_list">
                <th scope="col" class="project_list">
                    Campaign Creation Date
                </th>
                <th scope="col" class="project_list">
                    <input type="text" name="starttime" id="creation_date" value="<?php echo set_value('starttime');?>"/>
                </th>
            </tr>
            <tr class="project_list">
                <th scope="col" class="project_list">
                    Campaign Duration
                </th>
                <th scope="col" class="project_list">
                    <input type="text" name="finishtime" id="duration" value="<?php echo set_value('finishtime');?>"/>
                </th>

            </tr>
            <tr class="project_list">
                <th></th>
                <th class="project_list">
                    <input type="submit" name="submit" id="submit" value="Search"/>
                     <a href="<?php echo base_url()."/index.php/campaign/campaign/my_campaigns"?>">Cancel</a>
                </th>
            </tr>
               
        
            <!--<tr class="project_list">
                <th scope="col" class="project_list">
                    Project Document & Specifications
                </th>
                <th scope="col" class="project_list">
                </th>
            </tr>-->

        </table>
        <?php echo form_close();?>
    </div>

</div>