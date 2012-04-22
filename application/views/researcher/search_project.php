<div id="wrapper">

    <div id ="center_content">

        
        <?php echo form_open('researcher/researcher/search_project');?>
        <div class="project_list">
            <?php echo validation_errors();?>
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
                    Project Id
                </th>
                <th scope="col" class="project_list">
                    <input type="text" name="projectid" id="projectid" value="<?php echo set_value('projectid');?>"/>
                </th>

            </tr>
            <tr class="project_list">

                <th scope="col" class="project_list">
                    Project Title
                </th>
                <th scope="col" class="project_list">
                    <input type="text" name="title" value="<?php echo set_value('title');?>"/>
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
                    Project Creation Date
                </th>
                <th scope="col" class="project_list">
                    <input type="text" name="creation_date" id="creation_date" value="<?php echo set_value('creation_date');?>"/>
                </th>
            </tr>
            <tr class="project_list">
                <th scope="col" class="project_list">
                    Project Duration
                </th>
                <th scope="col" class="project_list">
                    <input type="text" name="duration" id="duration" value="<?php echo set_value('duration');?>"/>
                </th>

            </tr>
            <tr class="project_list">
                <th></th>
                <th class="project_list">
                    <input type="submit" name="submit" id="submit" value="Search"/>
                     <a href="<?php echo base_url()."/index.php/researcher/researcher/my_projects"?>">Cancel</a>
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