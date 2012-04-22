<div id="wrapper">
    <a href="<?php echo base_url().'/index.php/student/student/submit_assignment/'.$ASSIGNMENTID;?>">
        <img src="<?php echo base_url().'/images/student/submit.png';?>"/>
    </a>
    <div id="center_content">

     <center>
        <table border="0" width="100%">

            <tr>
                <th scope="col" class="project_list">
                    Assignment Id
                </th>
                <th scope="col" class="project_list">
                    <?php echo $ASSIGNMENTID;?>
                </th>                
            </tr>

            <tr>
                <th scope="col" class="project_list">
                    Title
                </th>
                <th scope="col" class="project_list">
                    <?php echo $TITLE;?>
                </th>
            </tr>
            <tr>
                <th scope="col" class="project_list">
                    Description
                </th>
                <th scope="col" class="project_list">
                    <?php echo $DESCRIPTION?>
                </th>
            </tr>

            <tr>
                <th scope="col" class="project_list">
                    Total Marks
                </th>
                <th scope="col" class="project_list">
                    <?php echo $TOTAL_MARKS;?>
                </th>
            </tr>
            <tr>
                <th scope="col" class="project_list">
                    Created In
                </th>
                <th scope="col" class="project_list">
                    <?php echo $CREATION_DATE;?>
                </th>
            </tr>

            <tr>
                <th scope="col" class="project_list">
                    Deadline
                </th>
                <th scope="col" class="project_list">
                    <?php echo $DURATION;?>
                </th>
            </tr>

            <tr>
                <th scope="col" class="project_list">
                    Document Link
                </th>
                <th scope="col" class="project_list">
                    <a href="<?php echo $DOCUMENT?>">Document</a>
                </th>
            </tr>
            
        </table>
      </center>
     <iframe src="<?php echo $DOCUMENT?>" style="width: 100%; height:500px" frameborder="0">

    </iframe>
    </div>
</div>
