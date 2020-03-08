<?php

if (is_dir("ducat")){

	echo "directory already exist";

}
  else{
  	mkdir("ducat");
  	echo "create dir successfully";
  }
?>