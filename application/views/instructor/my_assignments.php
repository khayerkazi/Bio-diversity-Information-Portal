<div id="wrapper">
    <div id="center_content">

        <center>
        <table width="100%" allign="center" border="0">

            <tr class="project_list">
                <th scope="col" class="project_list">
                        Assignment Id
                </th>
                <th scope="col" class="project_list">
                    Assignment Detail
                </th>
            </tr>

            <?php

                    for($index=0;$index<count($data);$index++)
                   {
             ?>
            <tr class="project_list">
                <th scope="col" class="project_list">


                       <?php
                                 echo $data[$index]['ASSIGNMENTID'];
                       ?>

                </th>
                <th scope="col" class="project_list">
                    <a href="<?php echo base_url()."/index.php/instructor/instructor/manage_assignment/".$data[$index]['ASSIGNMENTID'];?>">
                          <?php
                                     echo 'Title: '.$data[$index]['TITLE'].'<br/>'.'Specification: '.$data[$index]['DESCRIPTION'].'<br/>'.'Total Marks: '.$data[$index]['TOTAL_MARKS'].'<br/>'.'Publish date: '.$data[$index]['CREATION_DATE'].'<br/>'.'Deadline: '.$data[$index]['DURATION'];
                           ?>
                    </a>
                </th>
            </tr>

           <?php
                   }
            ?>
        </table>
        </center>
    </div>

</div>