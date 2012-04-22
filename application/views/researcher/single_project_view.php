<div id="wrapper">

    <div id ="center_content">

        <a href="<?php echo base_url()."/index.php/researcher/researcher/join_project/$PROJECTID";?>">
            <img src="<?php echo base_url()."/images/join.png";?>"/>
        </a>
    </div>

   <div id ="center_content">
       <?
        if(isset($message))
        {
            echo $message;
        }
       ?>
        <table class="project_list" width="90%" border="0" allign="center">

            <tr class="project_list">

                <th scope="col" class="project_list">
                    Project Id
                </th>
                <th scope="col" class="project_list">
                    <?php echo $PROJECTID?>
                </th>
                
            </tr>
            <tr class="project_list">

                <th scope="col" class="project_list">
                    Project Title 
                </th>
                <th scope="col" class="project_list">
                    <?php echo $TITLE?>
                </th>
                
            </tr>
            <tr class="project_list">
                <th scope="col" class="project_list">
                    Project Description
                </th>
                <th scope="col" class="project_list">
                    <?php echo $DESCRIPTION?>
                </th>
            </tr>
            <tr class="project_list">
                <th scope="col" class="project_list">
                    Project Creation Date
                </th>
                <th scope="col" class="project_list">
                    <?php echo $CREATION_DATE?>
                </th>
            </tr>
            <tr class="project_list">
                <th scope="col" class="project_list">
                    Project Duration
                </th>
                <th scope="col" class="project_list">
                    <?php echo $DURATION?>
                </th>

            </tr>
            <tr class="project_list">
                <th scope="col" class="project_list">
                    Project Document & Specifications
                </th>
                <th scope="col" class="project_list">
                    <?php echo $DOCUMENT?>
                </th>
            </tr>          
            
        </table>
    </div>

</div>