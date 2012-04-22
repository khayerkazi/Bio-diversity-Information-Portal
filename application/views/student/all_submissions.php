<div id="wrapper">
    <div id="center_content">

        <table width="100%" border="0" allign="center">
            <tr>
                <th scope="col" class="project_list">
                    Assignment Id
                </th>
                <th scope="col" class="project_list">
                    Assignment Details
                </th>
                <th scope="col" class="project_list">
                    Instructor
                </th>
                <th scope="col" class="project_list">
                    Submission Details
                </th>
                <th scope="col" class="project_list">
                    Remark
                </th>
            </tr>

            <?php
            
                    for($index=0;$index<count($data);$index++)
                    {
            ?>
            <tr>
                <th scope="col" class="project_list">
                        <?php echo $data[$index]['ASSIGNMENTID']?>
                </th>
                <th scope="col" class="project_list">
                    <a href="<?php echo $data[$index]['ASSIGNMENT_FILE']?>">
                         Submitted File
                    </a>
                    <br/>Created: <?php echo $data[$index]['ASSIGNMENT_DATE'];?>

                    <br/>
                        Deadline: <?php echo $data[$index]['ASSIGNMENT_DEADLINE'];?>
                </th>
                
   
                <th scope="col" class="project_list">
                       <?php echo $data[$index]['INSTRUCTOR']['NAME'];?>
                </th>
                <th scope="col" class="project_list">
                    <a href="<?php echo $data[$index]['SUBMITTED_FILE'];?>">
                        Submitted File
                    </a>
                    <br/>
                        Submitted In: <?php echo $data[$index]['SUBMISSION_DATE'];?>
                </th>
                <th scope="col" class="project_list">
                        <?php echo $data[$index]['REMARK'].'/'.$data[$index]['ASSIGNMENT_TOTAL_MARKS'];?>
                </th>
            </tr>
           
          <?php

                    }
            ?>
            <
            
        </table>
        
    </div>
    
</div>