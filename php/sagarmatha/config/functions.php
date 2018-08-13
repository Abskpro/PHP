<?php   
    /**
     * @param string 'tablename'
     * @return array
     * return all data from table
     */
    function all($tablename)
    {
        global $conn;
        $sql= "select * from $tablename order by id desc";
    $sqlExec= mysqli_query($conn,$sql);
    while($data=mysqli_fetch_assoc($sqlExec))
    {
        $events[] = $data;//events[] is a blank array where data from database are stored in array
    }
    return $events;
    }
    function find($tablename,$id)
    {
        global $conn;
        $id = (int)$_GET['id'];//type casting
        $sql= " select * from events where id=$id";
        $sqlExec= mysqli_query($conn,$sql);
        $count= mysqli_num_rows($sqlExec);

        if($count == 1)
        {
            $event = mysqli_fetch_assoc($sqlExec);
            return $event;
        }
        return null;
    }
    