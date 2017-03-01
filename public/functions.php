<?php
	class zyh{
	    function  zyh(){
	        $this->str="";
	    }
	    //树
	    function tree($pid,$flag,$db,$table,$id=null){
	        $flag=$flag+1;
	        $result=$db->query("select * from $table where pid=".$pid);
	        while($row=$result->fetch_assoc()) {
	            $cid = $row["cid"];
	            $cname = $row["cname"];
	            $str = str_repeat("··", $flag);
	            if($cid==$id){
	            	$this->str.="<option value='$cid' selected>
	            				{$str}{$cname}
	            			</option>";
	            }else{
	            	$this->str.="<option value='$cid'>
	            				{$str}{$cname}
	            			</option>";
	            }
	            $this->tree($row["cid"], $flag, $db, $table,$id);
	        }
	    }
	    
	    //表
	    function table($pid,$flag,$db,$table){
	        $flag=$flag+1;
	        $result=$db->query("select * from $table where pid=".$pid);
	        while($row=$result->fetch_assoc()){
	            $cid=$row["cid"];
	            $cname=$row["cname"];
	            $pid=$row["pid"];
	            $str=str_repeat("··",$flag);
	            $this->str.="<tr>
		            	<td>$cid</td>
		            	<td class='cname'>{$str}{$cname}</td>
		            	<td>$pid</td>
						<td>
							<a href='del.php?id=$cid'>删除</a>
							<a href='update.php?id=$cid'>修改</a>
						</td>
					</tr>";
	            $this->table($row["cid"],$flag,$db,$table);
	        }
	    }  
	}
?>
