<?php

//BIODIVERSITYed -- no admin or doe or document or potential table
/*function INSERT_DIVISION($connect,$LastDate,$Name,$Description,$FkeyID,$type){
    if($type == "KINGDOM"){
        $query = "INSERT INTO BIODIVERSITY.KINGDOM(BIODIVERSITY.KINGDOM.LASTMODIFIED,BIODIVERSITY.KINGDOM.NAME,BIODIVERSITY.KINGDOM.DESCRIPTION)";
        $query .= "VALUES(to_date('{$LastDate}','dd-mm-yy'),'{$Name}','{$Description}')";
    }
    else if($type == "PHYLUM"){
        $query = "INSERT INTO BIODIVERSITY.PHYLUM(BIODIVERSITY.PHYLUM.LASTMODIFIED,BIODIVERSITY.PHYLUM.NAME,BIODIVERSITY.PHYLUM.DESCRIPTION,BIODIVERSITY.PHYLUM.KINGDOMID)";
    }
    else if($type == "CLASS"){
         $query = "INSERT INTO BIODIVERSITY.CLASS(BIODIVERSITY.CLASS.LASTMODIFIED,BIODIVERSITY.CLASS.NAME,BIODIVERSITY.CLASS.DESCRIPTION,BIODIVERSITY.CLASS.PHYLUMID)";
    }
    else if($type == "ORDER"){
        $query = "INSERT INTO BIODIVERSITY.ORD(BIODIVERSITY.ORD.LASTMODIFIED,BIODIVERSITY.ORD.NAME,BIODIVERSITY.ORD.DESCRIPTION,BIODIVERSITY.ORD.CLASSID)";
    }
    else if($type == "FAMILY"){
        $query = "INSERT INTO BIODIVERSITY.FAMILY(BIODIVERSITY.FAMILY.LASTMODIFIED,BIODIVERSITY.FAMILY.NAME,BIODIVERSITY.FAMILY.DESCRIPTION,BIODIVERSITY.FAMILY.ORDERID)";
    }
    else if($type == "GENUS"){
        $query = "INSERT INTO BIODIVERSITY.GENUS(BIODIVERSITY.GENUS.LASTMODIFIED,BIODIVERSITY.GENUS.NAME,BIODIVERSITY.GENUS.DESCRIPTION,BIODIVERSITY.GENUS.FAMILYID)";
    }
    else if($type == "SPECIES"){
        $query = "INSERT INTO BIODIVERSITY.SPECIES(BIODIVERSITY.SPECIES.LASTMODIFIED,BIODIVERSITY.SPECIES.NAME,BIODIVERSITY.SPECIES.DESCRIPTION,BIODIVERSITY.SPECIES.GENUSID)";
    }

    //appending data
    if($type != "KINGDOM"){
        $query .= " VALUES(to_date('{$LastDate}','dd-mm-yy'),'{$Name}','{$Description}',$FkeyID)";
    }


    $resource = oci_parse($connect,$query);

    if(!$resource){
        die("Resource error");
    }
    else if(oci_execute($resource)){
        echo "Data Inserted into {$type}<br />";
    }
    else {
        echo "Insertion Error";
    }
}

//BIODIVERSITYed -- no admin or doe or document or potential table
function GET_ID($connect,$type,$name){
    if($type == "KINGDOM"){
        $query = "select KINGDOMID FROM BIODIVERSITY.KINGDOM WHERE BIODIVERSITY.KINGDOM.NAME='{$name}'";
    }
    else if($type == "PHYLUM"){
        $query = "select PHYLUMID FROM BIODIVERSITY.PHYLUM WHERE BIODIVERSITY.PHYLUM.NAME='{$name}'";
    }
    else if($type == "CLASS"){
        $query = "select CLASSID FROM BIODIVERSITY.CLASS WHERE BIODIVERSITY.CLASS.NAME='{$name}'";
    }
    else if($type == "ORDER"){
        //BE aware the table name is ORD
        $query = "select ORDERID FROM BIODIVERSITY.ORD WHERE BIODIVERSITY.ORD.NAME='{$name}'";
    }
    else if($type == "FAMILY"){
        $query = "select FAMILYID FROM BIODIVERSITY.FAMILY WHERE BIODIVERSITY.FAMILY.NAME='{$name}'";
    }
    else if($type == "GENUS"){
        $query = "select GENUSID FROM BIODIVERSITY.GENUS WHERE BIODIVERSITY.GENUS.NAME='{$name}'";
    }
    else if($type == "SPECIES"){
        $query = "select SPECIESID FROM BIODIVERSITY.SPECIES WHERE BIODIVERSITY.SPECIES.NAME='{$name}'";
    }

    $resource = oci_parse($connect, $query);
    if($resource && oci_execute($resource)){

        $row = oci_fetch_array($resource);
        
    if($type == "KINGDOM")return $row["KINGDOMID"];
    else if($type == "PHYLUM")return $row["PHYLUMID"];
    else if($type == "CLASS")return $row["CLASSID"];
    else if($type == "ORDER")return $row["ORDERID"];
    else if($type == "FAMILY")return $row["FAMILYID"];
    else if($type == "GENUS")return $row["GENUSID"];
    else if($type == "SPECIES")return $row["SPECIESID"];

    }
    else {
        echo "Query error in GETID Function<br />";
        return -1;
    }
}*/
    //BIODIVERSITYed -- no admin or doe or document or potential table
    function FETCH_DETAILS($connect,$type,$id){
      
        if($type == "PHYLUM"){
            $query = "select * FROM BIODIVERSITY.PHYLUM WHERE BIODIVERSITY.PHYLUM.PHYLUMID='{$id}'";
        }
        else if($type == "CLASS"){
            $query = "select * FROM BIODIVERSITY.CLASS WHERE BIODIVERSITY.CLASS.CLASSID='{$id}'";
        }
        else if($type == "ORDER"){
        //BE aware the table name is ORD
            $query = "select * FROM BIODIVERSITY.ORD WHERE BIODIVERSITY.ORD.ORDERID='{$id}'";
        }
        else if($type == "FAMILY"){
            $query = "select * FROM BIODIVERSITY.FAMILY WHERE BIODIVERSITY.FAMILY.FAMILYID='{$id}'";
        }
        else if($type == "GENUS"){
            $query = "select * FROM BIODIVERSITY.GENUS WHERE BIODIVERSITY.GENUS.GENUSID='{$id}'";
        }
        else if($type == "SPECIES"){
            $query = "select * FROM BIODIVERSITY.SPECIES WHERE BIODIVERSITY.SPECIES.SPECIESID='{$id}'";
        }

    $resource = oci_parse($connect, $query);
    if($resource && oci_execute($resource)){

        return oci_fetch_array($resource);

    }
    else {
        echo "Query error in FETCH_DETAILS Function<br />";
        return -1;
    }
 }

 function GET_CHILDS_ID($connect, $type, $parentid){
     
     $return = array();
     $childtab;

      if($type == "PHYLUM"){
            $query = "select CLASSID FROM BIODIVERSITY.CLASS WHERE BIODIVERSITY.CLASS.PHYLUMID='{$parentid}'";
            $childtab = 'CLASS';
        }
        else if($type == "CLASS"){
            $query = "select ORDERID FROM BIODIVERSITY.ORD WHERE BIODIVERSITY.ORD.CLASSID='{$parentid}'";
            $childtab = 'ORD';
        }
        else if($type == "ORDER"){
        //BE aware the table name is ORD
            $query = "select FAMILYID FROM BIODIVERSITY.FAMILY WHERE BIODIVERSITY.FAMILY.ORDERID='{$parentid}'";
            $childtab = 'FAMILY';
        }
        else if($type == "FAMILY"){
            $query = "select GENUS FROM BIODIVERSITY.GENUS WHERE BIODIVERSITY.GENUS.FAMILYID='{$parentid}'";
            $childtab = 'GENUS';
        }
        else if($type == "GENUS"){
            $query = "select SPECIESID FROM BIODIVERSITY.SPECIES WHERE BIODIVERSITY.SPECIES.GENUSID='{$parentid}'";
            $childtab = 'SPECIES';
        }

       $resource = oci_parse($connect, $query);

       if($resource && oci_execute($resource)){

           while(($row = oci_fetch_array($resource)) != NULL){
               array_push($return, $row[$childtab.'ID']);
               echo $row[$childtab.'ID']."<br/>";
           }
           return $return;
        }
      else{
            echo "Resource parsing error in GET_CHILD_ID";
            return NULL;
     }
 }

 //Problem khuje pai nah
 function ADD_NEW_ADMIN_OPERATOR($connect, $name, $username, $pass, $email, $address, $admin,$opid){

     $cur_date = date('d-m-y');
if($admin == 1){
   $query = "INSERT INTO BIODIVERSITY.ADMIN(BIODIVERSITY.ADMIN.USERNAME, BIODIVERSITY.ADMIN.PASSWORD, BIODIVERSITY.ADMIN.DESIGNATIONDATE, BIODIVERSITY.ADMIN.NAME, BIODIVERSITY.ADMIN.EMAIL, BIODIVERSITY.ADMIN.ADDRESS)";
   $query .= " VALUES('{$username}', '{$pass}', to_date('{$cur_date}','dd-mm-yy'), '{$name}', '{$email}', '{$address}')";
}else if($admin == 0){
    $query = "INSERT INTO BIODIVERSITY.DOE(BIODIVERSITY.DOE.DOEID,BIODIVERSITY.DOE.USERNAME, BIODIVERSITY.DOE.PASSWORD, BIODIVERSITY.DOE.DESIGNATIONDATE, BIODIVERSITY.DOE.NAME, BIODIVERSITY.DOE.EMAIL, BIODIVERSITY.DOE.ADDRESS)";
    $query .= " VALUES({$opid},'{$username}', '{$pass}', to_date('{$cur_date}','dd-mm-yy'), '{$name}', '{$email}', '{$address}')";
}

   if( oci_execute(oci_parse($connect, $query))){
       return 1;
   }
   else {
       echo "Invalid Resource by ADD_NEW_ADMIN<br />";
       return 0;
   }
}

//BIODIVERSITYED
function GET_ADMIN_INFO($connect, $adminid){
    $query= "SELECT * from BIODIVERSITY.ADMIN where BIODIVERSITY.ADMIN.ADMINID={$adminid}";
    $resource = oci_parse($connect, $query);
    if($resource && oci_execute($resource)){
        return oci_fetch_assoc($resource);
    }
}
//BIODIVERSITYed
function GET_OPERATOR_INFO($connect,$opid){
    $query = "SELECT * from BIODIVERSITY.DOE where BIODIVERSITY.DOE.DOEID={$opid}";
    $resource = oci_parse($connect, $query);
    if($resource && oci_execute($resource)){
        return oci_fetch_assoc($resource);
    }
}
//BIODIVERSITYed
function UPDATE_ADMIN($connect,$name, $email, $address, $username, $pass,$adminid){
    $query = "UPDATE BIODIVERSITY.ADMIN SET NAME='{$name}', EMAIL='{$email}',";
    $query .= " ADDRESS='{$address}', USERNAME='{$username}', PASSWORD='{$pass}'";
    $query.= " where ADMINID=$adminid";

    $resource = oci_parse($connect, $query);
    if($resource && oci_execute($resource)){
        return 1;
    }

    else echo "Cant write data to admin in UPDATE_ADMIN function";
}
//BIODIVERSITYed
function UPDATE_OPERATOR($connect,$name, $email, $address, $username, $pass,$opid){
    $query = "UPDATE BIODIVERSITY.DOE SET NAME='{$name}', EMAIL='{$email}',";
    $query .= " ADDRESS='{$address}', USERNAME='{$username}', PASSWORD='{$pass}'";
    $query.= " where DOEID=$opid";

    $resource = oci_parse($connect, $query);
    if($resource && oci_execute($resource)){
        return 1;
    }

    else echo "Cant write data to admin in UPDATE_OPERATOR function";
}

function REMOVE_DOE($connect, $Uname){
    $query = "DELETE  FROM BIODIVERSITY.DOE WHERE DOE.USERNAME='{$Uname}'";
    $res = oci_parse($connect, $query);
    if($res){
        if(oci_execute($res)){
            echo "Removal Complete";
        }
        else
            echo 'Query Error';
        
    }
    else {
        echo "No Resource Selected";
    }
    
}

//new function for the data entry operator
//BIODIVERSITYed
function GET_CLASSIFICATION_ID($connect,$type, $name){//here type is the classification type
    if($type == "PHYLUM")
        $query = "SELECT * from BIODIVERSITY.PHYLUM where UPPER(BIODIVERSITY.PHYLUM.NAME)=UPPER('{$name}')";
    else if($type == "CLASS")
        $query = "SELECT * from BIODIVERSITY.CLASS where UPPER(BIODIVERSITY.CLASS.NAME)=UPPER('{$name}')";
    else if($type == "ORD")
        $query = "SELECT * from BIODIVERSITY.ORD where UPPER(BIODIVERSITY.ORD.NAME)=UPPER('{$name}')";
    else if($type == "FAMILY")
        $query = "SELECT * from BIODIVERSITY.FAMILY where UPPER(BIODIVERSITY.FAMILY.NAME)=UPPER('{$name}')";
    else if($type == "GENUS")
        $query = "SELECT * from BIODIVERSITY.GENUS where UPPER(BIODIVERSITY.GENUS.NAME)=UPPER('{$name}')";
    else if($type == "SPECIES")
        $query = "SELECT * from BIODIVERSITY.SPECIES where UPPER(BIODIVERSITY.SPECIES.NAME)=UPPER('{$name}')";


    $res = oci_parse($connect, $query);
    oci_execute($res);
    $arr = oci_fetch_assoc($res);
    
    
    
    if($type == "PHYLUM" && isset($arr['PHYLUMID'])){
         return $arr['PHYLUMID'];
    }
    else if( $type== "CLASS" && isset($arr['CLASSID'])){
         return $arr['CLASSID'];
    }
    else if($type == "ORD" && isset($arr['ORDERID'])){
         return $arr['ORDERID'];
    }
    else if($type == "FAMILY" && isset($arr['FAMILYID'])){
         return $arr['FAMILYID'];
    }
    else if($type == "GENUS" && isset($arr['GENUSID'])){
         return $arr['GENUSID'];
    }
    else if( $type == "SPECIES" && isset($arr['SPECIESID'])){
         return $arr['SPECIESID'];
    }
    else return -1;

}
//BIODIVERSITYed
function ENTER_NEW_CLASSIFICATION($connect, $name, $desc, $fkey, $type, $commonname=NULL/*only for species*/){
    $cur_date = date('d-m-y');
    if($type == "PHYLUM")
        $query = "INSERT INTO BIODIVERSITY.PHYLUM(NAME,DESCRIPTION,LASTMODIFIED) VALUES('$name','{$desc}',to_date('{$cur_date}','dd-mm-yy'))";
    else if($type == "CLASS")
        $query = "INSERT INTO BIODIVERSITY.CLASS(NAME,DESCRIPTION,PHYLUMID,LASTMODIFIED)  VALUES('$name','{$desc}',$fkey,to_date('{$cur_date}','dd-mm-yy'))";
    else if($type == "ORD")
        $query = "INSERT INTO  BIODIVERSITY.ORD(NAME,DESCRIPTION,CLASSID,LASTMODIFIED)  VALUES('$name','{$desc}',$fkey,to_date('{$cur_date}','dd-mm-yy'))";
    else if($type == "FAMILY")
        $query = "INSERT INTO  BIODIVERSITY.FAMILY(NAME,DESCRIPTION,ORDERID,LASTMODIFIED)  VALUES('$name','{$desc}',$fkey,to_date('{$cur_date}','dd-mm-yy'))";
    else if($type == "GENUS")
        $query = "INSERT INTO BIODIVERSITY.GENUS(NAME,DESCRIPTION,FAMILYID,LASTMODIFIED)  VALUES('$name','{$desc}',$fkey,to_date('{$cur_date}','dd-mm-yy'))";
    else if($type == "SPECIES")
        $query = "INSERT INTO BIODIVERSITY.SPECIES(NAME,DESCRIPTION,GENUSID,LASTMODIFIED,COMMONNAME)  VALUES('$name','{$desc}',$fkey,to_date('{$cur_date}','dd-mm-yy'),'{$commonname}')";

    $res = oci_parse($connect,$query);
    return oci_execute($res);   
}
//BIODIVERSITYed
function INSERT_INTO_PO_TABLE($connect,$eid,$sid){
    $cur_date = date('d-m-y');
    $query="INSERT INTO BIODIVERSITY.POTENTIALDOCS(ENTRYID,PROPOSEDDATE,SPECIESID) ";
    $query.=" VALUES({$eid},to_date('{$cur_date}','dd-mm-yy'),{$sid})";
    //echo $query;

    $res = oci_parse($connect, $query);
    ociexecute($res);

}
//BIODIVERSITYed
/*function GET_PARENT_DETAIL($connect, $id, $type){
    
    if($type == 'CLASS')
        $query="SELECT * FROM BIODIVERSITY.CLASS WHERE BIODIVERSITY.CLASS.CLASSID={$id}";
    else if($type == 'ORDER')
        $query="SELECT * FROM BIODIVERSITY.ORD WHERE BIODIVERSITY.ORD.ORDERID={$id}";
    else if($type == 'FAMILY')
        $query="SELECT * FROM BIODIVERSITY.FAMILY WHERE BIODIVERSITY.FAMILY.FAMILYID={$id}";
    else if($type == 'GENUS')
        $query="SELECT * FROM BIODIVERSITY.GENUS WHERE BIODIVERSITY.GENUS.GENUSID={$id}";
    else if($type == 'SPECIES')
        $query="SELECT * FROM BIODIVERSITY.SPECIES WHERE BIODIVERSITY.SPECIES.SPECIESID={$id}";
    $res=oci_parse($connect, $query);
    oci_execute($res);
    return oci_fetch_assoc($res);
}*/
//BIODIVERSITYed
function UPDATE_CLASSIFICATION($Connection,$Id,$Name,$Desc,$type){
    
    if($type == 'PHYLUM')
        $query="UPDATE BIODIVERSITY.PHYLUM SET BIODIVERSITY.PHYLUM.NAME='{$Name}', BIODIVERSITY.PHYLUM.DESCRIPTION='{$Desc}'
         WHERE BIODIVERSITY.PHYLUM.PHYLUMID={$Id}";
    else if($type == 'CLASS')
        $query="UPDATE BIODIVERSITY.CLASS SET BIODIVERSITY.CLASS.NAME='{$Name}', BIODIVERSITY.CLASS.DESCRIPTION='{$Desc}'
         WHERE BIODIVERSITY.CLASS.CLASSID={$Id}";
    else if($type == 'ORDER')
        $query="UPDATE BIODIVERSITY.ORD SET BIODIVERSITY.ORD.NAME='{$Name}', BIODIVERSITY.ORD.DESCRIPTION='{$Desc}'
         WHERE BIODIVERSITY.ORD.ORDERID={$Id}";
    else if($type == 'FAMILY')
        $query="UPDATE BIODIVERSITY.FAMILY SET BIODIVERSITY.FAMILY.NAME='{$Name}', BIODIVERSITY.FAMILY.DESCRIPTION='{$Desc}'
         WHERE BIODIVERSITY.FAMILY.FAMILYID={$Id}";
    else if($type == 'GENUS')
        $query="UPDATE BIODIVERSITY.GENUS SET BIODIVERSITY.GENUS.NAME='{$Name}', BIODIVERSITY.GENUS.DESCRIPTION='{$Desc}'
         WHERE BIODIVERSITY.GENUS.GENUSID={$Id}";
    else if($type == 'SPECIES')
        $query="UPDATE BIODIVERSITY.SPECIES SET BIODIVERSITY.SPECIES.NAME='{$Name}', BIODIVERSITY.SPECIES.DESCRIPTION='{$Desc}'
         WHERE BIODIVERSITY.SPECIES.SPECIESID={$Id}";

    $res=oci_parse($Connection, $query);
    oci_execute($res);
}

function GET_CLASSIFICATION_DETAIL($connection,$type,$id){

    if($type == "PHYLUM")
        $query = "SELECT * FROM BIODIVERSITY.PHYLUM WHERE BIODIVERSITY.PHYLUM.PHYLUMID={$id}";
    else if($type == 'CLASS')
        $query="SELECT * FROM BIODIVERSITY.CLASS WHERE BIODIVERSITY.CLASS.CLASSID={$id}";
    else if($type == 'ORDER')
        $query="SELECT * FROM BIODIVERSITY.ORD WHERE BIODIVERSITY.ORD.ORDERID={$id}";
    else if($type == 'FAMILY')
        $query="SELECT * FROM BIODIVERSITY.FAMILY WHERE BIODIVERSITY.FAMILY.FAMILYID={$id}";
    else if($type == 'GENUS')
        $query="SELECT * FROM BIODIVERSITY.GENUS WHERE BIODIVERSITY.GENUS.GENUSID={$id}";
    else if($type == 'SPECIES')
        $query="SELECT * FROM BIODIVERSITY.SPECIES WHERE BIODIVERSITY.SPECIES.SPECIESID={$id}";

   $res=oci_parse($connection, $query);
   oci_execute($res);

   return oci_fetch_assoc($res);
}