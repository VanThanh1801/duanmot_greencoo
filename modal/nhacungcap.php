<?php 


function insert_nhacungcap($tenncc,$emailncc,$telncc,$addressncc,$statusncc){
    $sql="insert into agent(name,email,tel,address,status) values('$tenncc','$emailncc','$telncc','$addressncc','$statusncc')";
    pdo_execute($sql);
   
}
function loadall_agent(){
    $sql="select * from agent order by id desc limit 0,4";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}

function loadone_nhacungcap($id){
    $sql="select * from agent where id=".$id;
    $ncc=pdo_query_one($sql);
    return $ncc;
}

function delete_nhacungcap($id){
    $sql="delete from agent where id=".$id;
    pdo_execute($sql);
}


function update_nhacungcap($id,$tenncc, $emailncc, $telncc, $addressncc, $statusncc){
    $sql="update agent set name='".$tenncc."', email='".$emailncc."', tel='".$telncc."' , address='".$addressncc."', status='".$statusncc."' where id=".$id;
 
    pdo_execute($sql);
}

?>