<div id="wrapper">
    <div id="center_content">
        <table width ="80%" border="0">
            <tr>
                <th scope="col" class="project_list">
                    Campaign Id
                </th>
                <th scope="col" class="project_list">
                    <?php echo $CAMPAIGNID?>
                </th>
            </tr>
            <tr>
                <th class="project_list">
                    Total Fund Raised
                </th>
                <th class="project_list">
                    <?php if($AMOUNT=null)$AMOUNT=0;echo $AMOUNT.'$'?>
                </th>
            </tr>
        </table>
    </div>
</div>