<div id="wrapper">

    <div id="center_content">

        <?php echo form_open('researcher/researcher/manage_project')?>
        <div class="project_list">
        </div>
          <table width="90%" border="0" align="center" class="project_list">
            <tr class="project_list">
              <th scope="col" class="project_list">Serial No.</th>
              <th scope="col" class="project_list">Project Specification</th>
              <th scope="col" class="project_list">Other Researchers</th>
            </tr>
            <tr>

            </tr>
            <tr>

            </tr>
            <?php
                $item=1;
                $index=0;

                for($index=0;$index<count($data);$index++,$item++)
                {
                    echo "<tr class=project_list>";
            ?>
              <th scope="col" class="project_list"><?php echo $item;?></th>
              <th scope="col" class="project_list">
                  <a href="<?php echo base_url().'index.php/researcher/researcher/view_project/'.$data[$index]['PROJECT']['PROJECTID']?>">
                    <?php echo 'Title: '.$data[$index]['PROJECT']['TITLE'].'<br/>'.'Created: '.$data[$index]['PROJECT']['CREATION_DATE'].'<br/>'.'Duration: '.$data[$index]['PROJECT']['DURATION'];?>
                  </a>
             </th>
              <th scope="col" class="project_list">

                  <?php
                    foreach($data[$index]['MATES'] as $member)
                    {
                        echo $member['USERNAME'];
                        echo '<br/>';
                    }
                  ?>

              </th>


           <?php
                        echo "</tr>";


                }
            ?>
            <tr>
              <th scope="col" class="project_list">&nbsp;</th>
              <th scope="col" class="project_list">&nbsp;</th>
              <th scope="col" class="project_list">&nbsp;</th>
            </tr>
          </table>
        <?php echo form_close();?>

    </div>

</div>