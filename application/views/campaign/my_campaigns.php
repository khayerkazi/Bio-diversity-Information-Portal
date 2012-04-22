<div id="wrapper">

    <div id="center_content">

        <?php echo form_open('campaign/campaigner/manage_campaign')?>
        <div class="project_list">
        </div>
          <table width="90%" border="0" align="center" class="project_list">
            <tr class="project_list">
              <th scope="col" class="project_list">Serial No.</th>
              <th scope="col" class="project_list">Campaign Specification</th>
              <th scope="col" class="project_list">Campaigner </th>
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
                  <a href="<?php echo base_url().'index.php/campaign/campaign/manage_campaign/'.$data[$index]['CAMPAIGN']['CAMPAIGNID']?>">
                    <?php echo 'Title: '.$data[$index]['CAMPAIGN']['TITLE'].'<br/>'.'Created: '.$data[$index]['CAMPAIGN']['STARTTIME'].'<br/>'.'Duration: '.$data[$index]['CAMPAIGN']['FINISHTIME'];?>
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